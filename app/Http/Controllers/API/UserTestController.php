<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FinalUserResult;
use App\Models\Page;
use App\Models\Question;
use App\Models\Sheikh;
use App\Models\UserResult;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserTestController extends Controller
{
    public function start(Request $request)
    {

        $request->validate([
            'gender' => [
                'required', 'in:male,female',
            ],
            'status' => [
                'required', 'in:married,single,divorced,widower',
            ],
            'age' => [
                'required', 'integer',
            ],
            'name' => [
                'required',
            ]
        ]);
        $data = [
            'gender' => $request->gender,
            'status' => $request->status,
            'age' => $request->age,
            'name' => $request->name
        ];

        $uuid = (string)Str::uuid();
        UserResult::create([
                'uuid' => $uuid,
                'page_id' => 0,
                'questions' => json_encode($data)
            ]

        );

        $pages = Page::select(['id', 'name', 'page_number'])
            ->orderBy('page_number', 'asc')
            ->get();
        $questions = Question::query()->where('page_id', $pages[0]->id)->get(['id', 'question', 'page_id']);

        return response()->json([
            'uuid' => $uuid,
            'pages' => $pages,
            'questions' => $questions
        ]);
    }


    public function saveQuestions(Request $request)
    {


        $request->validate([
            'uuid' => [
                'required', 'string', 'exists:user_results,uuid'
            ],
            'page_id' => [
                'required', 'integer', 'exists:pages,id'
            ],
            'next_page_id' => [
                'sometimes', 'integer', 'exists:pages,id'
            ],
            'questions' => [
                'required', 'array',
            ]
        ]);

        UserResult::updateOrCreate(
            [
                'uuid' => $request->uuid,
                'page_id' => $request->page_id
            ],
            [
                'questions' => json_encode($request->questions)
            ]
        );

        if ($request->next_page_id) {
            $options = Question::query()->where('page_id', $request->next_page_id)->get(['id', 'question', 'page_id']);

            return response()->json([
                'uuid' => $request->uuid,
                'questions' => $options
            ]);
        } else {

            $results = \App\Models\UserResult::query()->where('uuid', $request->uuid)->get();

            $html = view('result.pdf.resultPdf', ['results' => $results])->toArabicHTML();

            $pdf = PDF::loadHTML($html)->output();
            $uuid = $request->uuid;
            $path = public_path('result/' . $uuid . '.pdf');

            file_put_contents($path, $pdf);

            FinalUserResult::updateOrCreate([
                'uuid' => $uuid,
            ],
                [
                    'result_link' => '/result/' . $uuid . '.pdf'
                ]);

            return response()->json([
                'uuid' => $request->uuid,
                'link' => '/result/' . $uuid . '.pdf',
            ]);

        }


    }


    public function startWeb(Request $request)
    {

        $request->validate([
            'gender' => [
                'required', 'in:male,female',
            ],
            'status' => [
                'required', 'in:married,single,divorced,widower',
            ],
            'age' => [
                'required', 'integer',
            ],
            'name' => [
                'required',
            ]
        ]);
        $data = [
            'gender' => $request->gender,
            'status' => $request->status,
            'age' => $request->age,
            'name' => $request->name
        ];

        $uuid = (string)Str::uuid();
        UserResult::create([
                'uuid' => $uuid,
                'page_id' => 0,
                'questions' => json_encode($data)
            ]

        );

        $page = Page::select(['id', 'name', 'page_number'])
            ->orderBy('page_number', 'asc')
            ->first();
        $questions = Question::query()->where('page_id', $page->id)->get(['id', 'question', 'page_id']);
        return view('test/questions', compact('uuid', 'page', 'questions'));

    }

    public function saveQuestionsWeb(Request $request)
    {
        if($request->questions[0] == -1){
            return view('test/healthy');
        }

//        $request->validate([
//            'uuid' => [
//                'required', 'string', 'exists:user_results,uuid'
//            ],
//            'page_id' => [
//                'required', 'integer', 'exists:pages,id'
//            ],
//            'next_page_number' => [
//                'sometimes', 'integer', 'exists:pages,id'
//            ],
//            'questions' => [
//                'required', 'array',
//            ]
//        ]);

        UserResult::updateOrCreate(
            [
                'uuid' => $request->uuid,
                'page_id' => $request->page_id
            ],
            [
                'questions' => json_encode(array_map('intval', $request->questions))
            ]
        );

        $page = Page::where('page_number', $request->next_page_number)
            ->first();
        if (isset($page)) {

            $questions = Question::query()->where('page_id',$page->id)->get(['id', 'question', 'page_id']);
            $uuid = $request->uuid;
            return view('test/questions', compact('uuid', 'page', 'questions'));

        } else {

            $results = \App\Models\UserResult::query()->where('uuid', $request->uuid)->get();

            $html = view('result.pdf.resultPdf', ['results' => $results])->toArabicHTML();

            $pdf = PDF::loadHTML($html)->output();
            $uuid = $request->uuid;
            $path = public_path('result/' . $uuid . '.pdf');

            file_put_contents($path, $pdf);

            FinalUserResult::updateOrCreate([
                'uuid' => $uuid,
            ],
                [
                    'result_link' => '/result/' . $uuid . '.pdf'
                ]);

            $contacts = Sheikh::all('name','phone');
            $link = '/result/' . $uuid . '.pdf';
            return view('test/result', compact('uuid', 'link', 'contacts'));


        }


    }
}

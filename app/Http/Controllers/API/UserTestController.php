<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FinalUserResult;
use App\Models\Page;
use App\Models\Question;
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
            ]
        ]);
        $data = [
            'gender' => $request->gender,
            'status' => $request->status,
            'age' => $request->age
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
            $path =  public_path('result/'.$uuid . '.pdf');

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


}

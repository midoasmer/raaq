<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FinalUserResult;
use App\Models\Page;
use App\Models\Question;
use App\Models\UserResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mpdf\Mpdf;

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
                'required', 'string', 'exists:user_results,uuid','unique:final_user_results,uuid'
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

        if($request->next_page_id){
            $options = Question::query()->where('page_id', $request->next_page_id)->get(['id', 'question', 'page_id']);

            return response()->json([
                'uuid' => $request->uuid,
                'questions' => $options
            ]);
        }else{

            $results = \App\Models\UserResult::query()->where('uuid', $request->uuid)->get();
            $fontDir = public_path('fonts');

            $mpdf = new Mpdf([
                'fontDir' => [$fontDir],
                'fontdata' => [
                    'cairo' => [
                        'R' => 'Cairo.ttf',
                        'useKashida' => 75,
                    ],
                ],
                'default_font' => 'cairo',
                'mode' => 'utf-8',
                'format' => 'A4',
                'tempDir' => storage_path('app/public/temp'),
                'autoScriptToLang' => true,
                'autoLangToFont' => true,
                'defaultPageNumStyle' => 'arabic-indic',
                'setAutoTopMargin' => 'pad',
            ]);

            $html = view('result.pdf.resultPdf', ['results' => $results])->render();

            $mpdf->WriteHTML($html);

            $path = storage_path('app/public/result/' . $request->uuid . '.pdf');

            $mpdf->Output($path, \Mpdf\Output\Destination::FILE);

            FinalUserResult::create([
                'uuid' => $request->uuid,
                'result_link' => 'app/public/result/' . $request->uuid . '.pdf'
            ]);

            return response()->json([
                'uuid' => $request->uuid,
                'link' => $path
            ]);
        }


    }


}

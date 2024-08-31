<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\UserResult;
use Illuminate\Http\Request;
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
                'required', 'in:married,single,divorced',
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
            'questions' => json_encode($data)
        ]);

        $pages = Page::all(['id','name']);

        return response()->json([
            'uuid' => $uuid,
            'pages' => $pages
        ]);
    }

}

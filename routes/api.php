<?php

use App\Http\Controllers\API\UserTestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/getSetting', function () {
    return response()->json([
        'whatsApp' => [
            [
                "name" => 'محمد مرعى',
                "phone" => '+201141874780'
            ],
            [
                "name" => 'عبد الله ايهاب',
                "phone" => '+201115922240'
            ]
        ]
    ]);
});


Route::prefix('takeTest')->group(function () {
    Route::post('/', [UserTestController::class, 'start']);
    Route::post('/save_questions', [UserTestController::class, 'saveQuestions']);
//    Route::post('/update', [PageController::class, 'update'])->name('page.update');
//    Route::post('/delete', [PageController::class, 'destroy'])->name('page.delete');
});

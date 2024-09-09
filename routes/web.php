<?php

use App\Http\Controllers\API\UserTestController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SettingsController;
use App\Models\UserResult;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('profile')->middleware('auth')->group(function (){
    Route::get('/',[ProfileController::class, 'edit'])->name('profile');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::prefix('page')->middleware('auth')->group(function (){
    Route::get('/',[PageController::class, 'index'])->name('page.index');
    Route::post('/add', [PageController::class, 'store'])->name('page.add');
    Route::post('/update', [PageController::class, 'update'])->name('page.update');
    Route::post('/delete', [PageController::class, 'destroy'])->name('page.delete');
});
Route::prefix('question')->middleware('auth')->group(function (){
    Route::get('/',[QuestionController::class, 'index'])->name('question.index');
    Route::post('/add', [QuestionController::class, 'store'])->name('question.add');
    Route::post('/update', [QuestionController::class, 'update'])->name('question.update');
    Route::post('/delete', [QuestionController::class, 'destroy'])->name('question.delete');
});

Route::prefix('setting')->middleware('auth')->group(function (){
    Route::get('/',[SettingsController::class, 'index'])->name('setting.index');
    Route::post('/add', [QuestionController::class, 'store'])->name('question.add');
    Route::post('/update', [QuestionController::class, 'update'])->name('question.update');
    Route::post('/delete', [QuestionController::class, 'destroy'])->name('question.delete');
});

Route::prefix('takeTest/front')->group(function () {
    Route::get('/start', function () {
        return view('test.start');
    })->name('start');
    Route::post('/', [UserTestController::class, 'startWeb'])->name('takeTest.start');
    Route::post('/save_questions', [UserTestController::class, 'saveQuestionsWeb'])->name('takeTest.saveQuestions');
//    Route::post('/update', [PageController::class, 'update'])->name('page.update');
//    Route::post('/delete', [PageController::class, 'destroy'])->name('page.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/test/result', function () {
    return ".,mnbv";
    $uuid = "75a9200d-ed79-4487-8de3-9972f17d0897"; // مثال UUID
    $results = \App\Models\UserResult::query()->where('uuid', $uuid)->get();




    $html = view('result.pdf.resultPdf',['results' => $results])->toArabicHTML();

    $pdf = PDF::loadHTML($html)->output();

    $headers = array(
        "Content-type" => "application/pdf",
    );

// Create a stream response as a file download
    return response()->streamDownload(
        fn () => print($pdf), // add the content to the stream
        "invoice.pdf", // the name of the file/stream
        $headers
    );

});


//Route::get('/test/start', function () {
//    return view('test.start');
//});


//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';

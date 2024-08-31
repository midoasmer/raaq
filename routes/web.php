<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Models\UserResult;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Mpdf\Mpdf;

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

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/test/result', function () {
    $uuid = "75a9200d-ed79-4487-8de3-9972f17d0897"; // مثال UUID
    $results = \App\Models\UserResult::query()->where('uuid', $uuid)->get();

    // إعداد مسار الخطوط
    $fontDir = public_path('fonts');


    $mpdf = new Mpdf([
        'fontDir' => [$fontDir],
        'fontdata' => [
            'cairo' => [
                'R' => 'Cairo.ttf',
                'useOTL' => 0x80,
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
        'margin_top' => 0,
        'margin_header' => 0,
        'margin_footer' => 5,
        'margin_right' => 0,
        'margin_left' => 0,
        'margin_bottom' => 0,
    ]);





    $html = view('result.pdf.resultPdf', ['results' => $results])->render();

    $mpdf->WriteHTML($html);

    $path = storage_path('app/public/result/' . $uuid . '.pdf');

    $mpdf->Output($path, \Mpdf\Output\Destination::FILE);


    return response()->download($path);
});


Route::get('/dashboard/dash', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboardDash');


//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';

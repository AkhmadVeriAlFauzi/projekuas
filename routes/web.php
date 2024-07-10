<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\HasilController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function (){
    return view('landingPage',[
        "title" => 'landingPage'
    ]);
});

Route::get('/register', function () {
    return view('sesi/register', [
        "title" => "Masuk"
    ]);
});
Route::post('/sesi/create',[SessionController::class,'create']);

Route::get('/login', function () {
    return view('sesi/index', [
        "title" => "Masuk"
    ]);
})->name('index');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'masuk']);


Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});


//criteria
Route::get('/kriteria', [CriteriaController::class, 'index']);
Route::get('/createKriteria', [CriteriaController::class, 'create']);
Route::post('/createKriteria', [CriteriaController::class, 'store']);
Route::get('/{id}/editKriteria', [CriteriaController::class, 'edit']);
Route::put('/{id}/editKriteria', [CriteriaController::class, 'update']);
Route::get('/{id}/deleteKriteria', [CriteriaController::class, 'destroy']);


// Route::get('/createKriteria', function () {
//     return view('createKriteria', [
//         "title" => "createKriteria"
//     ]);
// });

//alternative
Route::get('/alternative', [AlternativeController::class, 'index']);
Route::get('/createAlternative',[AlternativeController::class, 'create']);
Route::post('/createAlternative',[AlternativeController::class, 'store']);
Route::get('/{id}/editAlternative',[AlternativeController::class, 'edit']);
Route::put('/{id}/editAlternative',[AlternativeController::class, 'update']);
Route::get('/{id}/deleteAlternative',[AlternativeController::class, 'destroy']);

//hasil

Route::get('/hasil',[HasilController::class, 'hasil']);
// Route::get('hasil',function() {
//     return view('hasil',[
//      'title' => 'hasil'
//     ]); 
//  });

 //

    
    Route::get('/posts', [PostController::class, 'index']);

    //halaman single post

    Route::get('posts/{slug}', [PostController::class, 'show']);




Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});
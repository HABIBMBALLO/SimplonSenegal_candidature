<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\appelCandidaturesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'HomeController@index')->name('home');





Route::get('/candidats/create',[CandidatController::class,'create'])->name('candidats.create');
Route::post('/candidats/update',[CandidatController::class,'modifier'])->name('candidats.modifier');
Route::get('/candidats/show/{candidat}',[CandidatController::class,'show'])->name('candidats.show');
Route::get('/candidats/update/{candidat}',[CandidatController::class,'update'])->name('candidats.update');
Route::get('/candidats/delete/{candidat}',[CandidatController::class,'delete'])->name('candidats.delete');
Route::get('/candidats',[CandidatController::class,'index'])->name('candidats.index');
Route::post('/candidats/store',[CandidatController::class,'store'])->name('store');



























// Route::get('/testhome', 'HomeController@test')->name('testhome');
// Route::get('/test', 'TestController@index')->name('test');
// Route::get('/about', 'TestController@about')->name('about');

// Route::get('/Admin', 'HomeController@index')->name('index');



// Route::prefix('admin')->namespace('Back')->group(function () {

//     Route::name('admin')->get('/', 'AdminController@index');

// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

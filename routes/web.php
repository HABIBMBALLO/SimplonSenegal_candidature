<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\appelCandidatureController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::middleware('auth')->group(function () {
    Route::get('/candidats/create',[CandidatController::class,'create'])->name('candidats.create');
    Route::post('/candidats/update',[CandidatController::class,'modifier'])->name('candidats.modifier');
    Route::get('/candidats/show',[CandidatController::class,'show'])->name('candidats.show');
    Route::get('/candidats/update/{id}',[CandidatController::class,'update'])->name('candidats.update');
    Route::get('/candidats/delete/{id}',[CandidatController::class,'delete'])->name('candidats.delete');
    Route::get('/candidats',[CandidatController::class,'index'])->name('candidats.index');
    Route::post('/candidats/store',[CandidatController::class,'store'])->name('store');

    Route::get('/formations/create',[FormationController::class,'create'])->name('formations.create');
    Route::post('/formations/update',[FormationController::class,'modifier'])->name('formations.modifier');
    Route::get('/formations/show/{formation}',[FormationController::class,'show'])->name('formations.show');
    Route::get('/formations/update/{formation}',[FormationController::class,'update'])->name('formations.update');
    Route::get('/formations/delete/{formation}',[FormationController::class,'delete'])->name('formations.delete');
    Route::get('/formations',[FormationController::class,'index'])->name('formations.index');
    Route::post('/formations/store',[FormationController::class,'store'])->name('store');



});
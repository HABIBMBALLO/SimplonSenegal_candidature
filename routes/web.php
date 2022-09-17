-- Active: 1647452404995@@127.0.0.1@3306@simplon
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
    $appelCandidatures = App\Models\AppelCandidature::all();
    return view('welcome', compact('appelCandidatures'));
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::middleware('auth')->group(function () {

    // creer une route pour la page d'accueil
    Route::get('/home', [CandidatController::class, 'index'])->name('home');

    // creer une route pour la page de creation de candidat

    Route::get('/candidats/create',[CandidatController::class,'create'])->name('candidats.create');
    //Route::post('/candidats/update',[CandidatController::class,'modifier'])->name('candidats.modifier');
    Route::get('/candidats/show/{id}',[CandidatController::class,'show'])->name('candidats.show');
    Route::get('/candidats/update/{id}',[CandidatController::class,'update'])->name('candidats.update');
    Route::get('/candidats/delete/{id}',[CandidatController::class,'delete'])->name('candidats.delete');
    Route::get('/candidats',[CandidatController::class,'index'])->name('candidats.index');
    Route::post('/candidats/store',[CandidatController::class,'store'])->name('store');

    // creer les routes pour les formations

    Route::get('/formations/create',[FormationController::class,'create'])->name('formations.create');
    Route::post('/formations/update',[FormationController::class,'modifier'])->name('formations.modifier');
    Route::get('/formations/show/{formation}',[FormationController::class,'show'])->name('formations.show');
    Route::get('/formations/update/{formation}',[FormationController::class,'update'])->name('formations.update');
    Route::get('/formations/delete/{formation}',[FormationController::class,'delete'])->name('formations.delete');
    Route::get('/formations',[FormationController::class,'index'])->name('formations.index');
    Route::post('/formations/store',[FormationController::class,'store'])->name('store');

    // Creer les routes pour les appels à candidature
    
    Route::get('/appels/create',[appelCandidatureController::class,'create'])->name('appels.create');
    Route::post('/appels/update',[appelCandidatureController::class,'modifier'])->name('appels.modifier');
    Route::get('/appels/show/{id}',[appelCandidatureController::class,'show'])->name('appels.show');
    Route::get('/appels/update/{appel}',[appelCandidatureController::class,'update'])->name('appels.update');
    Route::get('/appels/delete/{appel}',[appelCandidatureController::class,'delete'])->name('appels.delete');
    Route::get('/appels',[appelCandidatureController::class,'index'])->name('appels.index');
    Route::post('/appels/store',[appelCandidatureController::class,'store'])->name('store');



});
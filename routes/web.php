<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
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
    $appelCandidatures = DB::table('appelCandidatures')->simplePaginate(3);
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.master');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
});

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

    // Creer les routes pour les appels ?? candidature
    
    Route::get('/appels/create',[appelCandidatureController::class,'create'])->name('appels.create');
    Route::post('/appels/update',[appelCandidatureController::class,'modifier'])->name('appels.modifier');
    Route::get('/appels/show/{id}',[appelCandidatureController::class,'show'])->name('appels.show');
    Route::get('/appels/update/{appel}',[appelCandidatureController::class,'update'])->name('appels.update');
    Route::get('/appels/delete/{appel}',[appelCandidatureController::class,'delete'])->name('appels.delete');
    Route::get('/appels',[appelCandidatureController::class,'index'])->name('appels.index');
    Route::post('/appels/store',[appelCandidatureController::class,'store'])->name('store');



});
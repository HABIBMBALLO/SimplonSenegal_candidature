<?php

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

// Route::get('/testhome', 'HomeController@test')->name('testhome');
// Route::get('/test', 'TestController@index')->name('test');
// Route::get('/about', 'TestController@about')->name('about');

// Route::get('/Admin', 'HomeController@index')->name('index');



Route::prefix('admin')->namespace('Back')->group(function () {

    Route::name('admin')->get('/', 'AdminController@index');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

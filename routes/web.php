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

// Subdomain Handling
Route::domain('{clan}.'.Config::get('app.url'))->group(function () {
    Route::get('/', 'ClansController@index');

    Auth::routes();
});

// Maindomain-Handling
Route::domain(Config::get('app.url'))->group(function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});

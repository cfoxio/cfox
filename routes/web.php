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
    Route::middleware('auth.clan')->group(function () {
        Route::get('/', 'Clan\DashboardController@index')->name('clan.dashboard');

        Route::get('/member', 'Clan\MemberController@index')->name('clan.member');
        Route::get('/teams', 'Clan\TeamController@index')->name('clan.teams');
        Route::get('/team/{team}', 'Clan\TeamController@show')->name('clan.teams.show');

        Auth::routes();
    });
});

// Maindomain-Handling
Route::domain(Config::get('app.url'))->group(function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    Auth::routes();

    Route::get('/adminlte', function() {
        return view('adminlte.test');
    })->name('adminlte.test');

    Route::get('/home', 'HomeController@index')->name('main.dashboard');

    Route::prefix('clans')->group(function() {
        Route::get('new', 'ClansController@create')->name('main.clans.create');
        Route::post('new', 'ClansController@store');
    });
});

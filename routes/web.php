<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/player', 'PlayerController@show')->name('player.show');
Route::get('/player-nav-js', 'PlayerController@show2')->name('player.player-nav-js');

Route::get('/team', 'TeamController@show')->name('team.show');

Route::get('/register', 'RegisterController@showv2')->name('register.showv2');
Route::post('/register', 'RegisterController@submit')->name('register.showv2');

Route::get('/free-agency', 'AgencyController@show')->name('agency.show');

Route::get('/stream', 'StreamController@show')->name('stream.show');



Route::get('/formswizard', 'FormsWizardController@show')->name('formswizard.show');

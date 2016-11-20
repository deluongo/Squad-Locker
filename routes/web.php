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

Route::get('/update', 'UpdateController@show')->name('update.show');
Route::post('/update', 'UpdateController@post')->name('update.post');

Route::get('/free-agency', 'AgencyController@show')->name('agency.show');

Route::get('/free-agency/teams', 'FindTeamController@show')->name('findteam.show');

Route::get('/stream', 'StreamController@show')->name('stream.show');

Route::get('/teamupdate', 'TeamUpdateController@show')->name('teamupdate.show');
Route::post('/teamupdate', 'TeamUpdateController@post')->name('teamupdate.post');

Route::get('/formswizard', 'FormsWizardController@show')->name('formswizard.show');

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

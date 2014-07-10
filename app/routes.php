<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/lorem', function() {
    return 'this is the Lorem Ipsum Generator';
}); 

Route::get('/random', function() {
    return 'this is the Random User Generator';
}); 

Route::get('/environment', function() {
    echo App::environment();
});

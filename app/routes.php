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
	return View::make('index');
});

// create lorem ipsum page and make plain form
Route::get('ligenerator', function() {
    return View::make('ligenerator');
}); 

// create random user generator page and make plain form
Route::get('rugenerator', function() {
	return View::make('rugenerator');
}); 

// get user's input from form and generate 
// the results for the random user generator
Route::post('rugenerator', function()
{
    $results = Input::get('number_of_users');
	return View::make('rugenerator')
		->with('results',$results);	
});

// get user's input from form and generate 
// the results for the lorem ipsum generator
Route::post('ligenerator', function()
{
	$results = Input::get('number_of_wp');
	return View::make('/ligenerator')
		->with('results',$results);
    
});

Route::get('/environment', function() {
    echo App::environment();
});

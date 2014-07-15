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

Route::get('ligenerator', function() {
    //return URL::current(); // whereisit?
	return View::make('ligenerator');
}); 

Route::get('rugenerator', function() {
    //return URL::current(); // whereisit?
	return View::make('rugenerator');
}); 

Route::get('rugenerator/{number_of_users?}', function($number_of_users = null)
{
    return "$number_of_users users.";
});

Route::post('rugenerator', function()
{
    $data = Input::all();
    var_dump($data);
});


Route::filter('rugenerator', function()
{
    

});

Route::get('ligenerator/{number_of_words_or_paragraphs?}', function($number_of_words_or_paragraphs = null)
{
    return "$number_of_words_or_paragraphs words or paragraphs.";
});

Route::post('ligenerator', function()
{
    $data = Input::all();
    var_dump($data);
});


Route::get('/environment', function() {
    echo App::environment();
});

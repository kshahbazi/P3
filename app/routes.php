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
    
});

Route::filter('rugenerator', function()
{
    

});

Route::filter('ligenerator', function()
{
    if (Input::get('number_of_words_or_paragraphs') < 1)
    {
		return Redirect::to('rugenerator');
    }
});


Route::get('/environment', function() {
    echo App::environment();
});

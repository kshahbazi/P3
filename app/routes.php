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

// create random user generator page and make plain form
Route::get('rugenerator', function() {
	return View::make('rugenerator');
}); 

// get user's input from form and generate 
// the results for the random user generator
Route::post('rugenerator', function()
{
    // get form input , i.e. number of users 
	$number_of_users = Input::get('number_of_users');
	
	// set the initial result to be empty
	$random_users ="";
	
	//use Faker package to generate random users
	$faker = Faker\Factory::create();
	
	//loop through to append as many users as requested to $random_users
	for ($i=0; $i < $number_of_users; $i++)
	{
		$random_users .= "<p>".$faker->name."</p>"	;	
	}
		
	print_r($random_users);
	/*return View::make('/rugenerator')->with('results',$random_users);
	
	return View::make('/rugenerator')
		->with('results',$random_users);*/
});



// create lorem ipsum page and make plain form
Route::get('ligenerator', function() {
    return View::make('ligenerator');
});

// get user's input from form and generate 
// the results for the lorem ipsum generator
Route::post('ligenerator', function()
{
	// get form input , i.e. number of paragraphs 
	$number_of_wp = Input::get('number_of_wp');
	
	// set the initial result text to empty
	$lorem_text ="";
	
	//use Badcow package to generate text
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($number_of_wp);
	
	//loop through to append as many paragraphs as requested to $lorem_text
	for ($i=0; $i < $number_of_wp; $i++)
	{
			$lorem_text .= "<p>".$paragraphs[$i]."</p><br>"	;	
	}
	
	print_r($lorem_text);
	
	/*return View::make('/ligenerator')->with('results',$lorem_text);
	
	return View::make('/ligenerator')
		->with('results',$results);*/
    
});

Route::get('/environment', function() {
    echo App::environment();
});

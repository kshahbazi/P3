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
	$include_dob = Input::get('include_dob');
	$include_bio = Input::get('include_bio');
	
	// set the initial result to be empty
	$random_users ="";
	
	//use Faker package to generate random users
	$faker = Faker\Factory::create();
	
	//loop through to append as many users as requested to $random_users
	for ($i=0; $i < $number_of_users; $i++)
	{
		//get the name from the Faker package {object?}
		$random_users .= "<h2>".$faker->name."</h2>";	
		
		// see if user checked date of birth 
		if(isset($include_dob))
		{
			// add date of birth to the user with styling
			$random_users .= "<span style='color:blue'>DOB: <em>".$faker->date($format = 'Y-m-d', $max = 'now')."</em></span><br>";
		}
		
		// see if user checked biography 
		if(isset($include_bio))
		{
			// add random text as biography
			$random_users .= $faker->text."<br>";
		}
		
		// seperate each user created a small line for clarity
		$random_users .= "<hr style='width:30px'>"	;	
		
	}
	
	// append the random user(s) generated to the rugenerator page, within results	
	return View::make('/rugenerator')->with('results',$random_users);
	
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
	
	return View::make('/ligenerator')->with('results',$lorem_text);
    
});

Route::get('/environment', function() {
    echo App::environment();
});

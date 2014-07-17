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


Route::get('/lorem-ipsum/{numPara}', function($numPara)
{
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($numPara);
	//echo 
	return implode('<p>', $paragraphs);
});

Route::get('/user-generator/{numUser}', function($numUser = 5)
{
	$faker = Faker\Factory::create();

	for($i=0;$i<$numUser;$i++){
		echo $faker->name ."<br/>" ;
	}
	
	return $numUser;
});
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


Route::get('/lorem-ipsum/', function()
{
	$generator = new Badcow\LoremIpsum\Generator();
	$query = Input::get('query');
	$text ="";
		if($query) {
			$paragraphs = $generator->getParagraphs((int)$query);
			for ($i=0; $i < sizeof($paragraphs); $i++){

				$text .='<p>'. $paragraphs[$i];
			}
		}
	return View::make('paragraphs')	->with('query', $query)->with('text', $text);
	
	//echo 
	
});

Route::get('/user-generator/', function()
{
	$faker = Faker\Factory::create();
	$query = Input::get('query');
	$text ="";
		if($query) {
			for($i=0;$i<(int)$query;$i++){
				$text.= $faker->name ."<br/>" ;
			}
		}
	return View::make('users')	->with('query', $query)->with('text', $text);
	
	
	return $numUser;
});
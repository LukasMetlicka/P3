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
	return View::make('home');
});

Route::get('/ipsum', function()
{	
	
	$var = new ipsum('files/adjectivelist.txt', 18);
		$var->init_array();
		$var->generate_random_sentence();
		$var2 = $var->get_paragraphs();
	
	
	return View::make('ipsum')->with( 'text', $var2 );
});

Route::get('/user', function()
{
	$uservar = new randomUser;
	
		$uservar1 = $uservar->export_firstName();
		$uservar2 = $uservar->export_lastName();
		$uservar3 = $uservar->export_userName();
		$uservar4 = $uservar->export_password();
		echo($uservar1);
	return View::make('user')->with(
						'firstName', $uservar1 );
});

Route::get('/password/{length}', function($length) 
{
	

	return View::make('password')->with('password',$password);
});

Route::get('/clip', function()
{
	return View::make('clip');
});
Route::get('/distraction', function()
{
	$options =  array('cookies',"puppies","kittens","blankets","rainbows","baking","rain");
	$random = $options[rand(0,6)];
	$final = "https://www.google.com/search?q=".$random."&source=lnms&tbm=isch&sa=X&ei=dLrGU5WMGcKeyASI9IGwBg&ved=0CAYQ_AUoAQ&biw=1440&bih=735";
	
	return Redirect::to( $final );
});
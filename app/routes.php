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

//HOME
Route::get('/', function()
{
	return View::make('home');
});

//IPSUM
Route::get('/ipsum', function()
{	
	
	$var = new ipsum('files/adjectivelist.txt', 48, 4);
		$var->init_array();
		$var->generate_random_paragraph();
		$var2 = $var->get_paragraphs();
	
	
	return View::make('ipsum')->with( 'text', $var2 );
});

//USER
Route::get('/user', function()
{
	$uservar = new randomuser;
	
		$uservar1 = $uservar->export_firstName();
		$uservar2 = $uservar->export_lastName();
		$uservar3 = $uservar->export_userName();
		
		$uservar4 = $uservar->export_password();
		
		
		return View::make('randomuser')->with('firstName', $uservar1)
										->with( 'lastName', $uservar2)
										->with('userName', $uservar3)
										->with('password', $uservar4 );
});

//PASSWORD
Route::get('/password', function() 
{
	
	$passvar = new password;
	
		$passvar1 = $passvar->export_password();
		
	return View::make('password')->with('password',$passvar1 );
});

//CLIP
Route::get('/clip', function()
{
	return View::make('clip');
});

//DISTRACTION
Route::get('/distraction', function()
{
	$options =  array('cookies',"puppies","kittens","blankets","rainbows","baking","rain");
	$random = $options[rand(0,6)];
	$final = "https://www.google.com/search?q=".$random."&source=lnms&tbm=isch&sa=X&ei=dLrGU5WMGcKeyASI9IGwBg&ved=0CAYQ_AUoAQ&biw=1440&bih=735";
	
	return Redirect::to( $final );
});
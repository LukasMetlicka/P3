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

function superinport($docname, $arrayname, $postlocation){
	$docname = file($docname.".txt");
	$docname_length = 0;
	foreach ($docname as $line_num => $docelement ) {
		$this->$arrayname[$line_num] = $docelement;
		$docname_length++;
	}
}

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/ipsum', function()
{
	return View::make('ipsum');
});

Route::get('/user', function()
{
	return View::make('user');
});

Route::get('/password', function()
{
	var $wordlist;
	$wordlist = superinport("wordlist", $wordlist , "characters");
	

	//check if the variable $pass_length is invalid
	
	if ( !isset($_POST['characters']) ) {
		$pass_length = 4;
	} else {
		$pass_length = intval ( $_POST['characters'] );
	}
	//save the value given by user
	$_SESSION['pass'] = $pass_length;
	$password = '';
	$i = 0;
	
	while ( $i < $pass_length ) {
		$word = $wordlist[rand(0,109582)];
		$password = $password.$word;
		$i++;
}
	return View::make('password');
});

Route::get('/clip', function()
{
	return View::make('clip');
});
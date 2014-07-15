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
	$wordlist = file('files/adjectivelist.txt');
	
	
	
	$total = count($wordlist);
	$num_of_paragraphs = 4;
	$i = 0;
	$sentance = "";
	$paragraph = "";
	$text = "";
	$grammar = array(",",";",":","#");
	$end = array(".","?","!");
	while ($i < $num_of_paragraphs) {
		for ($o = 0; $o < 11; $o++) {
			$sentance .= " ".$wordlist[rand(0,$total)];
			stripcslashes($sentance);		
			}
			$paragraph .= $sentance.$end[rand(0,2)];
		}
		echo($paragraph);
		die();
		$text .= $paragraph."<br>";
	}
	return View::make('ipsum');
});

Route::get('/user', function()
{
	$malenames = File::get("files/malename.txt");
	$femalenames = File::get("files/femalename.txt");
	$malenamelength = count($malenames);
	$femalenamelength = count($femalenames);
	$gender = rand(0,1);
	if ($gender == 0) {
		$username = $malenames[rand(0,$malenamelength)].$malenames[rand(0,$malenamelength)]; 
	} elseif ( $gender == 1 ) {
		$username = $femalenames[rand(0, $femalenamelength)].$malenames[rand(0,$malenamelength)];
	}
	$password = password(4);
	return View::make('user');
});

Route::get('/password/{length}', function($length) 
{
	$passwordlist = File::get('files/wordlist.txt');
	$length = 0;
	$password = '';
	while ( $length < 4 ) {
		$word = $passwordlist[rand(0,109582)];
		$password = $password.$word;
		$i++;
	}

	return View::make('password')->with('password',$password);
});

Route::get('/clip', function()
{
	return View::make('clip');
});
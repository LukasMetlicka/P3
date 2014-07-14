@extends('_template')
@section('title')
	Homepage
@stop

@section('head')
	<link rel="stylesheet" type="text/css"href="styles/home.css">
	<script src="js/home.js"></script>
@stop

@section('body')
	<div id="header">
		<img id="icon" src="img/icon.png" width="15%">
	</div>
	<div id="grid">
		<div id="ipsum" class="contentdiv">
			<a href="/ipsum"><h3> Lorem Ipsum Generator </h3></a>
			<p class="btext">
				A nifty little device that will generate some default code for you.
			</p>
		</div>
		<div id="user" class="contentdiv">
			<a href="/user"><h3> Random User Generator </h3></a>
			<p class="btext"> 
				This program will make some random users to populate your website.
			</p>
		</div>
		<div id="password" class="contentdiv">
			<a href="/password"><h3> Random Password Generator </h3></a>
			<p class="btext"> 
				With this, you can create a random password.  SSH away!
			</p>
		</div>
		<div id="clip" class="contentdiv">
			<a href="/clip"><h3> Clip Holder </h3></a>
			<p class="btext"> 
				Juggling multiple clips at once? no problem!
			</p>
		</div>
		<div id="devdocs" class="contentdiv">
			<a href="http://devdocs.io"><h3> DevDocs.io </h3></a>
			<p class="btext"> 
				We can't possibly give you everything you want. but DevDocs sure might!
			</p>
		</div>
		<div id="php" class="contentdiv">
			<a href="http://php.net"><h3> PHP.net </h3></a>
			<p class="btext"> 
				The foremost website on PHP!
			</p>
		</div>
		<div id="laravel" class="contentdiv">
			<a href="http://laravel.com/api/4.2/"><h3> Laravel.com </h3></a>
			<p class="btext"> 
				Right to the Laravel documentation!
			</p>
		</div>
		<div id="github" class="contentdiv">
			<a href="http://github.com"><h3> GitHub.com </h3></a>
			<p class="btext"> 
				You have to manage your content sometime!
			</p>
		</div>
		<div id="distractions" class="contentdiv">
			<a href="/ipsum"><h3> The Distractor </h3></a>
			<p class="btext"> 
				Feeling angry at your code? or just plain down?
			</p>
		</div>
	</div>
@stop
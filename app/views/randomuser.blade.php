@extends("_master")

@section('head')

<link rel="stylesheet" type="text/css" href="styles/randomuser.css">

@stop

@section('body')
<div class="contentdiv">
	<div id="firstname"class="content"><h2>First Name:</h2><p>{{ $firstName }}</p></div>
	<div id="lastname"class="content"><h2>Last Name:</h2><p>{{ $lastName }}</p></div>
	<div id="username"class="content"><h2>Username:</h2><p>{{ $userName }}</p></div>
	<div id="password"class="content"><h2>Password:</h2><p>{{ $password }}</p></div>
</div>
{{ Form::open(array('url' => '/user', 'method' => 'GET' )) }}
<input class="another" type="submit" value='ANOTHER!' action="/user">
{{ Form::close() }}
@stop
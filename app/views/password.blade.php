@extends("_master")
@section('head')

	<link rel="stylesheet" type="text/css" href="styles/password.css">

@stop
	
	@section('body')
		<div class="password"><p>{{ $password }}</p></div>
		{{ Form::open(array('url' => '/password', 'method' => 'GET' )) }}
			<input class="another" type="submit" value='ANOTHER!' action="/password">
		{{ Form::close() }}
	@stop

@extends("_master")

@section("head")
	<link rel="stylesheet" type="text/css"href="styles/ipsum.css">
@stop

@section("body")
	<div class="text">{{ $text }}</div>
	{{ Form::open(array('url' => '/ipsum', 'method' => 'GET' )) }}
		<input class="another" type="submit" value='ANOTHER!' action="/ipsum">
	{{ Form::close() }}
@stop

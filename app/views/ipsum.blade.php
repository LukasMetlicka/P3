@extends("_master")

@section("head")
	<link rel="stylesheet" type="text/css"href="styles/ipsum.css">
@stop

@section("body")
	<div class="text">{{ $text }}</div>
@stop

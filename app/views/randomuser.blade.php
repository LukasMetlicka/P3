@extends("_master")

@section('body')
	<div class="firstname">{{ $firstName }}</div>
	<div class="lastname">{{ $lastName }}</div>
	<div class="username">{{ $userName }}</div>
	<div class="password">{{ $password }}</div>
@stop
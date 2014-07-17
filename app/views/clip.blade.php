@extends("_master")

@section('body')
{{ Form::open(array('url' => 'foo/bar', 'method' => 'PUT')); }}
	Add a clip here to save it to your cookies!
	{{ Form::text('textbox'); }}
	{{ Form::submit('Add it!'); }}

{{ Form::close(); }}

@stop
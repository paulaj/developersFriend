@extends('_master')

@section('title')
User Generator
@stop

@section('content')
<h1>Let's Generate Some Users </h1><br/>


{{ Form::open(array('url' => '/user-generator/', 'method' => 'GET')) }}

Number of users desired: 
{{ Form::text('query') }}

{{ Form::submit('Generate!') }}

{{ Form::close() }}
(non numbers will not produce users)

@if ($query )
<br/>
	<h3>You Asked for {{{ $query }}} Users </h3>

{{$text}}
@endif
<br/><a href='/'>Back to Home</a> 

@stop
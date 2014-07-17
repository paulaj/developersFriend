@extends('_master')

@section('title')
Lorem Ipsum Generator
@stop

@section('content')
<h1>Let's Generate Some Lorem Ipsum </h1><br/>


{{ Form::open(array('url' => 'lorem-ipsum/', 'method' => 'GET')) }}

Number of paragraphs desired: 
{{ Form::text('query') }}

{{ Form::submit('Generate!') }}

{{ Form::close() }}
(non numbers will not produce paragraphs)

@if ($query )
<br/>
	<h3>You Asked for {{{ $query }}} Paragraphs </h3>

{{$text}}
@endif
<br/><a href='/'>Back to Home</a> 
@stop
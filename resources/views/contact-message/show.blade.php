@extends('master')

@section('content')
	<h1>{{ $contactMessage->name }}</h1>
	<p>{{ $contactMessage->message }}</p>
	<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
@endsection
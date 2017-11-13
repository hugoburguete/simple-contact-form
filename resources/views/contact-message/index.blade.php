@extends('master')

@section('content')
	@if ($contactMessages->isEmpty() === false)
		<div class="list-group">
			@foreach ($contactMessages as $message)
				<a href="{{ route('contact-message.show', ['contact_message' => $message->id]) }}" class="list-group-item">
					{{ $message->name }} - {{ str_limit($message->message, 50, '...') }}
				</a>
			@endforeach
		</div>
	@else
		<p class="italic">No messages to display</p>
	@endif
@endsection
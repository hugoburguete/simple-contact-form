@extends('master')

@section('content')
    <h1>Contact Form</h1>

    <p>Make sure you run have a database the app can call and you run the migrations.</p>
    <p>Once that's done, submit an enquiry and go to the messages page to view it. There could be a slight delay as the emails are being sent synchronously.</p>

    <contact-form></contact-form>
@endsection

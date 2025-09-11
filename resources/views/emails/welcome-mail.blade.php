@extends('emails.email-layout')

@section('email-title', 'Welcome Mail')
@section('email-header', 'Welcome, Mail')

@section('email-body')
    <img src="{{asset('asset/img/hello.svg')}}" alt="">
    <h2>Hello, {{ ucwords($user->username) ?? 'User' }}</h2>
    <p>Thank you for registering with us. We’re excited to have you on board!</p>
    <p>Start your journey and explore amazing features right away.</p>
    <a href="https://imsphare.oranbyte.com/" class="btn">Visit IMSPHARE</a>
@endsection

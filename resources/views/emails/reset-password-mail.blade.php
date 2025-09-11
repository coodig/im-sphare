@extends('emails.email-layout')

@section('email-title','Reset password request')
@section('email-header','Reset Password Request')

@section('email-body')
            <img src="{{asset('asset/img/hello.svg')}}" alt="">
            <h2>Hello, {{ ucwords($user->username) ?? 'User' }}</h2>
            <p>You requested to reset your password.</p>
            <p>Please click the button below to reset it:</p>
            <a href="{{ $resetPasswordLink }}" class="btn">Reset Password</a>
            <p>If you didn’t request this, you can safely ignore this email.</p>
@endsection


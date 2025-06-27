@extends('layouts.auth')

@section('title', 'Signin')

@section('content')
<h3>Sign In</h3>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Login</button>

    <div class="link-group">
        {{-- <a href="{{ route('password.request') }}">Forgot Password?</a> | --}}
        <a href="{{ route('signup.show') }}">Create Account</a>
    </div>
</form>
@endsection

@extends('layouts.auth')

@section('title', 'Signin')

@section('content')
<h3>Sign Up</h3>
<form method="POST" action="{{ route('signup') }}">
    @csrf

    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Register</button>

    <div class="link-group">
        {{-- <a href="{{ route('password.request') }}">Forgot Password?</a> | --}}
        <a href="{{ route('login.show') }}">Login</a>
    </div>
</form>
@endsection

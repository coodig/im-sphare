

@extends('layouts.auth')

@section('title', 'Signin')

@section('content')
<div class="auth auth--login">
    <h3 class="auth__title text-center">Log In</h3>

    <form method="POST" action="{{ route('login') }}" class="auth__form" id="login-form">
        @csrf

        <div class="auth__form-group">
            <label for="email" class="auth__label">Email</label>
            <input type="email" name="email" id="email" class="auth__input" placeholder="Enter your email" required>
              @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>

        <div class="auth__form-group">
            <label for="password" class="auth__label">Password</label>
            <input type="password" name="password" id="password" class="auth__input" placeholder="Enter password" required>
            @error('password')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="auth__form-group auth__form-group--submit">
            <button type="submit" class="auth__btn auth__btn--primary">Login</button>
        </div>

        <div class="auth__link-group">
            {{-- <a href="{{ route('password.request') }}" class="auth__link">Forgot Password?</a> --}}
            <a href="{{ route('signup.show') }}" class="auth__link">Don't have an account? Create one</a>
        </div>
        <div class="auth__link-group">
            {{-- <a href="{{ route('password.request') }}" class="auth__link">Forgot Password?</a> --}}
            <a href="{{ route('forgotpass.show') }}" class="auth__link">Forgot Password</a>
        </div>
    </form>
</div>
@endsection

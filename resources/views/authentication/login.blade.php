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
                <input type="password" name="password" id="password" class="auth__input" placeholder="Enter password"
                    required>
                @error('password')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

                <div class="auth__form-group auth__form-group--submit">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <a href="{{ url('auth/google') }}" class="btn btn-danger auth__link-group">
                    <i class="fab fa-google"></i><span>Google</span>
                </a>

                <div class="auth__link-group">
                    <span>Don't have an account?<a href="{{ route('signup.show') }}" class="auth__link"> Register</a></span>
                </div>
                <div class="auth__link-group">
                    <a href="{{ route('forgotpass.show') }}" class="auth__link">Forgot Password</a>
                </div>
        </form>
    </div>
@endsection

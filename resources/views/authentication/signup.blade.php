

@extends('layouts.auth')

@section('title', 'Signin')

@section('content')
    <div class="auth auth--signup">
        <h3 class="auth__title text-center">Create Account</h3>

        <form method="POST" action="{{ route('signup') }}" class="auth__form" id="signup-form">
            @csrf

            <div class="auth__form-group">
                <label for="username" class="auth__label">Username</label>
                <input type="text" name="username" id="username" class="auth__input" placeholder="Enter your username"
                    required>
                @error('username')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

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
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="auth__form-group auth__form-group--submit">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

           <a href="{{ url('auth/google') }}" class="btn btn-danger">
    <i class="fab fa-google"></i> Sign Up with Google
</a>

            <div class="auth__link-group">
                {{-- <a href="{{ route('password.request') }}" class="auth__link">Forgot Password?</a> --}}
                <a href="{{ route('login.show') }}">Have an account? <span class="auth__link">Login</span></a>
            </div>
        </form>
    </div>
@endsection

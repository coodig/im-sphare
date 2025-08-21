@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
    <div class="auth auth--login">
        <h3 class="auth__title text-center">Forgot Password</h3>

        {{-- Success / Error Messages --}}
        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="auth__form">
            @csrf

            <div class="auth__form-group">
                <label for="email" class="auth__label">Email</label>
                <input type="email" name="email" id="email" class="auth__input" placeholder="Enter your email" required>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="auth__form-group auth__form-group--submit">
                <button type="submit" class="auth__btn auth__btn--primary">Send Reset Link</button>
            </div>

            <div class="auth__link-group">
                <p><a href="{{ route('login.show') }}" class="auth__link">Back to Login</a></p>
                <p><a href="{{ route('signup.show') }}" class="auth__link">Create an Account</a></p>
            </div>
        </form>
    </div>
@endsection

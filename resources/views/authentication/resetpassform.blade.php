@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="auth auth--login">
    <h3 class="auth__title text-center">Reset Password</h3>

    <form method="POST" action="{{ route('password.update') }}" class="auth__form">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="auth__form-group">
            <label for="email" class="auth__label">Email</label>
            <input type="email" name="email" value="{{ $email }}" class="auth__input" required readonly>
        </div>

        <div class="auth__form-group">
            <label for="password" class="auth__label">New Password</label>
            <input type="password" name="password" class="auth__input" required>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="auth__form-group">
            <label for="password_confirmation" class="auth__label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="auth__input" required>
        </div>

        <div class="auth__form-group auth__form-group--submit">
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </div>
    </form>
</div>
@endsection

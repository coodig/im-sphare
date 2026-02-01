{{-- @extends('layouts.auth')

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
@endsection --}}


@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-text-main mb-2">Set New Password</h2>
        <p class="text-muted leading-relaxed">
            Your identity is verified. Create a strong password to secure your account.
        </p>
    </div>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div>
            <label class="block text-sm font-medium text-muted mb-1.5 ml-1">Email Address</label>
            <div class="relative">
                <input type="email" name="email" value="{{ $email }}"
                    class="w-full px-5 py-3.5 rounded-xl bg-gray-100 dark:bg-white/5 border border-transparent text-muted cursor-not-allowed font-medium outline-none"
                    required readonly>

                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-muted">
                    <iconify-icon icon="solar:lock-keyhole-bold" width="20"></iconify-icon>
                </div>
            </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-muted mb-1.5 ml-1">New Password</label>
            <input type="password" name="password"
                class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                placeholder="••••••••" required autofocus>

            @error('password')
                <small class="text-danger text-xs font-semibold ml-1 mt-1 flex items-center gap-1">
                    <iconify-icon icon="solar:danger-circle-bold"></iconify-icon> {{ $message }}
                </small>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-muted mb-1.5 ml-1">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                placeholder="••••••••" required>
        </div>

        <button type="submit" class="w-full py-4 rounded-xl bg-primary text-white font-bold text-lg hover:bg-primary-hover shadow-lg shadow-primary/30 transition-all transform hover:-translate-y-0.5 mt-4">
            Reset Password
        </button>

        <div class="text-center mt-6">
            <a href="{{ route('login.show') }}" class="text-sm font-medium text-muted hover:text-primary transition-colors hover:underline">
                Back to Login
            </a>
        </div>
    </form>
@endsection

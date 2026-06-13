@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-text-main mb-2">Forgot Password?</h2>
        <p class="text-muted leading-relaxed">
            No worries! Enter your email and we will send you a reset link.
        </p>
    </div>

    @if (session('status'))
        <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm flex items-start gap-3 shadow-sm animate-pulse-once">
            <iconify-icon icon="solar:check-circle-bold" class="text-lg mt-0.5"></iconify-icon>
            <span>{{ session('status') }}</span>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-muted mb-1.5 ml-1">Email Address</label>
            <div class="relative group">
                <input type="email" name="email" id="email"
                    class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                    placeholder="name@example.com" required>

                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-muted opacity-50 group-focus-within:text-primary group-focus-within:opacity-100 transition-all">
                    <iconify-icon icon="solar:letter-bold" width="20"></iconify-icon>
                </div>
            </div>

            @error('email')
                <small class="text-danger text-xs font-semibold ml-1 mt-1 flex items-center gap-1">
                    <iconify-icon icon="solar:danger-circle-bold"></iconify-icon> {{ $message }}
                </small>
            @enderror
        </div>

        <button type="submit" class="w-full py-4 rounded-xl bg-primary text-white font-bold text-lg hover:bg-primary-hover shadow-lg shadow-primary/30 transition-all transform hover:-translate-y-0.5">
            Send Reset Link
        </button>

        <div class="flex flex-col items-center gap-3 mt-6 text-sm">
            <a href="{{ route('login.show') }}" class="inline-flex items-center gap-2 font-bold text-text-main hover:text-primary transition-colors group">
                <iconify-icon icon="solar:arrow-left-linear" class="transition-transform group-hover:-translate-x-1"></iconify-icon>
                Back to Login
            </a>

            <span class="text-muted text-xs">or</span>

            <a href="{{ route('signup.show') }}" class="font-medium text-muted hover:text-primary transition-colors hover:underline">
                Create new account
            </a>
        </div>
    </form>
@endsection

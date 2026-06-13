@extends('layouts.auth')

@section('title', 'Create Account')

@section('content')
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-text-main mb-2">Get Started</h2>
        <p class="text-muted">Create your account to start building.</p>
    </div>

    <form method="POST" action="{{ route('signup') }}" class="space-y-5" id="signup-form">
        @csrf

        <div>
            <label class="block text-sm font-medium text-muted mb-1.5 ml-1">Username <span class="text-red-500">*</span></label>
            <input type="text" name="username"
                class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                placeholder="johndoe" required>
            @error('username') <small class="text-danger text-xs font-semibold ml-1">{{ $message }}</small> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-muted mb-1.5 ml-1">Email<span class="text-red-500">*</span></label>
            <input type="email" name="email"
                class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                placeholder="name@example.com" required>
            @error('email') <small class="text-danger text-xs font-semibold ml-1">{{ $message }}</small> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-muted mb-1.5 ml-1">Password<span class="text-red-500">*</span></label>
            <input type="password" name="password"
                class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                placeholder="••••••••" required>
            @error('password') <small class="text-danger text-xs font-semibold ml-1">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="w-full py-4 rounded-xl bg-primary text-white font-bold text-lg hover:bg-primary-hover shadow-lg shadow-primary/30 transition-all transform hover:-translate-y-0.5">
            Create Account
        </button>

        {{-- <div class="relative flex py-2 items-center">
            <div class="flex-grow border-t border-custom"></div>
            <span class="flex-shrink-0 mx-4 text-muted text-xs uppercase tracking-wider">Or</span>
            <div class="flex-grow border-t border-custom"></div>
        </div> --}}

        {{-- <div class="grid grid-cols-2 gap-4">
            <a href="{{ url('auth/google') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl border border-custom hover:bg-body transition-colors font-medium text-text-main">
                <iconify-icon icon="logos:google-icon" width="20"></iconify-icon> Google
            </a>
            <a href="{{ url('auth/github') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl bg-[#24292e] hover:bg-black text-white transition-colors font-medium">
                <iconify-icon icon="logos:github-icon" width="20" style="filter: invert(1);"></iconify-icon> GitHub
            </a>
        </div> --}}

        <div class="text-center mt-6">
            <p class="text-muted text-sm">
                Already a member? <a href="{{ route('login.show') }}" class="text-primary font-bold hover:underline">Log In</a>
            </p>
        </div>
    </form>
@endsection

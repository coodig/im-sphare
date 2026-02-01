{{-- @extends('layouts.auth')

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
                <span>Or Login with</span>
                <a href="{{ url('auth/google') }}" class="btn btn-danger auth__link-group">
                    <iconify-icon
                    icon="uim:google"></iconify-icon>
                    <span>Google</span>
                </a>
                <a href="{{ url('auth/github') }}" class="btn btn-dark auth__link-group">
                    <iconify-icon
                    icon="line-md:github-twotone"></iconify-icon>
                    <span>Github</span>
                </a>

                <div class="auth__link-group">
                    <span>Don't have an account?<a href="{{ route('signup.show') }}" class="auth__link"> Register</a></span>
                </div>
                <div class="auth__link-group">
                    <a href="{{ route('forgotpass.show') }}" class="auth__link">Forgot Password</a>
                </div>
        </form>
    </div>
@endsection --}}


@extends('layouts.auth')

@section('title', 'Log In')

@section('content')
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-text-main mb-2">Welcome Back!</h2>
        <p class="text-muted">Please enter your details to sign in.</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-5" id="login-form">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-muted mb-1.5 ml-1">Email Address<span class="text-red-500">*</span></label>
            <input type="email" name="email" id="email"
                class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                placeholder="name@example.com" required>
            @error('email')
                <small class="text-danger text-xs font-semibold ml-1 mt-1 block">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <div class="flex justify-between items-center mb-1.5 ml-1">
                <label for="password" class="block text-sm font-medium text-muted">Password<span class="text-red-500">*</span></label>
                <a href="{{ route('forgotpass.show') }}" class="text-xs font-semibold text-primary hover:underline">
                    Forgot Password?
                </a>
            </div>

            <input type="password" name="password" id="password"
                class="w-full px-5 py-3.5 rounded-xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium"
                placeholder="••••••••" required>

            @error('password')
                <small class="text-danger text-xs font-semibold ml-1 mt-1 block">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="w-full py-4 rounded-xl bg-primary text-white font-bold text-lg hover:bg-primary-hover shadow-lg shadow-primary/30 transition-all transform hover:-translate-y-0.5 mt-2">
            Log In
        </button>

        <div class="relative flex py-2 items-center">
            <div class="flex-grow border-t border-custom"></div>
            <span class="flex-shrink-0 mx-4 text-muted text-xs uppercase tracking-wider">Or login with</span>
            <div class="flex-grow border-t border-custom"></div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ url('auth/google') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl border border-custom hover:bg-body transition-colors font-medium text-text-main group">
                <iconify-icon icon="logos:google-icon" width="20"></iconify-icon>
                <span class="group-hover:text-primary transition-colors">Google</span>
            </a>
            <a href="{{ url('auth/github') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl bg-[#24292e] hover:bg-black text-white transition-colors font-medium shadow-md hover:shadow-lg">
                <iconify-icon icon="logos:github-icon" width="20" style="filter: invert(1);"></iconify-icon>
                <span>GitHub</span>
            </a>
        </div>

        <div class="text-center mt-6">
            <p class="text-muted text-sm">
                Don't have an account?
                <a href="{{ route('signup.show') }}" class="text-primary font-bold hover:underline decoration-2 underline-offset-4">Register</a>
            </p>
        </div>
    </form>
@endsection

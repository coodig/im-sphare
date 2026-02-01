{{--

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
<a href="{{ url('auth/github') }}" class="btn btn-dark auth__link-group">
                    <i class="fab fa-google"></i><span>Github</span>
                </a>

            <div class="auth__link-group">
                <a href="{{ route('login.show') }}">Have an account? <span class="auth__link">Login</span></a>
            </div>
        </form>
    </div>
    @endsection --}}
    {{-- <a href="{{ route('password.request') }}" class="auth__link">Forgot Password?</a> --}}

{{--
    @extends('layouts.auth')

@section('title', 'Create Account')

@section('content')
    <div class="text-center mb-8">
        <h3 class="text-2xl font-bold text-text-main mb-2">Create your ID</h3>
        <p class="text-sm text-muted">Join IMSPhare to build your future.</p>
    </div>

    <form method="POST" action="{{ route('signup') }}" class="space-y-5" id="signup-form">
        @csrf

        <div>
            <label for="username" class="block text-sm font-medium text-muted mb-1.5 ml-1">Username</label>
            <div class="relative group">
                <input type="text" name="username" id="username"
                    class="w-full px-5 py-3.5 rounded-2xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all duration-300 font-medium"
                    placeholder="johndoe" required>
                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-muted opacity-0 group-focus-within:opacity-100 transition-opacity">
                    <iconify-icon icon="solar:user-circle-bold" width="20"></iconify-icon>
                </div>
            </div>
            @error('username')
                <small class="text-danger text-xs font-semibold mt-1 ml-2 flex items-center gap-1">
                    <iconify-icon icon="solar:danger-circle-bold"></iconify-icon> {{ $message }}
                </small>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-muted mb-1.5 ml-1">Email Address</label>
            <input type="email" name="email" id="email"
                class="w-full px-5 py-3.5 rounded-2xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all duration-300 font-medium"
                placeholder="name@example.com" required>
            @error('email')
                <small class="text-danger text-xs font-semibold mt-1 ml-2 flex items-center gap-1">
                    <iconify-icon icon="solar:danger-circle-bold"></iconify-icon> {{ $message }}
                </small>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-muted mb-1.5 ml-1">Password</label>
            <input type="password" name="password" id="password"
                class="w-full px-5 py-3.5 rounded-2xl bg-body border border-transparent text-text-main placeholder-muted/60 focus:bg-card focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all duration-300 font-medium"
                placeholder="••••••••" required>
            @error('password')
                <small class="text-danger text-xs font-semibold mt-1 ml-2 flex items-center gap-1">
                    <iconify-icon icon="solar:danger-circle-bold"></iconify-icon> {{ $message }}
                </small>
            @enderror
        </div>

        <button type="submit" class="w-full py-3.5 rounded-full bg-primary text-white font-bold text-lg shadow-apple hover:shadow-apple-hover hover:bg-primary-hover transform hover:-translate-y-0.5 transition-all duration-300 mt-2">
            Create Account
        </button>

        <div class="relative flex py-2 items-center">
            <div class="flex-grow border-t border-custom"></div>
            <span class="flex-shrink-0 mx-4 text-muted text-xs uppercase tracking-wider">Or continue with</span>
            <div class="flex-grow border-t border-custom"></div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ url('auth/google') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl border border-custom hover:bg-body hover:border-primary/30 transition-all duration-300 group">
                <iconify-icon icon="logos:google-icon" width="20"></iconify-icon>
                <span class="text-sm font-semibold text-text-main group-hover:text-primary transition-colors">Google</span>
            </a>

            <a href="{{ url('auth/github') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl bg-[#24292e] hover:bg-black text-white transition-all duration-300 shadow-md hover:shadow-lg">
                <iconify-icon icon="logos:github-icon" width="20" style="filter: invert(1);"></iconify-icon>
                <span class="text-sm font-semibold">GitHub</span>
            </a>
        </div>

        <div class="text-center mt-6">
            <p class="text-muted text-sm">
                Already have an account?
                <a href="{{ route('login.show') }}" class="text-primary font-bold hover:underline decoration-2 underline-offset-4">Log In</a>
            </p>
        </div>
    </form>
@endsection --}}



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

        <div class="relative flex py-2 items-center">
            <div class="flex-grow border-t border-custom"></div>
            <span class="flex-shrink-0 mx-4 text-muted text-xs uppercase tracking-wider">Or</span>
            <div class="flex-grow border-t border-custom"></div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ url('auth/google') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl border border-custom hover:bg-body transition-colors font-medium text-text-main">
                <iconify-icon icon="logos:google-icon" width="20"></iconify-icon> Google
            </a>
            <a href="{{ url('auth/github') }}" class="flex items-center justify-center gap-2 py-3 rounded-xl bg-[#24292e] hover:bg-black text-white transition-colors font-medium">
                <iconify-icon icon="logos:github-icon" width="20" style="filter: invert(1);"></iconify-icon> GitHub
            </a>
        </div>

        <div class="text-center mt-6">
            <p class="text-muted text-sm">
                Already a member? <a href="{{ route('login.show') }}" class="text-primary font-bold hover:underline">Log In</a>
            </p>
        </div>
    </form>
@endsection

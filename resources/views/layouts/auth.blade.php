{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | IMSPhare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('asset/css/layout.css')}}">
     <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>
</head>
<body class="auth-layout">

    <div class="auth-container">
        <div class="auth-box" >
            <div class="logo-section">
                <h2 class="brand-title"><a href="{{route('landing.show')}}">IMSPhare</a></h2>
            </div>
            @yield('content')
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html> --}}


{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | IMSPhare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Lexend Deca', 'sans-serif'], },
                    colors: {
                        primary: 'var(--primary-color)', 'primary-hover': 'var(--btn-primary-hover)',
                        body: 'var(--bg-color)', card: 'var(--card-bg)',
                        'text-main': 'var(--text-color)', muted: 'var(--muted-text)',
                        custom: 'var(--border-color)',
                    },
                    boxShadow: {
                        'apple': '0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)',
                        'apple-hover': '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            :root {
                --primary-color: #0071e3; --btn-primary-hover: #0077ed;
                --bg-color: #f5f5f7; --card-bg: #ffffff;
                --text-color: #1d1d1f; --muted-text: #86868b;
                --border-color: #d2d2d7;
            }
            .dark-theme {
                --primary-color: #2997ff; --btn-primary-hover: #0071e3;
                --bg-color: #000000; --card-bg: #1c1c1e;
                --text-color: #f5f5f7; --muted-text: #86868b;
                --border-color: #424245;
            }
            body {
                @apply bg-body text-text-main transition-colors duration-500;
                font-family: 'Lexend Deca', sans-serif;
            }
        }


        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-card {
            animation: fadeUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen p-6 relative overflow-hidden">

    <div class="absolute top-[-20%] left-[-10%] w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] -z-10 pointer-events-none"></div>
    <div class="absolute bottom-[-20%] right-[-10%] w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[100px] -z-10 pointer-events-none"></div>

    <button onclick="toggleTheme()" class="absolute top-6 right-6 p-2 rounded-full bg-card shadow-sm border border-custom text-text-main hover:text-primary transition-colors z-50">
        <iconify-icon icon="line-md:moon-filled-to-sunny-filled-loop-transition" width="24"></iconify-icon>
    </button>

    <div class="w-full max-w-md bg-card border border-custom rounded-[2rem] shadow-apple p-8 md:p-10 animate-card relative z-10">

        <div class="text-center mb-8">
            <a href="{{route('landing.show')}}" class="inline-flex items-center gap-3 group">
                <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-10 h-10 group-hover:scale-110 transition-transform duration-300">
                <span class="font-bold text-2xl tracking-tight text-text-main">IMSPhare</span>
            </a>
        </div>

        <div class="auth-content">
            @yield('content')
        </div>

        <div class="mt-8 pt-6 border-t border-custom text-center text-xs text-muted">
            &copy; {{ date('Y') }} IMSPhare. Secure Access.
        </div>
    </div>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
        }
    </script>

</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | IMSPhare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Lexend Deca', 'sans-serif'], },
                    colors: {
                        primary: 'var(--primary-color)', 'primary-hover': 'var(--btn-primary-hover)',
                        body: 'var(--bg-color)', card: 'var(--card-bg)',
                        'text-main': 'var(--text-color)', muted: 'var(--muted-text)',
                        custom: 'var(--border-color)',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            :root {
                --primary-color: #0071e3; --btn-primary-hover: #0077ed;
                --bg-color: #f5f5f7; --card-bg: #ffffff;
                --text-color: #1d1d1f; --muted-text: #86868b;
                --border-color: #d2d2d7;
            }
            .dark-theme {
                --primary-color: #2997ff; --btn-primary-hover: #0071e3;
                --bg-color: #000000; --card-bg: #1c1c1e;
                --text-color: #f5f5f7; --muted-text: #86868b;
                --border-color: #424245;
            }
            body {
                @apply bg-body text-text-main transition-colors duration-500;
                font-family: 'Lexend Deca', sans-serif;
            }
        }
    </style>
</head>

<body class="h-screen w-full overflow-hidden flex">

    <div class="hidden lg:flex w-1/2 bg-primary relative items-center justify-center overflow-hidden">

        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-black/10 to-transparent"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-white/20 rounded-full blur-3xl"></div>

        <div class="relative z-10 text-center px-12 text-white">
            <div class="mb-8 flex justify-center">
                 <div class="w-24 h-24 bg-white/20 backdrop-blur-md rounded-3xl flex items-center justify-center shadow-lg">
                    <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-16 h-16">
                 </div>
            </div>
            <h1 class="text-5xl font-bold mb-4">IMSPhare</h1>
            <p class="text-xl opacity-90 leading-relaxed">
                Build your professional portfolio <br> in minutes, not days.
            </p>
        </div>
    </div>

    <div class="w-full lg:w-1/2 h-full bg-card flex flex-col relative">

        <div class="absolute top-6 right-6 z-20">
            <button onclick="toggleTheme()" class="p-2 rounded-full border border-custom hover:border-primary text-text-main hover:text-primary transition-all">
                <iconify-icon icon="line-md:moon-filled-to-sunny-filled-loop-transition" width="24"></iconify-icon>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto flex items-center justify-center p-6 md:p-12">
            <div class="w-full max-w-md">
                 <div class="lg:hidden text-center mb-8">
                    <a href="{{route('landing.show')}}" class="inline-flex items-center gap-2">
                        <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-8 h-8">
                        <span class="font-bold text-2xl tracking-tight text-text-main">IMSPhare</span>
                    </a>
                </div>

                @yield('content')

                <div class="mt-8 text-center text-xs text-muted">
                    &copy; {{ date('Y') }} IMSPhare. All rights reserved.
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
        }
    </script>

</body>
</html>

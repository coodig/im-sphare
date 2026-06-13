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
            <h1 class="text-5xl font-bold mb-4"><a href="{{ route('landing.show') }}">IMSPhare</a></h1>
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

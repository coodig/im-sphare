<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | {{ config('app.name') }}</title>
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
                        'apple': '0 8px 30px rgba(0, 0, 0, 0.12)',
                        'glow': '0 0 20px rgba(0, 113, 227, 0.4)',
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

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade { animation: fadeIn 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards; }
    </style>
</head>

<body class="h-screen w-full flex items-center justify-center relative overflow-hidden">

    <button onclick="toggleTheme()" class="absolute top-6 right-6 p-3 rounded-full bg-card/50 backdrop-blur-md border border-custom text-text-main hover:text-primary transition-all z-50 shadow-sm">
        <iconify-icon icon="line-md:moon-filled-to-sunny-filled-loop-transition" width="24"></iconify-icon>
    </button>

    <div class="absolute top-0 left-0 w-full h-full -z-10 overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[600px] h-[600px] bg-primary/20 rounded-full blur-[120px] animate-float"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-purple-500/10 rounded-full blur-[100px] animate-float" style="animation-delay: 2s;"></div>

        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20"></div>
    </div>

    <div class="relative z-10 w-full max-w-2xl px-6 text-center">

        <div class="mb-8 flex justify-center animate-fade">
            <div class="p-4 bg-white/30 dark:bg-black/30 backdrop-blur-xl rounded-3xl shadow-apple border border-white/20">
                <img src="{{ asset('asset/icons/imsphare-icon.png') }}" alt="Logo" class="w-16 h-16">
            </div>
        </div>

        <div class="mb-10 animate-fade" style="animation-delay: 0.1s;">
            <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-primary/10 text-primary text-sm font-bold tracking-wide uppercase border border-primary/20">
                Under Construction
            </span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight bg-clip-text text-transparent bg-gradient-to-r from-text-main to-muted">
                Something extraordinary <br> is in the works.
            </h1>
            <p class="text-xl text-muted max-w-lg mx-auto leading-relaxed">
                We are crafting a new experience for IMSPhare. <br> Be the first to know when we go live.
            </p>
        </div>

        <div class="animate-fade" style="animation-delay: 0.2s;">
            <form action="#" class="max-w-md mx-auto relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-primary to-purple-600 rounded-full blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>

                <div class="relative flex items-center p-1.5 bg-card rounded-full border border-custom shadow-apple focus-within:border-primary focus-within:ring-4 focus-within:ring-primary/10 transition-all">

                    <div class="pl-4 text-muted">
                        <iconify-icon icon="solar:letter-bold" width="22"></iconify-icon>
                    </div>

                    <input type="email" placeholder="Enter your email address"
                        class="w-full bg-transparent border-none outline-none text-text-main px-4 py-3 placeholder-muted/70 font-medium h-full">

                    <button type="button" class="bg-text-main text-body hover:bg-primary hover:text-white px-6 py-3 rounded-full font-bold transition-all duration-300 shadow-md transform hover:scale-105 whitespace-nowrap">
                        Notify Me
                    </button>
                </div>
            </form>
            <p class="mt-4 text-sm text-muted opacity-80">No spam, just updates. Unsubscribe anytime.</p>
        </div>

        <div class="mt-16 flex justify-center gap-6 animate-fade" style="animation-delay: 0.3s;">
            <a href="{{ route('landing.show') }}" class="text-muted hover:text-primary transition-colors flex items-center gap-2 font-medium">
                <iconify-icon icon="solar:arrow-left-linear"></iconify-icon> Back to Home
            </a>
            <a href="mailto:support@imsphare.com" class="text-muted hover:text-primary transition-colors font-medium">Contact Support</a>
        </div>

    </div>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
        }
    </script>
</body>
</html>

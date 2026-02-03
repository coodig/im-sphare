<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Access - IMSPhare Developers</title>
    <link rel="icon" type="image/png" href="{{ asset('asset/icons/imsphare-icon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@3.0.0/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Lexend Deca', 'sans-serif'],
                        mono: ['Fira Code', 'monospace'],
                    },
                    colors: {
                        primary: '#0071e3', body: '#f5f5f7', card: '#ffffff', text: '#1d1d1f'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#0d1117] text-white font-sans antialiased min-h-screen flex flex-col">

    <nav class="flex justify-between items-center px-8 py-6 border-b border-gray-800">
        <a href="{{ url('/') }}" class="flex items-center gap-2 text-xl font-bold tracking-tight">
            <img src="{{ asset('asset/icons/imsphare-icon.png') }}" class="w-8 h-8">
            IMSPhare <span class="text-primary text-xs px-2 py-0.5 bg-blue-900/30 rounded border border-blue-800 uppercase tracking-widest">Developers</span>
        </a>
        <a href="{{ route('landing.show') }}" class="text-gray-400 hover:text-white transition text-sm">Back to Home</a>
    </nav>

    <main class="flex-1 flex flex-col lg:flex-row items-center justify-center gap-16 px-6 py-12 max-w-7xl mx-auto w-full">

        <div class="lg:w-1/2 space-y-8 text-center lg:text-left">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-yellow-500/10 border border-yellow-500/20 text-yellow-500 text-sm font-medium">
                <iconify-icon icon="solar:construction-bold"></iconify-icon>
                <span>Under Development</span>
            </div>

            <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
                Build whatever you want with your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">Portfolio Data.</span>
            </h1>

            <p class="text-gray-400 text-lg leading-relaxed max-w-xl mx-auto lg:mx-0">
                We are building a robust REST API that allows you to fetch your projects, skills, and profile data dynamically. Use it to build custom frontends, mobile apps, or resume generators.
            </p>

            <div class="max-w-md mx-auto lg:mx-0">
                <label class="block text-sm font-medium text-gray-300 mb-2">Get notified when API launches</label>
                <form class="flex gap-2">
                    <input type="email" placeholder="dev@example.com" class="flex-1 bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-primary transition">
                    <button type="button" class="px-6 py-3 bg-primary hover:bg-blue-600 text-white font-bold rounded-lg transition shadow-lg shadow-blue-900/20">
                        Notify Me
                    </button>
                </form>
                <p class="text-xs text-gray-500 mt-2">No spam. Only developer updates.</p>
            </div>
        </div>

        <div class="lg:w-1/2 w-full">
            <div class="bg-[#161b22] border border-gray-800 rounded-xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                <div class="bg-[#0d1117] px-4 py-3 flex items-center justify-between border-b border-gray-800">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="text-xs text-gray-500 font-mono">GET /api/v1/u/adarsh</div>
                    <div></div>
                </div>

                <div class="p-6 overflow-x-auto">
                    <pre class="font-mono text-sm leading-relaxed">
<span class="text-purple-400">const</span> <span class="text-blue-400">response</span> = <span class="text-purple-400">await</span> fetch(<span class="text-green-400">'https://api.imsphare.com/v1/u/adarsh'</span>, {
  <span class="text-orange-400">headers</span>: {
    <span class="text-green-400">'Authorization'</span>: <span class="text-green-400">'Bearer sph_8293...'</span>
  }
});

<span class="text-gray-500">// API Response Preview</span>
<span class="text-purple-400">const</span> <span class="text-blue-400">data</span> = {
  <span class="text-red-400">"username"</span>: <span class="text-green-400">"adarsh"</span>,
  <span class="text-red-400">"role"</span>: <span class="text-green-400">"Full Stack Developer"</span>,
  <span class="text-red-400">"verified"</span>: <span class="text-blue-400">true</span>,
  <span class="text-red-400">"projects"</span>: [
    {
      <span class="text-red-400">"name"</span>: <span class="text-green-400">"IMSPhare"</span>,
      <span class="text-red-400">"tech_stack"</span>: [<span class="text-green-400">"Laravel"</span>, <span class="text-green-400">"Tailwind"</span>],
      <span class="text-red-400">"stars"</span>: <span class="text-blue-400">128</span>
    }
  ]
}</pre>
                </div>
            </div>
        </div>
    </main>

    <footer class="border-t border-gray-800 py-8 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} IMSPhare API Division.
    </footer>

</body>
</html>

@extends('layouts.app')

@section('content')

<div class="relative py-16 md:py-24 overflow-hidden text-center">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-orange-500/10 rounded-full blur-[120px] -z-10 opacity-50 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <span class="inline-block py-1.5 px-4 rounded-full bg-body border border-custom text-xs font-bold text-orange-500 mb-6 tracking-wide uppercase shadow-sm">
            Last Updated: {{ date('F d, Y') }}
        </span>
        <h1 class="text-4xl md:text-6xl font-black text-text-main mb-6 tracking-tight leading-tight">
            Cookie Policy
        </h1>
        <p class="text-lg md:text-xl text-muted mb-10 max-w-2xl mx-auto leading-relaxed">
            We use cookies to make IMSPhare secure, fast, and personalized for you. Here’s exactly what we track and why.
        </p>
    </div>
</div>

<div class="container mx-auto px-6 mb-20">
    <div class="bg-card border border-custom rounded-[2.5rem] p-8 md:p-12 relative overflow-hidden">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-start gap-6">
                <div class="w-12 h-12 rounded-2xl bg-orange-500/10 flex items-center justify-center text-orange-500 flex-shrink-0">
                    <iconify-icon icon="solar:cookie-bold-duotone" class="text-2xl"></iconify-icon>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-text-main mb-4">What are Cookies?</h2>
                    <p class="text-muted text-lg leading-relaxed mb-4">
                        Cookies are small text files that are stored on your computer or mobile device when you visit a website. They are widely used to make websites work more efficiently and to provide information to the owners of the site.
                    </p>
                    <p class="text-muted text-lg leading-relaxed">
                        At <strong class="text-text-main">IMSPhare</strong>, we primarily use "First-party cookies" (set by us) to handle authentication and session security.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 mb-24">
    <h2 class="text-3xl font-bold text-text-main mb-10 text-center">How We Use Cookies</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 relative group">
            <div class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-6">
                <iconify-icon icon="solar:shield-check-bold-duotone" class="text-2xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Strictly Necessary</h3>
            <p class="text-sm text-muted mb-4">
                These are essential for the website to function. Without them, you cannot log in or secure your account.
            </p>
            <ul class="text-sm text-muted space-y-2 border-t border-custom pt-4">
                <li class="flex items-center gap-2"><iconify-icon icon="solar:check-circle-bold" class="text-blue-500"></iconify-icon> Login Sessions</li>
                <li class="flex items-center gap-2"><iconify-icon icon="solar:check-circle-bold" class="text-blue-500"></iconify-icon> CSRF Protection</li>
            </ul>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-purple-500/50 transition-all hover:-translate-y-1 relative group">
            <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-500 mb-6">
                <iconify-icon icon="solar:settings-bold-duotone" class="text-2xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Functionality</h3>
            <p class="text-sm text-muted mb-4">
                These remember your choices to provide a better experience, like your preferred theme or language.
            </p>
            <ul class="text-sm text-muted space-y-2 border-t border-custom pt-4">
                <li class="flex items-center gap-2"><iconify-icon icon="solar:check-circle-bold" class="text-purple-500"></iconify-icon> Dark/Light Mode</li>
                <li class="flex items-center gap-2"><iconify-icon icon="solar:check-circle-bold" class="text-purple-500"></iconify-icon> Sidebar State</li>
            </ul>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-green-500/50 transition-all hover:-translate-y-1 relative group">
            <div class="w-12 h-12 rounded-xl bg-green-500/10 flex items-center justify-center text-green-500 mb-6">
                <iconify-icon icon="solar:chart-2-bold-duotone" class="text-2xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Performance</h3>
            <p class="text-sm text-muted mb-4">
                We use minimal analytics to understand how many users visit portfolio pages to optimize speed.
            </p>
            <ul class="text-sm text-muted space-y-2 border-t border-custom pt-4">
                <li class="flex items-center gap-2"><iconify-icon icon="solar:check-circle-bold" class="text-green-500"></iconify-icon> Page Load Speed</li>
                <li class="flex items-center gap-2"><iconify-icon icon="solar:check-circle-bold" class="text-green-500"></iconify-icon> Visitor Counts</li>
            </ul>
        </div>

    </div>
</div>

<div class="container mx-auto px-6 mb-24">
    <h2 class="text-2xl font-bold text-text-main mb-8">Technical Cookie List</h2>

    <div class="bg-card border border-custom rounded-3xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-body border-b border-custom text-xs uppercase tracking-wider text-muted">
                        <th class="p-5 font-bold">Cookie Name</th>
                        <th class="p-5 font-bold">Type</th>
                        <th class="p-5 font-bold">Duration</th>
                        <th class="p-5 font-bold">Purpose</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-custom text-sm text-text-main">
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="p-5 font-mono text-primary">imsphare_session</td>
                        <td class="p-5"><span class="px-2 py-1 rounded bg-blue-500/10 text-blue-500 text-xs font-bold">Essential</span></td>
                        <td class="p-5 text-muted">Session</td>
                        <td class="p-5 text-muted">Identifies your current browsing session for login.</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="p-5 font-mono text-primary">XSRF-TOKEN</td>
                        <td class="p-5"><span class="px-2 py-1 rounded bg-blue-500/10 text-blue-500 text-xs font-bold">Essential</span></td>
                        <td class="p-5 text-muted">2 Hours</td>
                        <td class="p-5 text-muted">Protects against Cross-Site Request Forgery attacks.</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="p-5 font-mono text-purple-400">theme_preference</td>
                        <td class="p-5"><span class="px-2 py-1 rounded bg-purple-500/10 text-purple-500 text-xs font-bold">Functional</span></td>
                        <td class="p-5 text-muted">Persistent</td>
                        <td class="p-5 text-muted">Remembers if you prefer Dark or Light mode.</td>
                    </tr>
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="p-5 font-mono text-orange-400">github_sync_status</td>
                        <td class="p-5"><span class="px-2 py-1 rounded bg-orange-500/10 text-orange-500 text-xs font-bold">Functional</span></td>
                        <td class="p-5 text-muted">Session</td>
                        <td class="p-5 text-muted">Tracks the status of repo synchronization.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 mb-20">
    <div class="bg-body border border-custom rounded-[2rem] p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="max-w-2xl">
            <h3 class="text-2xl font-bold text-text-main mb-3">Managing Your Preferences</h3>
            <p class="text-muted leading-relaxed mb-4">
                Most web browsers allow you to control cookies through their settings preferences. However, if you limit the ability of websites to set cookies, you may worsen your overall user experience.
            </p>
            <p class="text-sm text-muted">
                Learn how to manage cookies on:
                <a href="#" class="text-primary hover:underline">Chrome</a>,
                <a href="#" class="text-primary hover:underline">Safari</a>,
                <a href="#" class="text-primary hover:underline">Firefox</a>,
                <a href="#" class="text-primary hover:underline">Edge</a>.
            </p>
        </div>
        <div>
            <a href="{{ route('contact-us.show') }}" class="px-8 py-3.5 rounded-full bg-card border border-custom text-text-main font-bold shadow-sm hover:bg-white/5 transition-all whitespace-nowrap">
                Contact Privacy Team
            </a>
        </div>
    </div>
</div>

@endsection

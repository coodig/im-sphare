@extends('layouts.app')

@section('content')

<div class="relative py-20 overflow-hidden text-center">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-green-500/10 rounded-full blur-[120px] -z-10 opacity-50 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="inline-flex items-center gap-2 py-1.5 px-4 rounded-full bg-green-500/10 border border-green-500/20 text-xs font-bold text-green-500 mb-6 uppercase tracking-wide">
            <iconify-icon icon="solar:shield-check-bold"></iconify-icon>
            Enterprise Grade Security
        </div>
        <h1 class="text-4xl md:text-6xl font-black text-text-main mb-6 tracking-tight">
            Your data is safe with <br>
            <span class="text-green-500">IMSPhare.</span>
        </h1>
        <p class="text-lg md:text-xl text-muted mb-10 max-w-3xl mx-auto leading-relaxed">
            We prioritize your privacy and data integrity. From encrypted GitHub tokens to secure infrastructure,
            learn how we protect your digital footprint.
        </p>
    </div>
</div>

<div class="container mx-auto px-6 mb-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-green-500/30 transition-all hover:-translate-y-1 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-green-500/5 rounded-full blur-2xl -mr-10 -mt-10 transition-all group-hover:bg-green-500/10"></div>

            <div class="w-14 h-14 rounded-2xl bg-green-500/10 flex items-center justify-center text-green-500 mb-6">
                <iconify-icon icon="solar:lock-password-unlocked-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Data Encryption</h3>
            <p class="text-sm text-muted leading-relaxed">
                All sensitive data, including personal details and access tokens, is encrypted at rest using
                <strong>AES-256</strong> encryption standards. We use TLS 1.3 for all data in transit.
            </p>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-blue-500/30 transition-all hover:-translate-y-1 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/5 rounded-full blur-2xl -mr-10 -mt-10 transition-all group-hover:bg-blue-500/10"></div>

            <div class="w-14 h-14 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-6">
                <iconify-icon icon="solar:server-square-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Secure Infrastructure</h3>
            <p class="text-sm text-muted leading-relaxed">
                Hosted on industry-leading cloud providers with isolated environments.
                Regular backups and redundant systems ensure your portfolio is always online.
            </p>
        </div>

        <div class="bg-card p-8 rounded-[2rem] border border-custom hover:border-purple-500/30 transition-all hover:-translate-y-1 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/5 rounded-full blur-2xl -mr-10 -mt-10 transition-all group-hover:bg-purple-500/10"></div>

            <div class="w-14 h-14 rounded-2xl bg-purple-500/10 flex items-center justify-center text-purple-500 mb-6">
                <iconify-icon icon="solar:eye-scan-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">24/7 Monitoring</h3>
            <p class="text-sm text-muted leading-relaxed">
                Our systems are monitored around the clock for suspicious activity.
                Automated threat detection blocks malicious login attempts and API abuse.
            </p>
        </div>

    </div>
</div>

<div class="container mx-auto px-6 mb-24">
    <div class="bg-card border border-custom rounded-[2.5rem] p-8 md:p-12 relative overflow-hidden">

        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-text-main to-transparent opacity-20"></div>

        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="w-full md:w-1/2">
                <div class="inline-flex items-center gap-2 mb-4">
                    <iconify-icon icon="logos:github-icon" class="text-2xl"></iconify-icon>
                    <span class="font-bold text-text-main">GitHub Integration</span>
                </div>
                <h2 class="text-3xl font-bold text-text-main mb-6">How we handle your GitHub Data</h2>

                <ul class="space-y-6">
                    <li class="flex gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-green-500/10 flex items-center justify-center text-green-500 flex-shrink-0">
                            <iconify-icon icon="solar:check-read-bold" class="text-xs"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-main text-lg">No Source Code Storage</h4>
                            <p class="text-sm text-muted">We only fetch metadata (names, stars, descriptions) and Readme files. Your actual source code never touches our database.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-green-500/10 flex items-center justify-center text-green-500 flex-shrink-0">
                            <iconify-icon icon="solar:check-read-bold" class="text-xs"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-main text-lg">Encrypted Tokens</h4>
                            <p class="text-sm text-muted">Your Personal Access Tokens (PAT) are encrypted in our database. We cannot see them, and they are only decrypted momentarily to sync data.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-green-500/10 flex items-center justify-center text-green-500 flex-shrink-0">
                            <iconify-icon icon="solar:check-read-bold" class="text-xs"></iconify-icon>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-main text-lg">Read-Only Access</h4>
                            <p class="text-sm text-muted">We recommend providing 'Read-Only' permissions. IMSPhare never asks for write access to your repositories.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="w-full md:w-1/2 bg-body rounded-2xl border border-custom p-6 relative">
                <div class="flex gap-1.5 mb-4">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="space-y-2 font-mono text-sm">
                    <div class="flex">
                        <span class="text-muted w-8">1</span>
                        <span class="text-purple-400">use</span>&nbsp;<span class="text-text-main">Illuminate\Support\Facades\Crypt;</span>
                    </div>
                    <div class="flex">
                        <span class="text-muted w-8">2</span>
                        <span class="text-text-main">&nbsp;</span>
                    </div>
                    <div class="flex">
                        <span class="text-muted w-8">3</span>
                        <span class="text-blue-400">public function</span>&nbsp;<span class="text-yellow-400">storeToken</span><span class="text-text-main">($token) {</span>
                    </div>
                    <div class="flex">
                        <span class="text-muted w-8">4</span>
                        <span class="text-text-main">&nbsp;&nbsp;$encrypted = </span><span class="text-green-400">Crypt::encryptString</span><span class="text-text-main">($token);</span>
                    </div>
                    <div class="flex">
                        <span class="text-muted w-8">5</span>
                        <span class="text-text-main">&nbsp;&nbsp;$user->save($encrypted);</span>
                    </div>
                    <div class="flex">
                        <span class="text-muted w-8">6</span>
                        <span class="text-text-main">}</span>
                    </div>
                </div>

                <div class="absolute -bottom-4 -right-4 bg-card border border-custom px-4 py-2 rounded-lg shadow-lg flex items-center gap-2">
                    <iconify-icon icon="solar:shield-check-bold" class="text-green-500"></iconify-icon>
                    <span class="text-xs font-bold text-text-main">Standard Practice</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-6 mb-20">
    <div class="text-center max-w-2xl mx-auto">
        <iconify-icon icon="solar:bug-bold-duotone" class="text-5xl text-red-400 mb-4"></iconify-icon>
        <h2 class="text-2xl font-bold text-text-main mb-4">Found a Vulnerability?</h2>
        <p class="text-muted mb-8">
            We take security reports seriously. If you believe you’ve found a security issue in IMSPhare, please report it to us immediately.
        </p>
        <a href="mailto:security@sphare.co" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-card border border-custom text-text-main font-bold hover:bg-red-500/10 hover:text-red-500 hover:border-red-500/50 transition-all">
            <iconify-icon icon="solar:letter-bold"></iconify-icon>
            Report an Issue
        </a>
    </div>
</div>

@endsection

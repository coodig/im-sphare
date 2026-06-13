@extends('layouts.app')

@section('content')

<div class="relative py-16 md:py-24 overflow-hidden mb-12">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[100px] -z-10 opacity-50 pointer-events-none"></div>

    <div class="container mx-auto px-4 text-center relative z-10">
        <span class="inline-block py-1 px-3 rounded-full bg-body border border-custom text-xs font-bold text-primary mb-6 tracking-wide uppercase">
            Sphare Co. Support
        </span>
        <h1 class="text-4xl md:text-5xl font-black text-text-main mb-6 tracking-tight">
            How can we help you?
        </h1>
        <p class="text-lg text-muted mb-10 max-w-2xl mx-auto">
            Search for guides, API documentation, or troubleshooting tips for IMSPhare ecosystem.
        </p>

        <div class="max-w-2xl mx-auto relative group">
            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-muted group-focus-within:text-primary transition-colors">
                <iconify-icon icon="solar:magnifer-bold-duotone" class="text-2xl"></iconify-icon>
            </span>
            <input type="text"
                placeholder="Search for articles (e.g., 'GitHub Token', 'Deploy Project')..."
                class="w-full pl-14 pr-6 py-5 rounded-2xl bg-card border border-custom text-text-main shadow-apple focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all text-lg placeholder:text-muted/60">

            <div class="absolute right-4 top-1/2 -translate-y-1/2 hidden md:block">
                <span class="text-xs font-mono bg-body border border-custom px-2 py-1 rounded text-muted">Ctrl K</span>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 mb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <a href="http://127.0.0.1:3000/docs.html?file=sphare-research-lab/imsphare/00_overview.md" target="_blank" class="group bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 hover:shadow-lg">
            <div class="w-14 h-14 rounded-2xl bg-blue-500/10 flex items-center justify-center text-blue-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:rocket-2-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Getting Started</h3>
            <p class="text-sm text-muted mb-6 leading-relaxed">
                Learn how to set up your IMSPhare account, configure your profile, and start your first project.
            </p>
            <span class="text-sm font-bold text-primary flex items-center gap-1">
                Read Articles <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </span>
        </a>

        <a href="#" class="group bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 hover:shadow-lg">
            <div class="w-14 h-14 rounded-2xl bg-purple-500/10 flex items-center justify-center text-purple-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:folder-with-files-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Projects & Repos</h3>
            <p class="text-sm text-muted mb-6 leading-relaxed">
                Guide on syncing GitHub repositories, managing visibility, and handling project versions.
            </p>
            <span class="text-sm font-bold text-primary flex items-center gap-1">
                Read Articles <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </span>
        </a>

        <a href="http://127.0.0.1:3000/docs.html?file=sphare-research-lab/imsphare/15_security.md" target="_blank" class="group bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 hover:shadow-lg">
            <div class="w-14 h-14 rounded-2xl bg-green-500/10 flex items-center justify-center text-green-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:shield-keyhole-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Account & Security</h3>
            <p class="text-sm text-muted mb-6 leading-relaxed">
                Manage your password, 2FA, GitHub tokens, and connected sessions.
            </p>
            <span class="text-sm font-bold text-primary flex items-center gap-1">
                Read Articles <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </span>
        </a>

        <a href="http://127.0.0.1:3000/docs.html?file=sphare-research-lab/imsphare/06_api_reference.md" target="_blank" class="group bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 hover:shadow-lg">
            <div class="w-14 h-14 rounded-2xl bg-orange-500/10 flex items-center justify-center text-orange-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:code-circle-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Developer API</h3>
            <p class="text-sm text-muted mb-6 leading-relaxed">
                Access IMSPhare endpoints, generate API keys, and integrate with external tools.
            </p>
            <span class="text-sm font-bold text-primary flex items-center gap-1">
                Read Articles <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </span>
        </a>

        <a href="#" class="group bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 hover:shadow-lg">
            <div class="w-14 h-14 rounded-2xl bg-pink-500/10 flex items-center justify-center text-pink-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:card-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Billing & Plans</h3>
            <p class="text-sm text-muted mb-6 leading-relaxed">
                Understand Sphare Co. pricing, download invoices, and manage subscriptions.
            </p>
            <span class="text-sm font-bold text-primary flex items-center gap-1">
                Read Articles <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </span>
        </a>

        <a href="#" class="group bg-card p-8 rounded-[2rem] border border-custom hover:border-primary/50 transition-all hover:-translate-y-1 hover:shadow-lg">
            <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 flex items-center justify-center text-cyan-500 mb-6 group-hover:scale-110 transition-transform">
                <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="text-3xl"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main mb-3">Community</h3>
            <p class="text-sm text-muted mb-6 leading-relaxed">
                Join the Sphare Co. discord, report bugs, and request new features.
            </p>
            <span class="text-sm font-bold text-primary flex items-center gap-1">
                Read Articles <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </span>
        </a>

    </div>
</div>

<div class="container mx-auto px-4 mb-20">
    <h2 class="text-2xl font-bold text-text-main mb-8 flex items-center gap-2">
        <iconify-icon icon="solar:star-bold-duotone" class="text-yellow-500"></iconify-icon>
        Popular Articles
    </h2>

    <div class="bg-card rounded-[2rem] border border-custom divide-y divide-custom overflow-hidden">

        <a href="http://127.0.0.1:3000/docs.html?file=sphare-research-lab/article/help-center/imsphare/how-to-generate-a-github-personal-access-token.md" target="_blank">

            <div class="p-5 flex items-center justify-between hover:bg-white/5 transition-colors cursor-pointer group">
                <div class="flex items-center gap-4">
                    <iconify-icon icon="solar:document-text-linear" class="text-2xl text-muted group-hover:text-primary transition-colors"></iconify-icon>
                    <div>
                        <h4 class="font-bold text-text-main text-base md:text-lg group-hover:text-primary transition-colors">How to generate a GitHub Personal Access Token?</h4>
                        <p class="text-sm text-muted hidden md:block">Step-by-step guide to configuring fine-grained tokens.</p>
                    </div>
                </div>
                <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl text-muted group-hover:translate-x-1 transition-transform"></iconify-icon>
            </div>
        </a>

        <div class="p-5 flex items-center justify-between hover:bg-white/5 transition-colors cursor-pointer group">
            <div class="flex items-center gap-4">
                <iconify-icon icon="solar:document-text-linear" class="text-2xl text-muted group-hover:text-primary transition-colors"></iconify-icon>
                <div>
                    <h4 class="font-bold text-text-main text-base md:text-lg group-hover:text-primary transition-colors">Why is my repository not showing up?</h4>
                    <p class="text-sm text-muted hidden md:block">Troubleshooting sync issues and public/private visibility settings.</p>
                </div>
            </div>
            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl text-muted group-hover:translate-x-1 transition-transform"></iconify-icon>
        </div>

        <div class="p-5 flex items-center justify-between hover:bg-white/5 transition-colors cursor-pointer group">
            <div class="flex items-center gap-4">
                <iconify-icon icon="solar:document-text-linear" class="text-2xl text-muted group-hover:text-primary transition-colors"></iconify-icon>
                <div>
                    <h4 class="font-bold text-text-main text-base md:text-lg group-hover:text-primary transition-colors">Customizing your Profile Markdown</h4>
                    <p class="text-sm text-muted hidden md:block">Learn how to use the custom markdown engine in IMSPhare.</p>
                </div>
            </div>
            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl text-muted group-hover:translate-x-1 transition-transform"></iconify-icon>
        </div>

        <div class="p-5 flex items-center justify-between hover:bg-white/5 transition-colors cursor-pointer group">
            <div class="flex items-center gap-4">
                <iconify-icon icon="solar:document-text-linear" class="text-2xl text-muted group-hover:text-primary transition-colors"></iconify-icon>
                <div>
                    <h4 class="font-bold text-text-main text-base md:text-lg group-hover:text-primary transition-colors">Changing your Registered Email</h4>
                    <p class="text-sm text-muted hidden md:block">Process for updating your primary contact information.</p>
                </div>
            </div>
            <iconify-icon icon="solar:alt-arrow-right-linear" class="text-xl text-muted group-hover:translate-x-1 transition-transform"></iconify-icon>
        </div>

    </div>
</div>

<div class="container mx-auto px-4 mb-16">
    <div class="bg-gradient-to-r from-primary/10 to-purple-500/10 rounded-[2.5rem] border border-primary/20 p-8 md:p-12 text-center relative overflow-hidden">
        <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/20 rounded-full blur-2xl"></div>
        <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-purple-500/20 rounded-full blur-2xl"></div>

        <div class="relative z-10">
            <h3 class="text-2xl md:text-3xl font-black text-text-main mb-4">Still need help?</h3>
            <p class="text-muted text-lg mb-8 max-w-xl mx-auto">
                If you couldn't find the answer in our documentation, our support team at Sphare Co. is here to assist you.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact-us.show') }}" class="px-8 py-3.5 rounded-full bg-primary text-white font-bold shadow-lg shadow-primary/25 hover:bg-primary/90 transition-all hover:scale-105 active:scale-95 flex items-center gap-2">
                    <iconify-icon icon="solar:chat-round-dots-bold"></iconify-icon>
                    Contact Support
                </a>
                <a href="#" class="px-8 py-3.5 rounded-full bg-card border border-custom text-text-main font-bold hover:bg-white/5 transition-all flex items-center gap-2">
                    <iconify-icon icon="logos:discord-icon" class="text-lg"></iconify-icon>
                    Join Discord
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

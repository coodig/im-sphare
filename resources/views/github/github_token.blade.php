@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto mb-12 animate-fade">

    <div class="text-center mb-10">
        <div class="inline-block px-3 py-1 mb-4 rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 text-xs font-bold uppercase tracking-wider border border-custom">
            Integration
        </div>
        <h1 class="text-3xl md:text-4xl font-bold text-text-main flex items-center justify-center gap-3">
            <iconify-icon icon="logos:github-icon" class="text-4xl"></iconify-icon>
            Connect GitHub
        </h1>
        <p class="text-muted mt-3 text-lg max-w-lg mx-auto">
            Enter your Personal Access Token (PAT) to sync your repositories and profile stats.
        </p>
    </div>

    <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 relative overflow-hidden">

        <div class="absolute top-0 right-0 w-40 h-40 bg-primary/10 rounded-full blur-3xl -mr-10 -mt-10 pointer-events-none"></div>

        @if($token)
            <div class="mb-8 p-4 rounded-2xl bg-green-50 dark:bg-green-900/10 border border-green-200 dark:border-green-800 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white shadow-lg shadow-green-500/30">
                        <iconify-icon icon="solar:check-circle-bold" class="text-xl"></iconify-icon>
                    </div>
                    <div>
                        <h4 class="font-bold text-green-700 dark:text-green-400">Connected Successfully</h4>
                        <p class="text-xs text-green-600/80 dark:text-green-500/80 font-mono mt-0.5">
                            Key: {{ Str::limit($token, 10) }}••••••••••••
                        </p>
                    </div>
                </div>
                <button class="text-xs font-bold text-green-700 hover:underline">Test Connection</button>
            </div>
        @endif

        @if(session('error') || $errors->any())
            <div class="mb-8 p-4 rounded-2xl bg-red-50 dark:bg-red-900/10 border border-red-200 dark:border-red-800">
                <div class="flex gap-3">
                    <iconify-icon icon="solar:danger-triangle-bold" class="text-red-500 text-xl shrink-0 mt-0.5"></iconify-icon>
                    <div>
                        <h4 class="font-bold text-red-700 dark:text-red-400 text-sm">Connection Failed</h4>
                        <ul class="list-disc list-inside text-xs text-red-600/80 dark:text-red-500/80 mt-1">
                            @if(session('error')) <li>{{ session('error') }}</li> @endif
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('github.token.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="token" class="block text-sm font-bold text-text-main mb-2 ml-1">Personal Access Token</label>
                <div class="relative group">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted group-focus-within:text-primary transition-colors">
                        <iconify-icon icon="solar:key-square-bold-duotone" class="text-xl"></iconify-icon>
                    </span>
                    <input type="password" id="token" name="token"
                        placeholder="ghp_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
                        value="{{ $token ?? '' }}"
                        required
                        class="w-full pl-12 pr-4 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-mono text-sm text-text-main shadow-inner">
                </div>
                <p class="text-xs text-muted mt-2 ml-1 flex items-center gap-1">
                    <iconify-icon icon="solar:shield-warning-bold" class="text-orange-500"></iconify-icon>
                    Your token is stored securely and encrypted.
                </p>
            </div>

            <button type="submit" class="w-full py-4 rounded-full bg-black dark:bg-white text-white dark:text-black font-bold text-lg hover:scale-[1.02] active:scale-95 transition-all shadow-xl flex items-center justify-center gap-2">
                <iconify-icon icon="solar:disk-bold-duotone" class="text-xl"></iconify-icon>
                {{ $token ? 'Update Token' : 'Save & Connect' }}
            </button>
        </form>

    </div>

    <div class="mt-8 p-6 rounded-[2rem] bg-body border border-custom">
        <h3 class="font-bold text-text-main mb-4 flex items-center gap-2">
            <iconify-icon icon="solar:question-circle-bold-duotone" class="text-primary text-xl"></iconify-icon>
            How to get a Token?
        </h3>
        <ol class="space-y-3 text-sm text-muted list-decimal list-inside marker:text-primary marker:font-bold">
            <li>Go to GitHub <strong>Settings</strong> > <strong>Developer settings</strong>.</li>
            <li>Select <strong>Personal access tokens</strong> > <strong>Tokens (classic)</strong>.</li>
            <li>Click <strong>Generate new token</strong> (Generate new token (classic)).</li>
            <li>Select the <strong>repo</strong> and <strong>user</strong> scopes.</li>
            <li>Copy the generated token and paste it above.</li>
        </ol>
        <div class="mt-4 pt-4 border-t border-custom">
            <a href="https://github.com/settings/tokens" target="_blank" class="text-primary font-bold text-sm flex items-center gap-1 hover:underline">
                Go to GitHub Settings <iconify-icon icon="solar:arrow-right-up-linear"></iconify-icon>
            </a>
        </div>
    </div>

</div>

@endsection

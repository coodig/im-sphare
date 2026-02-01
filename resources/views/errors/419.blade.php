@extends('errors.layout')

@section('title', 'Page Expired')

@section('error-content')
    <div class="mb-10 flex justify-center">
        <div class="p-8 rounded-[2rem] bg-card border border-custom shadow-2xl group">
            <iconify-icon icon="solar:hourglass-line-bold-duotone" class="text-7xl text-orange-500 animate-spin-slow group-hover:text-orange-600 transition-colors"></iconify-icon>
        </div>
    </div>

    <h2 class="text-3xl font-bold text-text-main mb-4">Page Expired</h2>
    <p class="text-muted text-lg mb-10 leading-relaxed">
        Your session has expired due to inactivity. Please refresh the page to continue where you left off.
    </p>

    <div class="flex flex-wrap justify-center gap-4">
        <a href="javascript:location.reload()" class="px-8 py-3.5 rounded-full bg-primary text-white font-bold shadow-apple hover:bg-primary-hover hover:-translate-y-1 transition-all flex items-center gap-2">
            <iconify-icon icon="solar:refresh-circle-bold-duotone" class="text-xl"></iconify-icon>
            Refresh Page
        </a>
    </div>

    <style>
        .animate-spin-slow { animation: spin 4s linear infinite; }
    </style>
@endsection

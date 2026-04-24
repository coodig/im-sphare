@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 animate-fade">

    <div class="flex items-center gap-4 mb-8">
        <a href="{{ route('login-activities.index',['username'=>Auth::user()->username]) }}" class="w-10 h-10 rounded-full bg-card border border-custom flex items-center justify-center text-muted hover:text-primary hover:border-primary transition-all">
            <iconify-icon icon="solar:arrow-left-linear" class="text-xl"></iconify-icon>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-text-main">Audit Log Details</h1>
            <p class="text-muted text-sm mt-1">Detailed security information for this login attempt.</p>
        </div>
    </div>

    <div class="bg-card rounded-3xl border border-custom shadow-sm overflow-hidden">

        <div class="px-8 py-6 border-b border-custom flex flex-wrap items-center justify-between gap-4 {{ str_contains(strtolower($activity->status?->name), 'fail') || str_contains(strtolower($activity->status?->name), 'lock') ? 'bg-red-500/5' : 'bg-green-500/5' }}">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-body border border-custom flex items-center justify-center shadow-sm">
                    @if($activity->user)
                        <iconify-icon icon="solar:shield-check-bold-duotone" class="text-3xl text-green-500"></iconify-icon>
                    @else
                        <iconify-icon icon="solar:ghost-bold-duotone" class="text-3xl text-red-500 animate-pulse"></iconify-icon>
                    @endif
                </div>
                <div>
                    <h2 class="text-xl font-bold text-text-main">Attempt ID: #{{ str_pad($activity->id, 5, '0', STR_PAD_LEFT) }}</h2>
                    <p class="text-sm text-muted mt-0.5">{{ $activity->created_at->format('l, jS F Y \a\t h:i:s A') }}</p>
                </div>
            </div>

            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-bold uppercase tracking-wider border {{ $activity->status?->color ?? 'text-gray-500 bg-gray-500/10 border-gray-500/20' }}">
                <span class="w-2 h-2 rounded-full bg-current animate-pulse"></span>
                {{ $activity->status?->name ?? 'Unknown' }}
            </span>
        </div>

        <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="space-y-8">

                <div>
                    <h3 class="text-xs font-bold text-muted uppercase tracking-wider mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:user-id-bold-duotone" class="text-lg"></iconify-icon> User Details
                    </h3>
                    <div class="bg-body rounded-2xl p-5 border border-custom flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-custom border border-custom flex items-center justify-center shrink-0">
                            @if($activity->user)
                                <img src="{{ $activity->user->profile?->profile_image ? asset('storage/'.$activity->user->profile->profile_image) : asset('asset/img/default-avatar.png') }}" class="w-full h-full rounded-full object-cover">
                            @else
                                <iconify-icon icon="solar:danger-triangle-bold-duotone" class="text-2xl text-red-400"></iconify-icon>
                            @endif
                        </div>
                        <div>
                            <p class="font-bold text-lg text-text-main">
                                {{ $activity->user ? ucwords($activity->user->username) : 'Unauthenticated (Hacker/Guest)' }}
                            </p>
                            <p class="text-sm text-muted">
                                {{ $activity->user ? $activity->user->email : 'No registered email matched' }}
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xs font-bold text-muted uppercase tracking-wider mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:map-point-bold-duotone" class="text-lg"></iconify-icon> Network & Location
                    </h3>
                    <div class="bg-body rounded-2xl border border-custom divide-y divide-custom">
                        <div class="p-4 flex justify-between items-center">
                            <span class="text-sm font-medium text-muted">IP Address</span>
                            <span class="text-sm font-bold text-text-main font-mono">{{ $activity->ip_address ?? 'N/A' }}</span>
                        </div>
                        <div class="p-4 flex justify-between items-center">
                            <span class="text-sm font-medium text-muted">City</span>
                            <span class="text-sm font-bold text-text-main">{{ $activity->city ?? 'Unknown' }}</span>
                        </div>
                        <div class="p-4 flex justify-between items-center">
                            <span class="text-sm font-medium text-muted">Country</span>
                            <span class="text-sm font-bold text-text-main">{{ $activity->country ?? 'Unknown' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8">

                <div>
                    <h3 class="text-xs font-bold text-muted uppercase tracking-wider mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:laptop-bold-duotone" class="text-lg"></iconify-icon> Device Information
                    </h3>
                    <div class="bg-body rounded-2xl border border-custom divide-y divide-custom">
                        <div class="p-4 flex justify-between items-center">
                            <span class="text-sm font-medium text-muted">Device Type</span>
                            <span class="text-sm font-bold text-text-main flex items-center gap-2">
                                <iconify-icon icon="{{ str_contains(strtolower($activity->device_type), 'mobile') ? 'solar:smartphone-bold-duotone' : 'solar:monitor-bold-duotone' }}"></iconify-icon>
                                {{ $activity->device_type ?? 'Unknown' }}
                            </span>
                        </div>
                        <div class="p-4 flex justify-between items-center">
                            <span class="text-sm font-medium text-muted">Operating System</span>
                            <span class="text-sm font-bold text-text-main">{{ $activity->os ?? 'Unknown' }}</span>
                        </div>
                        <div class="p-4 flex justify-between items-center">
                            <span class="text-sm font-medium text-muted">Browser</span>
                            <span class="text-sm font-bold text-text-main">{{ $activity->browser ?? 'Unknown' }}</span>
                        </div>
                    </div>
                </div>

                @if($activity->failure_reason)
                <div>
                    <h3 class="text-xs font-bold text-red-500 uppercase tracking-wider mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:shield-warning-bold-duotone" class="text-lg"></iconify-icon> Failure Reason
                    </h3>
                    <div class="bg-red-500/10 rounded-2xl p-5 border border-red-500/20">
                        <p class="text-sm font-bold text-red-500">{{ $activity->failure_reason }}</p>
                    </div>
                </div>
                @endif
            </div>

            <div class="md:col-span-2 pt-6 mt-2 border-t border-custom">
                <h3 class="text-xs font-bold text-muted uppercase tracking-wider mb-4 flex items-center justify-between">
                    <span class="flex items-center gap-2">
                        <iconify-icon icon="solar:document-text-bold-duotone" class="text-lg"></iconify-icon> Raw User Agent String
                    </span>
                    <button onclick="navigator.clipboard.writeText('{{ $activity->user_agent }}')" class="text-blue-500 hover:text-blue-400 flex items-center gap-1 cursor-pointer">
                        <iconify-icon icon="solar:copy-bold-duotone"></iconify-icon> Copy
                    </button>
                </h3>
                <div class="bg-[#0f172a] dark:bg-black/50 p-5 rounded-2xl border border-custom overflow-x-auto">
                    <code class="text-sm font-mono text-green-400 break-all">
                        {{ $activity->user_agent ?? 'No User Agent string provided by the client.' }}
                    </code>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

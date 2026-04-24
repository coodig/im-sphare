@extends('layouts.app') {{-- Tumhara admin layout jo bhi ho --}}

@section('content')

    @php
        // ==========================================
        // TECH LEAD'S DUMMY DATA FOR UI TESTING
        // ==========================================
        $activities = collect([
            (object) [
                'user' => (object) ['username' => 'adarsh_vish', 'email' => 'adarsh.dev@imsphare.com'],
                'device_type' => 'Desktop',
                'os' => 'Windows',
                'browser' => 'Chrome',
                'ip_address' => '192.168.1.45',
                'city' => 'Gorakhpur',
                'country' => 'India',
                'status' => (object) ['name' => 'Success', 'color' => 'text-green-500 bg-green-500/10 border-green-500/20'],
                'created_at' => now()->subMinutes(5),
            ],
            (object) [
                'user' => (object) ['username' => 'shreya_m', 'email' => 'shreya@imsphare.com'],
                'device_type' => 'Mobile',
                'os' => 'iOS',
                'browser' => 'Safari',
                'ip_address' => '103.45.67.89',
                'city' => 'Kanpur',
                'country' => 'India',
                'status' => (object) ['name' => 'Pending 2FA', 'color' => 'text-blue-500 bg-blue-500/10 border-blue-500/20'],
                'created_at' => now()->subHours(2),
            ],
            (object) [
                'user' => null, // 👻 GHOST USER (Hacker Attempt)
                'device_type' => 'Desktop',
                'os' => 'Linux',
                'browser' => 'Firefox',
                'ip_address' => '45.22.11.99',
                'city' => 'Moscow',
                'country' => 'Russia',
                'status' => (object) ['name' => 'Locked Out', 'color' => 'text-red-500 bg-red-500/10 border-red-500/20'],
                'created_at' => now()->subHours(5),
            ],
            (object) [
                'user' => (object) ['username' => 'ekta_singh', 'email' => 'ekta@imsphare.com'],
                'device_type' => 'Mobile',
                'os' => 'Android',
                'browser' => 'Chrome',
                'ip_address' => '27.147.23.11',
                'city' => 'Lucknow',
                'country' => 'India',
                'status' => (object) ['name' => 'Failed', 'color' => 'text-orange-500 bg-orange-500/10 border-orange-500/20'],
                'created_at' => now()->subDays(1),
            ],
        ]);
    @endphp

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 animate-fade">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-text-main flex items-center gap-3">
                    <iconify-icon icon="solar:shield-warning-bold-duotone" class="text-primary"></iconify-icon>
                    Security Audit Logs
                </h1>
                <p class="text-muted text-sm mt-1">Monitor all user authentication attempts across IMSPhare.</p>
            </div>

            <div class="flex gap-2">
                <button
                    class="px-4 py-2 rounded-xl border border-custom bg-card text-sm font-medium hover:bg-body transition-colors flex items-center gap-2">
                    <iconify-icon icon="solar:filter-bold-duotone"></iconify-icon> Filters
                </button>
            </div>
        </div>

        <div class="bg-card rounded-2xl border border-custom shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr class="bg-body border-b border-custom">
                            <th class="px-6 py-4 text-xs font-bold text-muted uppercase tracking-wider">User</th>
                            <th class="px-6 py-4 text-xs font-bold text-muted uppercase tracking-wider">Device & IP</th>
                            <th class="px-6 py-4 text-xs font-bold text-muted uppercase tracking-wider">Location</th>
                            <th class="px-6 py-4 text-xs font-bold text-muted uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-xs font-bold text-muted uppercase tracking-wider">Date & Time</th>
                            <th class="px-6 py-4 text-xs font-bold text-muted uppercase tracking-wider text-right">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-custom">

                        @forelse($activities as $activity)
                            <tr class="hover:bg-body/50 transition-colors group">

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-custom border border-custom flex items-center justify-center shrink-0 overflow-hidden">
                                            @if($activity->user)
                                                <iconify-icon icon="solar:user-bold-duotone"
                                                    class="text-xl text-muted"></iconify-icon>
                                            @else
                                                <iconify-icon icon="solar:ghost-bold-duotone"
                                                    class="text-xl text-red-500 animate-pulse"></iconify-icon>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="font-bold text-sm text-text-main">
                                                {{ $activity->user ? ucwords($activity->user->username) : 'Unknown Attempt' }}
                                            </p>
                                            <p class="text-xs text-muted">
                                                {{ $activity->user ? $activity->user->email : 'No email found' }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <iconify-icon
                                            icon="{{ str_contains(strtolower($activity->device_type), 'mobile') ? 'solar:smartphone-bold-duotone' : 'solar:monitor-bold-duotone' }}"
                                            class="text-2xl text-muted"></iconify-icon>
                                        <div>
                                            <p class="text-sm font-medium text-text-main">{{ $activity->os ?? 'Unknown OS' }} ·
                                                {{ $activity->browser ?? 'Browser' }}
                                            </p>
                                            <p class="text-[11px] text-muted font-mono mt-0.5">
                                                {{ $activity->ip_address ?? 'Unknown IP' }}
                                            </p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <iconify-icon icon="solar:map-point-bold-duotone"
                                            class="text-lg text-muted"></iconify-icon>
                                        <div>
                                            <p class="text-sm font-medium text-text-main">{{ $activity->city ?? 'N/A' }}</p>
                                            <p class="text-[11px] text-muted">{{ $activity->country ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider border {{ $activity->status?->color ?? 'text-gray-500 bg-gray-500/10 border-gray-500/20' }}">
                                        <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                                        {{ $activity->status?->name ?? 'Unknown' }}
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <p class="text-sm font-medium text-text-main">{{ $activity->created_at->format('d M, Y') }}
                                    </p>
                                    <p class="text-[11px] text-muted mt-0.5">{{ $activity->created_at->format('h:i A') }}</p>
                                </td>

                                <td class="px-6 py-4 text-right">
    <a href="{{ route('login-activity.show',['username'=>Auth::user()->username]) }}"
        class="inline-flex items-center justify-center gap-2 px-3 py-1.5 rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 dark:text-blue-400 dark:bg-blue-900/20 dark:hover:bg-blue-900/40 transition-colors font-medium text-sm"
        title="View Details">
        <span>View</span>
        <iconify-icon icon="solar:eye-bold-duotone" class="text-lg"></iconify-icon>
    </a>
</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center">
                                    <div
                                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-body border border-custom mb-4">
                                        <iconify-icon icon="solar:shield-cross-bold-duotone"
                                            class="text-3xl text-muted"></iconify-icon>
                                    </div>
                                    <h3 class="text-lg font-bold text-text-main">No Activity Logs Found</h3>
                                    <p class="text-sm text-muted mt-1">System is waiting for the first login attempt.</p>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

            @if(method_exists($activities, 'hasPages') && $activities->hasPages())
                <div class="px-6 py-4 border-t border-custom bg-body/30">
                    {{ $activities->links() }}
                </div>
            @endif
        </div>

    </div>

@endsection

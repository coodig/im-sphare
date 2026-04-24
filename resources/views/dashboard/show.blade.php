@extends('layouts.app')

@section('content')

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main flex items-center gap-2">
                Welcome,
                {{ ucwords(Auth::user()->profile->name ?? str_replace(['_', '@', '-'], ' ', Auth::user()->username)) }}
                <iconify-icon icon="noto:waving-hand" class="text-3xl animate-pulse"></iconify-icon>
            </h1>
            <p class="text-muted mt-1 text-lg">Here's what's happening with your projects today.</p>
        </div>

        {{-- <a href="{{ route('repos.index', ['username' => Auth::user()->username]) }}"
            class="px-6 py-2.5 bg-text-main text-body rounded-full font-bold shadow-lg hover:bg-primary hover:text-white transition-all flex items-center gap-2">
            <iconify-icon icon="solar:add-circle-bold"></iconify-icon> New Project
        </a> --}}
    </div>

    @if ($hasGithubToken)

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div
                class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
                <div class="flex items-center gap-4 mb-3">
                    <div class="p-3 rounded-full bg-blue-50 text-blue-600">
                        <iconify-icon icon="solar:folder-with-files-bold-duotone" width="24"></iconify-icon>
                    </div>
                    <h5 class="font-bold text-muted text-sm uppercase tracking-wider">Public</h5>
                </div>
                <p class="text-4xl font-bold text-text-main">{{$totalRepos}}</p>
            </div>

            <div
                class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
                <div class="flex items-center gap-4 mb-3">
                    <div class="p-3 rounded-full bg-purple-50 text-purple-600">
                        <iconify-icon icon="solar:shield-keyhole-bold-duotone" width="24"></iconify-icon>
                    </div>
                    <h5 class="font-bold text-muted text-sm uppercase tracking-wider">Private</h5>
                </div>
                <p class="text-4xl font-bold text-text-main">5</p>
            </div>

            <div
                class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
                <div class="flex items-center gap-4 mb-3">
                    <div class="p-3 rounded-full bg-pink-50 text-pink-600">
                        <iconify-icon icon="solar:users-group-rounded-bold-duotone" width="24"></iconify-icon>
                    </div>
                    <h5 class="font-bold text-muted text-sm uppercase tracking-wider">Followers</h5>
                </div>
                <p class="text-4xl font-bold text-text-main">120</p>
            </div>

            <div
                class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
                <div class="flex items-center gap-4 mb-3">
                    <div class="p-3 rounded-full bg-orange-50 text-orange-600">
                        <iconify-icon icon="solar:graph-new-bold-duotone" width="24"></iconify-icon>
                    </div>
                    <h5 class="font-bold text-muted text-sm uppercase tracking-wider">Total</h5>
                </div>
                <p class="text-4xl font-bold text-text-main">{{$totalRepos + 5}}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <div class="lg:col-span-2 bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                <h3 class="text-xl font-bold text-text-main mb-6 flex items-center gap-2">
                    <iconify-icon icon="solar:chart-square-bold-duotone" class="text-primary"></iconify-icon>
                    Project Popularity
                </h3>
                <div class="h-64 w-full">
                    <canvas id="repoBarChart"></canvas>
                </div>
            </div>

            <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                <h3 class="text-xl font-bold text-text-main mb-6 flex items-center gap-2">
                    <iconify-icon icon="solar:pie-chart-2-bold-duotone" class="text-purple-500"></iconify-icon>
                    Languages
                </h3>
                <div class="h-64 w-full flex items-center justify-center">
                    <canvas id="langPieChart"></canvas>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-8">

            <div class="xl:col-span-2 bg-card p-6 md:p-8 rounded-[2rem] border border-custom shadow-apple">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-text-main flex items-center gap-2">
                        <iconify-icon icon="solar:laptop-bold-duotone" class="text-orange-500"></iconify-icon>
                        Recent Projects
                    </h3>
                    <a href="{{ route('repos.index', ['username' => Auth::user()->username]) }}"
                        class="text-sm font-bold text-primary hover:underline">See All</a>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @forelse ($repos as $repo)
                        <div
                            class="p-4 rounded-2xl bg-body border border-custom hover:border-primary transition-colors group flex flex-col h-full shadow-sm hover:shadow-md">

                            <div class="flex justify-between items-start mb-2">
                                <h5 class="font-bold text-text-main truncate pr-2" title="{{ $repo->name }}">
                                    {{ ucwords(str_replace(['-', '_'], ' ', $repo->name)) }}
                                </h5>

                                <div class="text-muted group-hover:text-primary transition-colors shrink-0"
                                    title="GitHub Repository">
                                    <a
                                        href="{{ $repo->html_url }}/archive/refs/heads/{{ $repo->default_branch ?? 'main'}}.zip">
                                        <iconify-icon icon="solar:download-bold-duotone" width="22"></iconify-icon>
                                    </a>
                                </div>
                            </div>

                            <p class="text-xs text-muted line-clamp-2 mb-4 flex-grow">
                                {{ $repo->description ? ucfirst($repo->description) : 'No description available for this repository.' }}
                            </p>

                            <div class="flex items-center justify-between mt-auto pt-3 border-t border-custom/50">

                                <a href="{{ $repo->html_url }}" target="_blank"
                                    class="px-2 py-1.5 rounded-md dark:bg-gray-800 text-text-main hover:bg-primary hover:text-white transition-all text-[10px] font-bold border border-custom flex items-center gap-1.5 shadow-sm group/link">

                                    <iconify-icon icon="solar:code-square-bold-duotone"
                                        class="text-primary group-hover/link:text-white transition-colors"
                                        width="14"></iconify-icon>
                                    {{ $repo->language ?? 'Code' }}
                                    <iconify-icon icon="solar:arrow-right-up-linear" class="opacity-50 group-hover/link:opacity-100"
                                        width="12"></iconify-icon>
                                </a>

                                <div class="flex items-center gap-3 text-xs text-muted font-medium">
                                    <span class="flex items-center gap-1 hover:text-yellow-500 transition-colors" title="Stars">
                                        <iconify-icon icon="solar:star-bold-duotone" class="text-yellow-500/80"></iconify-icon>
                                        {{ $repo->stargazers_count ?? 0 }}
                                    </span>
                                    <span class="flex items-center gap-1 hover:text-blue-500 transition-colors" title="Forks">
                                        <iconify-icon icon="solar:branching-paths-up-bold-duotone"
                                            class="text-blue-500/80"></iconify-icon>
                                        {{ $repo->forks_count ?? 0 }}
                                    </span>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div
                            class="col-span-full py-10 flex flex-col items-center justify-center text-muted bg-body border border-custom rounded-2xl border-dashed">
                            <iconify-icon icon="solar:folder-error-bold-duotone" width="48"
                                class="mb-2 text-gray-400"></iconify-icon>
                            <p class="text-sm">No GitHub repositories found.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="space-y-6">
                {{-- <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                    <h3 class="text-lg font-bold text-text-main mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="text-green-500"></iconify-icon>
                        Team Activity
                    </h3>
                    <ul class="space-y-4">
                        @foreach ($githubActivity as $gitActivity)
                        <li class="flex gap-3 items-start">
                            <div class="w-2 h-2 rounded-full bg-green-500 mt-2 shrink-0"></div>
                            <p class="text-sm text-muted"><strong class="text-text-main">Adarsh</strong> pushed to
                                <code>{{ $gitActivity }}</code> <span class="text-xs block mt-0.5 opacity-70">3 mins ago</span>
                            </p>
                        </li>
                        @endforeach
                        <li class="flex gap-3 items-start">
                            <div class="w-2 h-2 rounded-full bg-blue-500 mt-2 shrink-0"></div>
                            <p class="text-sm text-muted"><strong class="text-text-main">Ritika</strong> commented on PR #21
                                <span class="text-xs block mt-0.5 opacity-70">2 hours ago</span>
                            </p>
                        </li>
                        <li class="flex gap-3 items-start">
                            <div class="w-2 h-2 rounded-full bg-purple-500 mt-2 shrink-0"></div>
                            <p class="text-sm text-muted"><strong class="text-text-main">Ravi</strong> merged feature branch
                                <span class="text-xs block mt-0.5 opacity-70">yesterday</span>
                            </p>
                        </li>
                    </ul>
                </div> --}}

                <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
    <h3 class="text-lg font-bold text-text-main mb-4 flex items-center gap-2">
        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="text-green-500"></iconify-icon>
        Recent Activity
    </h3>

    <ul class="space-y-4">
        {{-- @forelse use kar rahe hain taaki blank hone par error na aaye --}}
        @forelse ($githubActivity as $gitActivity)
            @php
                // 1. Data Extract karna
                $actor = $gitActivity['actor']['login'] ?? 'Someone';
                $repoFullName = $gitActivity['repo']['name'] ?? 'a-repo';

                // Repo name clean karna (owner name hatana)
                $repoName = explode('/', $repoFullName)[1] ?? $repoFullName;

                // Time ko "3 mins ago" format mein badalna
                $timeAgo = \Carbon\Carbon::parse($gitActivity['created_at'])->diffForHumans();

                // 2. Action aur Color decide karna (Event type ke hisaab se)
                $eventType = $gitActivity['type'] ?? 'UnknownEvent';

                if ($eventType === 'PushEvent') {
                    $action = 'pushed to';
                    $color = 'bg-green-500';
                } elseif ($eventType === 'PullRequestEvent') {
                    $action = 'opened a PR in';
                    $color = 'bg-purple-500';
                } elseif ($eventType === 'IssuesEvent') {
                    $action = 'opened an issue in';
                    $color = 'bg-red-500';
                } elseif ($eventType === 'WatchEvent') {
                    $action = 'starred';
                    $color = 'bg-yellow-500';
                } else {
                    $action = 'interacted with';
                    $color = 'bg-blue-500';
                }
            @endphp

            <li class="flex gap-3 items-start">
                <div class="w-2 h-2 rounded-full {{ $color }} mt-2 shrink-0"></div>

                <p class="text-sm text-muted">
                    <strong class="text-text-main">{{ $actor }}</strong>

                    {{ $action }}

                    <code>{{ $repoName }}</code>

                    <span class="text-xs block mt-0.5 opacity-70">{{ $timeAgo }}</span>
                </p>
            </li>
        @empty
            <li class="text-sm text-muted opacity-70 flex items-center gap-2">
                <iconify-icon icon="solar:ghost-smile-bold-duotone" class="text-lg"></iconify-icon>
                No recent team activity found.
            </li>
        @endforelse
    </ul>
</div>

                <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                    <h3 class="text-lg font-bold text-text-main mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:bell-bold-duotone" class="text-red-500"></iconify-icon>
                        Notifications
                    </h3>
                    <ul class="space-y-3">
                        <li
                            class="flex items-center gap-3 p-3 rounded-xl bg-green-50/50 dark:bg-green-900/10 text-sm border border-green-100 dark:border-green-800">
                            <iconify-icon icon="solar:star-bold" class="text-green-500"></iconify-icon>
                            <span class="text-green-800 dark:text-green-300">You reached 100 stars!</span>
                        </li>
                        <li
                            class="flex items-center gap-3 p-3 rounded-xl bg-yellow-50/50 dark:bg-yellow-900/10 text-sm border border-yellow-100 dark:border-yellow-800">
                            <iconify-icon icon="solar:danger-circle-bold" class="text-yellow-500"></iconify-icon>
                            <span class="text-yellow-800 dark:text-yellow-300">New release available</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    @else
        <div
            class="flex flex-col items-center justify-center py-20 bg-card rounded-[2rem] border border-custom shadow-apple text-center">
            <div class="w-24 h-24 bg-body rounded-full flex items-center justify-center mb-6">
                <iconify-icon icon="solar:folder-error-bold-duotone" class="text-4xl text-muted"></iconify-icon>
            </div>
            <h2 class="text-2xl font-bold text-text-main mb-2">No Projects Found</h2>
            <p class="text-muted max-w-md mb-8">Connect your GitHub account or create a new project to see statistics here.</p>
            <a href="{{ route('github.form.show', ['username' => Auth::user()->username]) }}"
                class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-lg hover:shadow-primary/30 hover:-translate-y-1 transition-all">
                Connect GitHub
            </a>
        </div>
    @endif

@endsection

@section('scripts')
    <script>
        // Chart Configuration (Responsive & Themed)
        const chartTextColor = document.documentElement.classList.contains('dark-theme') ? '#e0e0e0' : '#2c3e50';
        const chartGridColor = document.documentElement.classList.contains('dark-theme') ? 'rgba(255,255,255,0.1)' : 'rgba(0,0,0,0.05)';

        // 1. Bar Chart
        const repoBarChart = document.getElementById('repoBarChart');
        if (repoBarChart) {
            new Chart(repoBarChart, {
                type: 'bar',
                data: {
                    labels: ['Core', 'Portfolio', 'Chatbot', 'E-com'],
                    datasets: [{
                        label: 'Stars',
                        data: [25, 40, 18, 22],
                        backgroundColor: '#0071e3',
                        borderRadius: 6,
                        barThickness: 20
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                    },
                    scales: {
                        y: {
                            grid: { color: chartGridColor },
                            ticks: { color: chartTextColor }
                        },
                        x: {
                            grid: { display: false },
                            ticks: { color: chartTextColor }
                        }
                    }
                }
            });
        }

        // 2. Pie Chart
        const langPieChart = document.getElementById('langPieChart');
        if (langPieChart) {
            new Chart(langPieChart, {
                type: 'doughnut',
                data: {
                    labels: ['PHP', 'JS', 'CSS', 'HTML'],
                    datasets: [{
                        data: [40, 30, 20, 10],
                        backgroundColor: ['#8892BF', '#F0DB4F', '#264de4', '#e34c26'],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    cutout: '70%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: chartTextColor,
                                usePointStyle: true,
                                padding: 20
                            }
                        }
                    }
                }
            });
        }
    </script>
@endsection

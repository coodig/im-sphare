{{-- @extends('layouts.app')

@section('content')
    <div class="dashboard-container">

        <div class="dashboard-title">

            <h2>
                Welcome,
                <span class="name">
                    {{ ucwords(Auth::user()->profile->name ?? str_replace(['_', '@', '-'], ' ', Auth::user()->username)) }}
                </span>
                <iconify-icon icon="noto:waving-hand"></iconify-icon>
            </h2>


            <p>It's a dashboard for your activity and all records.</p>
        </div>

        @if ($hasGithubToken)
            <div class="card-grid">
                <div class="card">
                    <h5><iconify-icon icon="si:projects-duotone"></iconify-icon>Public Projects</h5>
                    <p class="big-number">{{$totalRepos}}</p>
                </div>
                <div class="card">
                    <h5><iconify-icon icon="si:projects-duotone"></iconify-icon>Private Projects</h5>
                    <p class="big-number">{{$totalRepos}}</p>
                </div>
                <div class="card">
                    <h5><iconify-icon icon="si:projects-duotone"></iconify-icon>Followers</h5>
                    <p class="big-number">{{$totalRepos}}</p>
                </div>
                <div class="card">
                    <h5><iconify-icon icon="si:projects-duotone"></iconify-icon>Total Projects</h5>
                    <p class="big-number">{{$totalRepos}}</p>
                </div>

            </div>

            <div class="section">
                <h3><iconify-icon icon="streamline-flex:decent-work-and-economic-growth-remix"></iconify-icon>Activity stats</h3>
                <div class="insights">
                    <div class="barChartInsights">
                        <div><canvas id="repoBarChart"></canvas></div>
                    </div>
                    <div class="langPieChartInsights">
                        <div><canvas id="langPieChart"></canvas></div>
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <div class="section-header">
                    <h3><iconify-icon icon="solar:graph-new-up-bold-duotone"></iconify-icon>Recent Projects</h3>
                    <span>
                        <a href="{{ route('repos.index', ['username' => Auth::user()->username]) }}"
                            class="btn btn-primary">Show All</a>
                    </span>
                </div>

                <div class="card-grid">
                    @foreach ($repos as $repo)
                        <div class="card">
                                <h5>{{ucfirst($repo->name)}}</h5>
                                <p>{{ucfirst($repo->description ?? 'not available')}}</p>
                                <small><a href="{{$repo->html_url}}" target="_blank">Show</a></small>
                                </div>
                                @endforeach
                </div>
            </div>

            <div class="mt-10">
                <h3>👥 Team Activity</h3>
                <ul class="team-list">
                    <li><strong>Adarsh</strong> pushed to <code>chatbot-ui</code> • 3 mins ago</li>
                    <li><strong>Ritika</strong> commented on PR #21 in <code>imsphare-core</code> • 2 hours ago</li>
                    <li><strong>Ravi</strong> merged <code>feature/docs</code> into main • yesterday</li>
                </ul>
            </div>

            <div class="mt-10">
                <h3>🔔 Latest Notifications</h3>
                <ul class="notification-list">
                    <li>✅ You’ve reached 100 GitHub stars!</li>
                    <li>⚠️ New release available for <strong>imsphare-core</strong></li>
                    <li>📢 New user request: John wants to join your team.</li>
                </ul>
            </div>
        @else
            <p>Nothing for Dashboard</p>
        @endif
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const repoBarChart = document.getElementById('repoBarChart');
        new Chart(repoBarChart, {
            type: 'bar',
            data: {
                labels: ['imsphare-core', 'portfolio-ai', 'chatbot-ui', 'laravel-ecom'],
                datasets: [{
                    label: '🌟 Stars',
                    data: [25, 40, 18, 22],
                    backgroundColor: '#4CAF50',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    title: { display: true, text: 'Stars Per Repository' }
                }
            }
        });

        const langPieChart = document.getElementById('langPieChart');
        new Chart(langPieChart, {
            type: 'doughnut',
            data: {
                labels: ['PHP', 'JavaScript', 'CSS', 'HTML'],
                datasets: [{
                    label: 'Languages',
                    data: [40, 30, 20, 10],
                    backgroundColor: ['#8892BF', '#F0DB4F', '#264de4', '#e34c26'],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    title: { display: true, text: 'Most Used Languages' },
                    legend: { position: 'bottom' }
                }
            }
        });
    </script>
@endsection --}}



@extends('layouts.app')

@section('content')

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main flex items-center gap-2">
                Welcome, {{ ucwords(Auth::user()->profile->name ?? str_replace(['_', '@', '-'], ' ', Auth::user()->username)) }}
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
            <div class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
                <div class="flex items-center gap-4 mb-3">
                    <div class="p-3 rounded-full bg-blue-50 text-blue-600">
                        <iconify-icon icon="solar:folder-with-files-bold-duotone" width="24"></iconify-icon>
                    </div>
                    <h5 class="font-bold text-muted text-sm uppercase tracking-wider">Public</h5>
                </div>
                <p class="text-4xl font-bold text-text-main">{{$totalRepos}}</p>
            </div>

            <div class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
                <div class="flex items-center gap-4 mb-3">
                    <div class="p-3 rounded-full bg-purple-50 text-purple-600">
                        <iconify-icon icon="solar:shield-keyhole-bold-duotone" width="24"></iconify-icon>
                    </div>
                    <h5 class="font-bold text-muted text-sm uppercase tracking-wider">Private</h5>
                </div>
                <p class="text-4xl font-bold text-text-main">5</p> {{-- Static for now --}}
            </div>

            <div class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
                <div class="flex items-center gap-4 mb-3">
                    <div class="p-3 rounded-full bg-pink-50 text-pink-600">
                        <iconify-icon icon="solar:users-group-rounded-bold-duotone" width="24"></iconify-icon>
                    </div>
                    <h5 class="font-bold text-muted text-sm uppercase tracking-wider">Followers</h5>
                </div>
                <p class="text-4xl font-bold text-text-main">120</p> {{-- Static for now --}}
            </div>

            <div class="bg-card p-6 rounded-[1.5rem] border border-custom shadow-apple hover:-translate-y-1 transition-transform">
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
                    @foreach ($repos->take(4) as $repo)
                        <div class="p-4 rounded-2xl bg-body border border-custom hover:border-primary transition-colors group">
                            <div class="flex justify-between items-start mb-2">
                                <h5 class="font-bold text-text-main truncate pr-2">{{ ucfirst($repo->name) }}</h5>
                                <a href="{{$repo->html_url}}" target="_blank" class="text-muted group-hover:text-primary transition-colors">
                                    <iconify-icon icon="solar:link-circle-bold" width="20"></iconify-icon>
                                </a>
                            </div>
                            <p class="text-xs text-muted line-clamp-2 mb-3 h-8">
                                {{ ucfirst($repo->description ?? 'No description available for this project.') }}
                            </p>
                            <div class="flex items-center gap-2 mt-auto">
                                <span class="px-2 py-1 rounded-md bg-gray-200 dark:bg-gray-700 text-[10px] font-bold text-text-main">
                                    {{ $repo->language ?? 'Code' }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                    <h3 class="text-lg font-bold text-text-main mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="text-green-500"></iconify-icon>
                        Team Activity
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex gap-3 items-start">
                            <div class="w-2 h-2 rounded-full bg-green-500 mt-2 shrink-0"></div>
                            <p class="text-sm text-muted"><strong class="text-text-main">Adarsh</strong> pushed to <code>chatbot-ui</code> <span class="text-xs block mt-0.5 opacity-70">3 mins ago</span></p>
                        </li>
                        <li class="flex gap-3 items-start">
                            <div class="w-2 h-2 rounded-full bg-blue-500 mt-2 shrink-0"></div>
                            <p class="text-sm text-muted"><strong class="text-text-main">Ritika</strong> commented on PR #21 <span class="text-xs block mt-0.5 opacity-70">2 hours ago</span></p>
                        </li>
                        <li class="flex gap-3 items-start">
                            <div class="w-2 h-2 rounded-full bg-purple-500 mt-2 shrink-0"></div>
                            <p class="text-sm text-muted"><strong class="text-text-main">Ravi</strong> merged feature branch <span class="text-xs block mt-0.5 opacity-70">yesterday</span></p>
                        </li>
                    </ul>
                </div>

                <div class="bg-card p-6 rounded-[2rem] border border-custom shadow-apple">
                    <h3 class="text-lg font-bold text-text-main mb-4 flex items-center gap-2">
                        <iconify-icon icon="solar:bell-bold-duotone" class="text-red-500"></iconify-icon>
                        Notifications
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 p-3 rounded-xl bg-green-50/50 dark:bg-green-900/10 text-sm border border-green-100 dark:border-green-800">
                            <iconify-icon icon="solar:star-bold" class="text-green-500"></iconify-icon>
                            <span class="text-green-800 dark:text-green-300">You reached 100 stars!</span>
                        </li>
                        <li class="flex items-center gap-3 p-3 rounded-xl bg-yellow-50/50 dark:bg-yellow-900/10 text-sm border border-yellow-100 dark:border-yellow-800">
                            <iconify-icon icon="solar:danger-circle-bold" class="text-yellow-500"></iconify-icon>
                            <span class="text-yellow-800 dark:text-yellow-300">New release available</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    @else
        <div class="flex flex-col items-center justify-center py-20 bg-card rounded-[2rem] border border-custom shadow-apple text-center">
            <div class="w-24 h-24 bg-body rounded-full flex items-center justify-center mb-6">
                <iconify-icon icon="solar:folder-error-bold-duotone" class="text-4xl text-muted"></iconify-icon>
            </div>
            <h2 class="text-2xl font-bold text-text-main mb-2">No Projects Found</h2>
            <p class="text-muted max-w-md mb-8">Connect your GitHub account or create a new project to see statistics here.</p>
            <a href="{{ route('github.form.show',['username'=>Auth::user()->username]) }}" class="px-8 py-3 bg-primary text-white rounded-full font-bold shadow-lg hover:shadow-primary/30 hover:-translate-y-1 transition-all">
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

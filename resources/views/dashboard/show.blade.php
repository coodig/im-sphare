@extends('layouts.app')

@section('content')
    <div class="dashboard-container">

        <div class="dashboard-title">
            {{-- <h2>Welcome, {{ ucwords((Auth::user()->profile->name) ?? (str_replace(['_','@','-'],'',Auth::user()->username) }} <iconify-icon icon="noto:waving-hand"></iconify-icon></h2> --}}

            <h2>
    Welcome,
    {{ ucwords(Auth::user()->profile->name ?? str_replace(['_', '@', '-'], ' ', Auth::user()->username)) }}
    <iconify-icon icon="noto:waving-hand"></iconify-icon>
</h2>


            <p>It's a dashboard for your activity and all records.</p>
        </div>

        @if ($hasGithubToken)
            {{-- 📊 Quick Stats --}}
            <div class="card-grid">
                <div class="card">
                    <h5><iconify-icon icon="si:projects-duotone"></iconify-icon>Total Projects</h5>
                    <p class="big-number">{{$totalRepos}}</p>
                </div>
                {{-- <div class="card">
                    <h5><iconify-icon id="themeToggleIcon" icon="si:projects-duotone"></iconify-icon>Total Follwer</h5>
                    <p class="big-number">6</p>
                </div> --}}
                {{-- <div class="card">
                    <h5><iconify-icon id="themeToggleIcon" icon="si:projects-duotone"></iconify-icon>Total Commits</h5>
                    <p class="big-number">3</p>
                </div> --}}
                {{-- <div class="card">
                    <h5><iconify-icon id="themeToggleIcon" icon="si:projects-duotone"></iconify-icon>Total Stars</h5>
                    <p class="big-number">105</p>
                </div> --}}
            </div>

            {{-- 📈 Charts --}}
            {{-- <h3>📊 Repository Insights</h3>
            <div class="insights">
                <div class="barChartInsights">
                    <div><canvas id="repoBarChart"></canvas></div>
                </div>
                <div class="langPieChartInsights">
                    <div><canvas id="langPieChart"></canvas></div>
                </div>
            </div> --}}

            {{-- 🗂️ Recent Projects --}}
            <div class="mt-10">
                <h3><iconify-icon icon="solar:graph-new-up-bold-duotone"></iconify-icon>Recently Updated Projects</h3>
                 <a href="{{ route('repos.index',['username'=>Auth::user()->username]) }}">Show All</a>

                <div class="card-grid">
                    @foreach ($repos as $repo)
                    <div class="card">
                        <h5>{{ucfirst($repo->name)}}</h5>
                        <p>{{ucfirst($repo->description ?? 'not available')}}</p>
                        {{-- <small>Last updated: 2 days ago</small> --}}
                        <small><a href="{{$repo->html_url}}" target="_blank">Show</a></small>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- 🧑‍🤝‍🧑 Team Activity --}}
            {{-- <div class="mt-10">
                <h3>👥 Team Activity</h3>
                <ul class="team-list">
                    <li><strong>Adarsh</strong> pushed to <code>chatbot-ui</code> • 3 mins ago</li>
                    <li><strong>Ritika</strong> commented on PR #21 in <code>imsphare-core</code> • 2 hours ago</li>
                    <li><strong>Ravi</strong> merged <code>feature/docs</code> into main • yesterday</li>
                </ul>
            </div> --}}

            {{-- 🔔 Notifications --}}
            {{-- <div class="mt-10">
                <h3>🔔 Latest Notifications</h3>
                <ul class="notification-list">
                    <li>✅ You’ve reached 100 GitHub stars!</li>
                    <li>⚠️ New release available for <strong>imsphare-core</strong></li>
                    <li>📢 New user request: John wants to join your team.</li>
                </ul>
            </div>
        @else
            <p>Nothing for Dashboard</p> --}}
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
@endsection

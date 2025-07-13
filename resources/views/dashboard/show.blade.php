{{-- @extends('layouts.app')

@section('content')
    <div class="dashboard-container">

        <div class="dashboard-title">
            <h2>Welcome to {{ucwords(Auth::user()->name)}} Dashboard show page</h2>
            <p>Manage your projects, repositories, and activities.</p>
        </div>

        <div class="card-grid">
            <div class="card">
                <h5>Total Projects</h5>
                <p class="big-number">24</p>
            </div>
            <div class="card">
                <h5>Total Repositories</h5>
                <p class="big-number">24</p>
            </div>
            <div class="card">
                <h5>Team Members</h5>
                <p class="big-number">5</p>
            </div>
            <div class="card">
                <h5>Total Projects</h5>
                <p class="big-number">12</p>
            </div>
        </div>

        <div class="dashbaord-insights">

        </div>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="dashboard-container">

    <div class="dashboard-title">
        <h2>Welcome, {{ ucwords(Auth::user()->name) }} 👋</h2>
        <p>Manage your GitHub repos, personal projects, and team progress in one place.</p>
    </div>

    {{-- 📊 Quick Stats --}}
    <div class="card-grid">
        <div class="card"><h5>📁 Total Repositories</h5><p class="big-number">24</p></div>
        <div class="card"><h5>🛠️ Projects</h5><p class="big-number">6</p></div>
        <div class="card"><h5>🤝 Team Members</h5><p class="big-number">3</p></div>
        <div class="card"><h5>⭐ Stars</h5><p class="big-number">105</p></div>
    </div>

    {{-- 📈 Charts --}}
    <div class="mt-10">
        <h3>📊 Repository Insights</h3>
        <div style="max-width: 700px;"><canvas id="repoBarChart"></canvas></div>
        <br>
        <div style="max-width: 400px;"><canvas id="langPieChart"></canvas></div>
    </div>

    {{-- 🗂️ Recent Projects --}}
    <div class="mt-10">
        <h3>🗂️ Recently Updated Projects</h3>
        <div class="card-grid">
            <div class="card">
                <h5>chatbot-ai</h5>
                <p>🤖 NLP-based chatbot with Laravel + Vue</p>
                <small>Last updated: 2 days ago</small>
            </div>
            <div class="card">
                <h5>imsphare-core</h5>
                <p>🌐 The central framework of Sphare Platform</p>
                <small>Last updated: 4 hours ago</small>
            </div>
            <div class="card">
                <h5>portfolio-builder</h5>
                <p>🧑‍💼 Auto-builder for developer portfolios</p>
                <small>Last updated: 6 days ago</small>
            </div>
        </div>
    </div>

    {{-- 🧑‍🤝‍🧑 Team Activity --}}
    <div class="mt-10">
        <h3>👥 Team Activity</h3>
        <ul class="team-list">
            <li><strong>Adarsh</strong> pushed to <code>chatbot-ui</code> • 3 mins ago</li>
            <li><strong>Ritika</strong> commented on PR #21 in <code>imsphare-core</code> • 2 hours ago</li>
            <li><strong>Ravi</strong> merged <code>feature/docs</code> into main • yesterday</li>
        </ul>
    </div>

    {{-- 🔔 Notifications --}}
    <div class="mt-10">
        <h3>🔔 Latest Notifications</h3>
        <ul class="notification-list">
            <li>✅ You’ve reached 100 GitHub stars!</li>
            <li>⚠️ New release available for <strong>imsphare-core</strong></li>
            <li>📢 New user request: John wants to join your team.</li>
        </ul>
    </div>

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

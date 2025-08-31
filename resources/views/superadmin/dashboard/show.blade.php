@extends('superadmin.layouts.app')

@section('superadmin-content')
<div class="container-fluid mt-4">
    <div class="row g-4">
        <!-- Stats Cards -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <h3>{{ $userCount }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <h3>{{ $users->where('role', 'user')->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Admins</h5>
                    <h3>{{ $users->where('role', 'admin')->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Super Admins</h5>
                    <h3>{{ $users->where('role', 'superadmin')->count() }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    User Growth (Monthly)
                </div>
                <div class="card-body">
                    <canvas id="userChart" height="100"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Users Table -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    Recent Users
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users->take(5) as $user)
                                <tr>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ ucfirst($user->role) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('superadmin.users') }}" class="btn btn-sm btn-primary">View All</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('userChart').getContext('2d');
    const userChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($months ?? ['Jan','Feb','Mar','Apr','May']) !!}, // Pass months from controller
            datasets: [{
                label: 'Users Joined',
                data: {!! json_encode($userCounts ?? [10,20,30,40,50]) !!}, // Pass data from controller
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        color: '#333'
                    }
                }
            },
            scales: {
                x: { ticks: { color: '#333' } },
                y: { ticks: { color: '#333' }, beginAtZero: true }
            }
        }
    });
</script>
@endsection

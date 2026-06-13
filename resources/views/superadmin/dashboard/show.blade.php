{{-- @extends('superadmin.layouts.app')

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
                    <a href="{{ route('superadmin.users.list') }}" class="btn btn-sm btn-primary">View All</a>
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
@endsection --}}


@extends('superadmin.layouts.app')

@section('superadmin-content')
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1 text-dark d-flex align-items-center gap-2">
                <iconify-icon icon="solar:widget-5-bold-duotone" class="text-primary"></iconify-icon> Platform Analytics
            </h2>
            <p class="text-secondary mb-0 fw-medium">Real-time overview of the imSphare ecosystem.</p>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-light bg-white border shadow-sm d-flex align-items-center gap-2 fw-semibold rounded-pill px-3 py-2 hover-shadow transition-all">
                <iconify-icon icon="solar:calendar-bold-duotone" class="text-secondary"></iconify-icon> This Month
            </button>
            <button class="btn btn-primary shadow-sm d-flex align-items-center gap-2 fw-bold rounded-pill px-4 py-2 hover-shadow transition-all">
                <iconify-icon icon="solar:document-add-bold-duotone"></iconify-icon> Export Report
            </button>
        </div>
    </div>

    <div class="row g-4 mb-4">

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-3 hover-shadow transition-all position-relative overflow-hidden">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-10" style="background: radial-gradient(circle at top right, rgba(79,70,229,0.15), transparent 60%); pointer-events: none;"></div>
                <div class="d-flex justify-content-between align-items-start mb-3 position-relative z-1">
                    <div>
                        <p class="text-secondary fw-bold mb-1 small text-uppercase tracking-wide">Total Users</p>
                        <h3 class="fw-bold mb-0 text-dark">{{ number_format($userCount) }}</h3>
                    </div>
                    <div class="p-2 bg-primary-subtle text-primary rounded-3 shadow-sm">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-3"></iconify-icon>
                    </div>
                </div>
                <div class="mt-auto position-relative z-1">
                    <span class="badge rounded-pill bg-success-subtle text-success fw-bold px-2 py-1"><iconify-icon icon="solar:trend-up-square-bold-duotone" class="align-middle me-1"></iconify-icon>+12%</span>
                    <span class="text-secondary small ms-1 fw-medium">vs last month</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-3 hover-shadow transition-all">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-secondary fw-bold mb-1 small text-uppercase tracking-wide">Standard Users</p>
                        <h3 class="fw-bold mb-0 text-dark">{{ number_format($users->where('role', 'user')->count()) }}</h3>
                    </div>
                    <div class="p-2 bg-info-subtle text-info-emphasis rounded-3 shadow-sm">
                        <iconify-icon icon="solar:user-rounded-bold-duotone" class="fs-3"></iconify-icon>
                    </div>
                </div>
                <div class="mt-auto">
                    <span class="badge rounded-pill bg-success-subtle text-success fw-bold px-2 py-1"><iconify-icon icon="solar:trend-up-square-bold-duotone" class="align-middle me-1"></iconify-icon>+8.4%</span>
                    <span class="text-secondary small ms-1 fw-medium">growth</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-3 hover-shadow transition-all">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-secondary fw-bold mb-1 small text-uppercase tracking-wide">Ecosystem Admins</p>
                        <h3 class="fw-bold mb-0 text-dark">{{ number_format($users->where('role', 'admin')->count()) }}</h3>
                    </div>
                    <div class="p-2 bg-warning-subtle text-warning-emphasis rounded-3 shadow-sm">
                        <iconify-icon icon="solar:shield-user-bold-duotone" class="fs-3"></iconify-icon>
                    </div>
                </div>
                <div class="mt-auto">
                    <span class="badge rounded-pill bg-secondary-subtle text-secondary fw-bold px-2 py-1"><iconify-icon icon="solar:minus-square-bold-duotone" class="align-middle me-1"></iconify-icon>Stable</span>
                    <span class="text-secondary small ms-1 fw-medium">no changes</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-3 hover-shadow transition-all">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-secondary fw-bold mb-1 small text-uppercase tracking-wide">Super Admins</p>
                        <h3 class="fw-bold mb-0 text-dark">{{ number_format($users->where('role', 'superadmin')->count()) }}</h3>
                    </div>
                    <div class="p-2 bg-danger-subtle text-danger rounded-3 shadow-sm">
                        <iconify-icon icon="solar:crown-star-bold-duotone" class="fs-3"></iconify-icon>
                    </div>
                </div>
                <div class="mt-auto">
                    <span class="text-danger fw-semibold small d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:danger-triangle-bold-duotone"></iconify-icon> Core Access Level
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h5 class="fw-bold mb-0">Ecosystem Growth Matrix</h5>
                        <small class="text-secondary fw-medium">Monthly user registration volume</small>
                    </div>
                    <button class="btn btn-sm btn-light border rounded-pill px-3 shadow-sm d-flex align-items-center gap-1">
                        <iconify-icon icon="solar:filter-linear"></iconify-icon> Filter
                    </button>
                </div>
                <div class="position-relative w-100" style="height: 300px;">
                    <canvas id="userChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 d-flex flex-column">
                <div class="card-header bg-transparent border-bottom-0 pt-4 px-4 pb-2 d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="fw-bold mb-0">Recent Onboards</h5>
                        <small class="text-secondary fw-medium">Latest users joined</small>
                    </div>
                    <div class="p-2 bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                        <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-5"></iconify-icon>
                    </div>
                </div>

                <div class="card-body px-0 py-2 flex-grow-1">
                    <div class="list-group list-group-flush border-top border-bottom">
                        @forelse ($users->take(5) as $user)
                            <div class="list-group-item px-4 py-3 border-0 d-flex justify-content-between align-items-center hover-bg transition-all">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="position-relative">
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->username) }}&background=random&bold=true" width="42" height="42" class="rounded-circle shadow-sm border border-white border-2">
                                    </div>
                                    <div class="lh-sm">
                                        <h6 class="mb-1 fw-bold text-dark">{{ $user->username }}</h6>
                                        <small class="text-secondary">{{ $user->created_at ? $user->created_at->diffForHumans() : 'Just now' }}</small>
                                    </div>
                                </div>

                                <div>
                                    @if(strtolower($user->role) === 'superadmin')
                                        <span class="badge bg-danger-subtle text-danger rounded-pill px-2 py-1 fw-bold" style="font-size: 0.65rem; letter-spacing: 0.5px;">SUPER ADMIN</span>
                                    @elseif(strtolower($user->role) === 'admin')
                                        <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill px-2 py-1 fw-bold" style="font-size: 0.65rem; letter-spacing: 0.5px;">ADMIN</span>
                                    @else
                                        <span class="badge bg-primary-subtle text-primary rounded-pill px-2 py-1 fw-bold" style="font-size: 0.65rem; letter-spacing: 0.5px;">USER</span>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5 text-secondary">
                                <iconify-icon icon="solar:ghost-smile-bold-duotone" class="fs-1 text-muted mb-2"></iconify-icon>
                                <p class="mb-0">No users found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="card-footer bg-transparent border-top-0 px-4 pb-4 pt-0 text-center">
                    <a href="{{ route('superadmin.users.list') }}" class="btn btn-light border w-100 py-2 rounded-pill fw-bold text-primary shadow-sm hover-shadow transition-all">
                        View All Directory &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-shadow:hover { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important; transform: translateY(-2px); }
        .hover-bg:hover { background-color: #f8fafc; }
        .transition-all { transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1); }
        .tracking-wide { letter-spacing: 0.05em; }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('userChart').getContext('2d');

            // Create a premium gradient for the line chart fill
            let gradientFill = ctx.createLinearGradient(0, 0, 0, 300);
            gradientFill.addColorStop(0, 'rgba(79, 70, 229, 0.4)'); // Primary color with opacity
            gradientFill.addColorStop(1, 'rgba(79, 70, 229, 0.0)'); // Fades out to transparent

            const userChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: {!! json_encode($months ?? ['Jan','Feb','Mar','Apr','May']) !!},
                    datasets: [{
                        label: 'New Users Joined',
                        data: {!! json_encode($userCounts ?? [10,20,30,40,50]) !!},
                        borderColor: '#4F46E5', // Primary brand color
                        backgroundColor: gradientFill,
                        borderWidth: 3,
                        pointBackgroundColor: '#ffffff',
                        pointBorderColor: '#4F46E5',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        fill: true,
                        tension: 0.4 // Smooth bezier curves
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false // Hide default legend for cleaner look
                        },
                        tooltip: {
                            backgroundColor: '#0F172A',
                            titleFont: { family: 'Inter', size: 13 },
                            bodyFont: { family: 'Inter', size: 14, weight: 'bold' },
                            padding: 12,
                            cornerRadius: 8,
                            displayColors: false
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        x: {
                            grid: { display: false, drawBorder: false },
                            ticks: { color: '#64748B', font: { family: 'Inter', size: 12 } }
                        },
                        y: {
                            grid: { color: '#E2E8F0', borderDash: [5, 5], drawBorder: false },
                            ticks: { color: '#64748B', font: { family: 'Inter', size: 12 }, beginAtZero: true, padding: 10 }
                        }
                    }
                }
            });
        });
    </script>
@endsection

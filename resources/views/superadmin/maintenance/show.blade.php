{{-- use your admin layout --}}
{{-- @extends('superadmin.layouts.app')

@section('superadmin-content')
    <div class="container py-3">
        <h1 class="mb-3">Maintenance Panel</h1>
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>Actions</strong>
                <span class="badge {{ $isDown ? 'bg-danger' : 'bg-success' }}">
                    App: {{ $isDown ? 'DOWN (maintenance mode)' : 'UP' }}
                </span>
            </div>
            <div class="card-body d-coloumn justify-content-between">

                <form method="POST" action="{{ route('superadmin.maintenance.clear') }}" class="mb-2">
                    @csrf
                    <label for="clear-caches">Clear Cahes</label>
                    <button class="btn btn-primary">🔄 Clear All Caches</button>
                </form>

                <form method="POST" action="{{ route('superadmin.maintenance.queue.restart') }}"  class="mb-2">
                    @csrf
                    <label for="queue-restart">Queue Restart</label>
                    <button class="btn btn-secondary">⏯ Queue Restart</button>
                </form>

                <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}"
                    class="d-flex align-items-center gap-2">
                    @csrf
                    <input type="hidden" name="mode" value="down">
                    <label for="app-down-mode">Bring App Down</label>
                    <button class="btn btn-warning">🚧 Put App DOWN</button>
                </form>

                <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}"  class="mb-2">
                    @csrf
                    <input type="hidden" name="mode" value="up">
                    <label for="app-up-mode">Bring App Up</label>
                    <button class="btn btn-success">✅ Bring App UP</button>
                </form>

                <form method="POST" action="{{ route('superadmin.maintenance.purge.laravel_log') }}"  class="mb-2">
                    @csrf
                    @method('DELETE')
                    <label for="clear-laravel-logs">Clear laravel logs</label>
                    <button class="btn btn-danger">🧹 Clear laravel.log</button>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header"><strong>Recent Actions (last 20)</strong></div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>When</th>
                                <th>User</th>
                                <th>Action</th>
                                <th>Status</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($logs as $log)
                                <tr>
                                    <td>{{ $loop->iteration + ($logs->firstItem() - 1)}}</td>
                                    <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $log->user->name ?? 'N/A' }} (#{{ $log->user_id ?? '—' }})</td>
                                    <td>{{ $log->action }}</td>
                                    <td>
                                        <span class="badge {{ $log->status === 'success' ? 'bg-success' : 'bg-danger' }}">
                                            {{ $log->status }}
                                        </span>
                                    </td>
                                    <td style="max-width: 500px; white-space: pre-wrap;">{{ $log->message }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center p-3">No actions yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="paginate mt-3 py-3 align-items-center text-center ">
                {{ $logs->links() }}
            </div>
        </div>


        <div class="card log-preview">
            <div class="card-header"><strong>laravel.log (tail)</strong></div>
            <div class="card-body">
                <pre >
    {{ $logPreview }}
            </pre>
            </div>
        </div>
    </div>
@endsection --}}

                {{-- <input name="secret" type="text" class="form-control form-control-sm" placeholder="Optional secret"> --}}

            {{-- laravel.log preview --}}
            {{-- <div class="card">
                <div class="card-header"><strong>laravel.log (tail)</strong></div>
                <div class="card-body">
                    <pre style="max-height: 360px; overflow: wrap; font-size: 12px; line-height: 1.35;">
                    {{ $logPreview }}
                                </pre>
                </div>
            </div> --}}

{{--
@extends('superadmin.layouts.app')

@section('superadmin-content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Maintenance & Operations</h2>
            <p class="text-secondary mb-0">Control server cache, queues, and monitor system health.</p>
        </div>

        <!-- App Status Badge -->
        <div>
            @if($isDown)
                <span class="badge rounded-pill bg-danger-subtle text-danger px-4 py-2 fs-6 border border-danger">
                    <iconify-icon icon="solar:danger-triangle-bold-duotone" class="me-1"></iconify-icon> System is DOWN
                </span>
            @else
                <span class="badge rounded-pill bg-success-subtle text-success px-4 py-2 fs-6 border border-success">
                    <iconify-icon icon="solar:check-circle-bold-duotone" class="me-1"></iconify-icon> System is UP
                </span>
            @endif
        </div>
    </div>

    <!-- Alerts / Notifications -->
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4" role="alert">
            <iconify-icon icon="solar:check-circle-bold-duotone" class="fs-5 me-2 align-middle"></iconify-icon>
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-4" role="alert">
            <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-5 me-2 align-middle"></iconify-icon>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4 mb-4">
        <!-- Quick Actions Panel -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0 px-4">
                    <h5 class="fw-bold"><iconify-icon icon="solar:bolt-bold-duotone" class="text-warning me-2"></iconify-icon>Quick Actions</h5>
                </div>
                <div class="card-body p-4 d-flex flex-column gap-3">

                    <form method="POST" action="{{ route('superadmin.maintenance.clear') }}">
                        @csrf
                        <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-2 border">
                            <span class="fw-semibold text-dark"><iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="text-primary fs-5 me-2 align-middle"></iconify-icon> Clear All Caches</span>
                            <span class="badge bg-secondary-subtle text-secondary rounded-pill">Config, Route, View</span>
                        </button>
                    </form>

                    <form method="POST" action="{{ route('superadmin.maintenance.queue.restart') }}">
                        @csrf
                        <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-2 border">
                            <span class="fw-semibold text-dark"><iconify-icon icon="solar:restart-circle-bold-duotone" class="text-info fs-5 me-2 align-middle"></iconify-icon> Restart Queue</span>
                            <span class="badge bg-secondary-subtle text-secondary rounded-pill">Background Jobs</span>
                        </button>
                    </form>

                    <form method="POST" action="{{ route('superadmin.maintenance.purge.laravel_log') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-2 border">
                            <span class="fw-semibold text-dark"><iconify-icon icon="solar:file-remove-bold-duotone" class="text-danger fs-5 me-2 align-middle"></iconify-icon> Purge laravel.log</span>
                            <span class="badge bg-danger-subtle text-danger rounded-pill">Free Disk Space</span>
                        </button>
                    </form>

                    <hr class="text-muted my-1">

                    <!-- Maintenance Toggles -->
                    @if(!$isDown)
                        <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}">
                            @csrf
                            <input type="hidden" name="mode" value="down">
                            <button class="btn btn-outline-danger w-100 py-2 fw-bold">
                                <iconify-icon icon="solar:shield-warning-bold-duotone" class="fs-5 me-1 align-middle"></iconify-icon> Put App in Maintenance Mode
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}">
                            @csrf
                            <input type="hidden" name="mode" value="up">
                            <button class="btn btn-success w-100 py-2 fw-bold shadow-sm">
                                <iconify-icon icon="solar:play-circle-bold-duotone" class="fs-5 me-1 align-middle"></iconify-icon> Bring App Online
                            </button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        <!-- Recent Logs Table -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-bottom pt-4 px-4">
                    <h5 class="fw-bold"><iconify-icon icon="solar:clipboard-list-bold-duotone" class="text-primary me-2"></iconify-icon>Recent Actions (Logs)</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4 text-secondary small text-uppercase">Time</th>
                                    <th class="text-secondary small text-uppercase">Admin</th>
                                    <th class="text-secondary small text-uppercase">Action</th>
                                    <th class="text-secondary small text-uppercase pe-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($logs as $log)
                                    <tr>
                                        <td class="ps-4">
                                            <span class="fw-semibold text-dark">{{ $log->created_at->format('M d, H:i') }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="https://ui-avatars.com/api/?name={{ urlencode($log->user->username ?? 'Sys') }}&background=random" width="28" height="28" class="rounded-circle">
                                                <span class="fw-medium">{{ $log->user->username ?? 'System' }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-secondary">{{ str_replace('_', ' ', Str::title($log->action)) }}</span>
                                        </td>
                                        <td class="pe-4">
                                            @if($log->status === 'success')
                                                <span class="badge bg-success-subtle text-success px-2 py-1 rounded-pill">Success</span>
                                            @else
                                                <span class="badge bg-danger-subtle text-danger px-2 py-1 rounded-pill">Error</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-secondary">
                                            <iconify-icon icon="solar:ghost-smile-bold-duotone" class="fs-1 text-muted mb-2"></iconify-icon><br>
                                            No maintenance logs found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0 d-flex justify-content-center py-3">
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Laravel.log Terminal Preview -->
    <div class="card border-0 shadow-sm rounded-4 bg-dark">
        <div class="card-header bg-dark border-bottom border-secondary pt-3 px-4 text-light d-flex align-items-center gap-2">
            <iconify-icon icon="solar:code-square-bold-duotone" class="text-success fs-5"></iconify-icon>
            <span class="fw-bold font-monospace">tail -f storage/logs/laravel.log</span>
        </div>
        <div class="card-body p-0">
            <pre class="m-0 p-4 text-light font-monospace overflow-auto" style="max-height: 400px; font-size: 13px; line-height: 1.5; background-color: #1e1e1e;">{{ $logPreview ?: 'Log file is clean. No errors found!' }}</pre>
        </div>
    </div>
@endsection --}}



@extends('superadmin.layouts.app')

@section('superadmin-content')
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Infrastructure & Operations</h2>
            <p class="text-secondary mb-0">Monitor server health, manage queues, and control access.</p>
        </div>

        <!-- App Status Badge -->
        <div class="d-flex align-items-center gap-3">
            <span class="badge bg-light text-secondary border rounded-pill px-3 py-2 fs-6 shadow-sm font-monospace">
                Uptime: 99.98%
            </span>
            @if($isDown)
                <span class="badge rounded-pill bg-danger-subtle text-danger px-4 py-2 fs-6 border border-danger shadow-sm">
                    <iconify-icon icon="solar:shield-warning-bold-duotone" class="me-1 align-middle"></iconify-icon> SYSTEM DOWN
                </span>
            @else
                <span class="badge rounded-pill bg-success-subtle text-success px-4 py-2 fs-6 border border-success shadow-sm">
                    <iconify-icon icon="solar:check-circle-bold-duotone" class="me-1 align-middle"></iconify-icon> SYSTEM UP
                </span>
            @endif
        </div>
    </div>

    <!-- Alerts -->
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4 d-flex align-items-center" role="alert">
            <iconify-icon icon="solar:check-circle-bold-duotone" class="fs-4 me-2"></iconify-icon>
            <div>{{ session('status') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-4 d-flex align-items-center" role="alert">
            <iconify-icon icon="solar:danger-triangle-bold-duotone" class="fs-4 me-2"></iconify-icon>
            <div>{{ session('error') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- ROW 1: Server Health Metrics (UI Mockups for future backend) -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="text-secondary fw-semibold small text-uppercase">CPU Load</span>
                    <iconify-icon icon="solar:cpu-bolt-bold-duotone" class="text-primary fs-4"></iconify-icon>
                </div>
                <h4 class="fw-bold mb-2">24%</h4>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-primary" style="width: 24%"></div>
                </div>
                <small class="text-muted mt-2 d-block">Healthy | 4 Cores Active</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="text-secondary fw-semibold small text-uppercase">Memory (RAM)</span>
                    <iconify-icon icon="solar:sd-card-bold-duotone" class="text-info fs-4"></iconify-icon>
                </div>
                <h4 class="fw-bold mb-2">4.2 / 8 GB</h4>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-info" style="width: 52%"></div>
                </div>
                <small class="text-muted mt-2 d-block">52% Utilized</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 h-100">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="text-secondary fw-semibold small text-uppercase">Storage (SSD)</span>
                    <iconify-icon icon="solar:database-bold-duotone" class="text-warning fs-4"></iconify-icon>
                </div>
                <h4 class="fw-bold mb-2">85 / 100 GB</h4>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-warning" style="width: 85%"></div>
                </div>
                <small class="text-muted mt-2 d-block text-warning fw-semibold">Action Required Soon</small>
            </div>
        </div>
    </div>

    <!-- ROW 2: Core Operations & Maintenance Mode -->
    <div class="row g-4 mb-4">

        <!-- Left Side: Operations Tabs -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-bottom-0 pt-4 px-4 pb-0">
                    <ul class="nav nav-pills border-bottom pb-3 gap-2" id="operationTabs">
                        <li class="nav-item">
                            <a class="nav-link active bg-primary-subtle text-primary fw-semibold rounded-pill px-4" data-bs-toggle="tab" href="#cache">Caches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-semibold rounded-pill px-4 hover-bg" data-bs-toggle="tab" href="#queues">Queues & Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary fw-semibold rounded-pill px-4 hover-bg" data-bs-toggle="tab" href="#database">Database</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-4 tab-content">

                    <!-- Tab: Caches -->
                    <div class="tab-pane fade show active" id="cache">
                        <p class="text-muted small mb-3">Clear application caches to resolve UI or configuration issues.</p>
                        <form method="POST" action="{{ route('superadmin.maintenance.clear') }}">
                            @csrf
                            <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-3 border rounded-3 hover-shadow transition-all mb-2">
                                <span class="fw-bold text-dark"><iconify-icon icon="solar:magic-stick-3-bold-duotone" class="text-primary fs-4 me-2 align-middle"></iconify-icon> Optimize & Clear All Caches</span>
                                <span class="badge bg-primary-subtle text-primary rounded-pill">Recommended</span>
                            </button>
                        </form>
                        <form method="POST" action="{{ route('superadmin.maintenance.purge.laravel_log') }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-3 border rounded-3 hover-shadow transition-all">
                                <span class="fw-bold text-dark"><iconify-icon icon="solar:file-remove-bold-duotone" class="text-danger fs-4 me-2 align-middle"></iconify-icon> Purge System Logs (laravel.log)</span>
                                <span class="badge bg-danger-subtle text-danger rounded-pill">Frees ~10MB</span>
                            </button>
                        </form>
                    </div>

                    <!-- Tab: Queues -->
                    <div class="tab-pane fade" id="queues">
                        <p class="text-muted small mb-3">Manage background workers for emails, syncs, and heavy tasks.</p>
                        <form method="POST" action="{{ route('superadmin.maintenance.queue.restart') }}">
                            @csrf
                            <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-3 border rounded-3 hover-shadow transition-all mb-2">
                                <span class="fw-bold text-dark"><iconify-icon icon="solar:restart-circle-bold-duotone" class="text-info fs-4 me-2 align-middle"></iconify-icon> Graceful Queue Restart</span>
                                <span class="text-muted small">Applies new code to workers</span>
                            </button>
                        </form>
                        <!-- Future Feature Mockup -->
                        <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-3 border rounded-3 hover-shadow transition-all" disabled>
                            <span class="fw-bold text-dark opacity-50"><iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="text-secondary fs-4 me-2 align-middle"></iconify-icon> Flush Failed Jobs</span>
                            <span class="badge bg-secondary text-white rounded-pill">Coming Soon</span>
                        </button>
                    </div>

                    <!-- Tab: Database -->
                    <div class="tab-pane fade" id="database">
                        <p class="text-muted small mb-3">Database maintenance and backup controls.</p>
                        <!-- Future Feature Mockup -->
                        <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-3 border rounded-3 hover-shadow transition-all mb-2" disabled>
                            <span class="fw-bold text-dark opacity-50"><iconify-icon icon="solar:cloud-download-bold-duotone" class="text-success fs-4 me-2 align-middle"></iconify-icon> Generate Manual Backup</span>
                            <span class="badge bg-secondary text-white rounded-pill">Coming Soon</span>
                        </button>
                        <button class="btn btn-light w-100 d-flex justify-content-between align-items-center py-3 border rounded-3 hover-shadow transition-all" disabled>
                            <span class="fw-bold text-dark opacity-50"><iconify-icon icon="solar:database-bold-duotone" class="text-secondary fs-4 me-2 align-middle"></iconify-icon> Optimize Tables</span>
                            <span class="badge bg-secondary text-white rounded-pill">Coming Soon</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Right Side: Maintenance Mode Toggle -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 h-100 @if($isDown) bg-danger-subtle border border-danger border-opacity-25 @endif">
                <div class="card-header bg-transparent border-bottom-0 pt-4 px-4 pb-0">
                    <h5 class="fw-bold text-dark"><iconify-icon icon="solar:shield-warning-bold-duotone" class="text-danger me-2"></iconify-icon>Access Control</h5>
                </div>
                <div class="card-body p-4 d-flex flex-column justify-content-center">

                    @if(!$isDown)
                        <div class="text-center mb-4">
                            <iconify-icon icon="solar:global-bold-duotone" class="text-success" style="font-size: 4rem; opacity: 0.8;"></iconify-icon>
                            <h5 class="fw-bold mt-3">Platform is Live</h5>
                            <p class="text-muted small">All users have access to the ecosystem. Bringing the app down will block all traffic except bypassed users.</p>
                        </div>

                        <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}" class="mt-auto">
                            @csrf
                            <input type="hidden" name="mode" value="down">
                            <div class="mb-3">
                                <label class="form-label text-secondary small fw-bold">SECRET BYPASS TOKEN (OPTIONAL)</label>
                                <input name="secret" type="text" class="form-control rounded-3" placeholder="e.g. dev-access-123">
                                <small class="text-muted" style="font-size: 0.7rem;">Creates a secret URL to bypass the block screen.</small>
                            </div>
                            <button class="btn btn-danger w-100 py-3 fw-bold rounded-pill shadow-sm hover-shadow transition-all">
                                <iconify-icon icon="solar:lock-password-bold-duotone" class="fs-5 me-1 align-middle"></iconify-icon> ENABLE MAINTENANCE MODE
                            </button>
                        </form>
                    @else
                        <div class="text-center mb-4">
                            <iconify-icon icon="solar:lock-keyhole-bold-duotone" class="text-danger" style="font-size: 4rem; opacity: 0.8;"></iconify-icon>
                            <h5 class="fw-bold mt-3 text-danger">Maintenance is Active</h5>
                            <p class="text-danger text-opacity-75 small fw-semibold mb-1">Standard traffic is currently blocked.</p>
                        </div>

                        <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}" class="mt-auto">
                            @csrf
                            <input type="hidden" name="mode" value="up">
                            <button class="btn btn-success w-100 py-3 fw-bold rounded-pill shadow-sm hover-shadow transition-all">
                                <iconify-icon icon="solar:global-bold-duotone" class="fs-5 me-1 align-middle"></iconify-icon> DISABLE MAINTENANCE & GO LIVE
                            </button>
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- ROW 3: Logs & Terminal (Tabbed Interface) -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
        <div class="card-header bg-dark border-bottom-0 p-0">
            <ul class="nav nav-tabs border-0" id="logTabs">
                <li class="nav-item">
                    <a class="nav-link active bg-dark text-white border-0 py-3 px-4 fw-semibold rounded-0" data-bs-toggle="tab" href="#auditLogs">
                        <iconify-icon icon="solar:history-bold-duotone" class="me-2 text-primary"></iconify-icon> Audit Trail
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-dark text-secondary border-0 py-3 px-4 fw-semibold rounded-0 hover-text-white" data-bs-toggle="tab" href="#terminalLogs">
                        <iconify-icon icon="solar:code-square-bold-duotone" class="me-2 text-success"></iconify-icon> Server Terminal
                    </a>
                </li>
            </ul>
        </div>

        <div class="card-body p-0 tab-content bg-white">

            <!-- Audit Trail Table Tab -->
            <div class="tab-pane fade show active" id="auditLogs">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 border-top">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4 text-secondary small text-uppercase py-3">Time</th>
                                <th class="text-secondary small text-uppercase py-3">Admin</th>
                                <th class="text-secondary small text-uppercase py-3">Action</th>
                                <th class="text-secondary small text-uppercase py-3 pe-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($logs as $log)
                                <tr>
                                    <td class="ps-4 py-3">
                                        <span class="fw-semibold text-dark">{{ $log->created_at->format('M d, H:i') }}</span>
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($log->user->username ?? 'Sys') }}&background=random" width="28" height="28" class="rounded-circle">
                                            <span class="fw-medium">{{ $log->user->username ?? 'System' }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3">
                                        <span class="text-secondary fw-medium">{{ str_replace('_', ' ', Str::title($log->action)) }}</span>
                                        <div class="text-muted small mt-1" style="font-size: 0.75rem; max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $log->message }}</div>
                                    </td>
                                    <td class="pe-4 py-3">
                                        @if($log->status === 'success')
                                            <span class="badge bg-success-subtle text-success px-2 py-1 rounded-pill">Success</span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger px-2 py-1 rounded-pill">Error</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-secondary">
                                        <iconify-icon icon="solar:ghost-smile-bold-duotone" class="fs-1 text-muted mb-3 d-block"></iconify-icon>
                                        No maintenance activities recorded yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="bg-light border-top d-flex justify-content-center py-3">
                    {{ $logs->links() }}
                </div>
            </div>

            <!-- Terminal View Tab -->
            <div class="tab-pane fade bg-dark" id="terminalLogs">
                <div class="p-3 border-bottom border-secondary d-flex justify-content-between align-items-center">
                    <span class="text-secondary font-monospace small">path: storage/logs/laravel.log</span>
                    <span class="badge bg-success text-dark font-monospace">TAIL ACTIVE</span>
                </div>
                <pre class="m-0 p-4 text-light font-monospace overflow-auto custom-scrollbar" style="max-height: 500px; font-size: 13px; line-height: 1.6; background-color: #0d1117;">{{ $logPreview ?: 'Log file is clean. No errors found! Ready for incoming connections...' }}</pre>
            </div>

        </div>
    </div>

    <!-- Custom Styles for interactions -->
    <style>
        .hover-bg:hover { background-color: rgba(0,0,0,0.03); }
        .hover-shadow:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.05); transform: translateY(-1px); }
        .hover-text-white:hover { color: #fff !important; }
        .transition-all { transition: all 0.2s ease-in-out; }

        /* Tab Pill active state customization */
        .nav-pills .nav-link.active { background-color: #e0e7ff !important; color: #4F46E5 !important; }

        /* Terminal scrollbar */
        .custom-scrollbar::-webkit-scrollbar { width: 8px; height: 8px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #0d1117; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #30363d; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #484f58; }
    </style>

@endsection

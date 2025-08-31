@extends('superadmin.layouts.app') {{-- use your admin layout --}}

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

        {{-- Quick Actions --}}
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

                {{-- Maintenance Down --}}
                <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}"
                    class="d-flex align-items-center gap-2">
                    @csrf
                    <input type="hidden" name="mode" value="down">
                    <label for="app-down-mode">Bring App Down</label>
                    {{-- <input name="secret" type="text" class="form-control form-control-sm" placeholder="Optional secret"> --}}
                    <button class="btn btn-warning">🚧 Put App DOWN</button>
                </form>

                {{-- Maintenance Up --}}
                <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}"  class="mb-2">
                    @csrf
                    <input type="hidden" name="mode" value="up">
                    <label for="app-up-mode">Bring App Up</label>
                    <button class="btn btn-success">✅ Bring App UP</button>
                </form>

                {{-- Purge laravel.log --}}
                <form method="POST" action="{{ route('superadmin.maintenance.purge.laravel_log') }}"  class="mb-2">
                    @csrf
                    @method('DELETE')
                    <label for="clear-laravel-logs">Clear laravel logs</label>
                    <button class="btn btn-danger">🧹 Clear laravel.log</button>
                </form>
            </div>
        </div>

        {{-- Recent Maintenance Logs --}}
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

        {{-- laravel.log preview --}}
        {{-- <div class="card">
            <div class="card-header"><strong>laravel.log (tail)</strong></div>
            <div class="card-body">
                <pre style="max-height: 360px; overflow: wrap; font-size: 12px; line-height: 1.35;">
                {{ $logPreview }}
                            </pre>
            </div>
        </div> --}}

        <div class="card log-preview">
            <div class="card-header"><strong>laravel.log (tail)</strong></div>
            <div class="card-body">
                <pre >
    {{ $logPreview }}
            </pre>
            </div>
        </div>
    </div>
@endsection

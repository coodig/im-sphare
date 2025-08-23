@extends('layouts.app') {{-- use your admin layout --}}

@section('content')
<div class="container py-4">
    <h1 class="mb-3">Maintenance Panel</h1>

    Flash messages
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    {{-- Quick Actions --}}
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <strong>Actions</strong>
            <span class="badge {{ $isDown ? 'bg-danger' : 'bg-success' }}">
                App: {{ $isDown ? 'DOWN (maintenance mode)' : 'UP' }}
            </span>
        </div>
        <div class="card-body d-flex flex-wrap gap-2">
            <form method="POST" action="{{ route('superadmin.maintenance.clear') }}">
                @csrf
                <button class="btn btn-primary">🔄 Clear All Caches</button>
            </form>

            <form method="POST" action="{{ route('superadmin.maintenance.queue.restart') }}">
                @csrf
                <button class="btn btn-secondary">⏯ Queue Restart</button>
            </form>

            {{-- Maintenance Down --}}
            <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}" class="d-flex align-items-center gap-2">
                @csrf
                <input type="hidden" name="mode" value="down">
                <input name="secret" type="text" class="form-control form-control-sm" placeholder="Optional secret">
                <button class="btn btn-warning">🚧 Put App DOWN</button>
            </form>

            {{-- Maintenance Up --}}
            <form method="POST" action="{{ route('superadmin.maintenance.toggle') }}">
                @csrf
                <input type="hidden" name="mode" value="up">
                <button class="btn btn-success">✅ Bring App UP</button>
            </form>

            {{-- Purge laravel.log --}}
            <form method="POST" action="{{ route('superadmin.maintenance.purge.laravel_log') }}">
                @csrf
                @method('DELETE')
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
                                <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>{{ $log->user->name ?? 'N/A' }} (#{{ $log->user_id ?? '—' }})</td>
                                <td>{{ $log->action }}</td>
                                <td>
                                    <span class="badge {{ $log->status === 'success' ? 'bg-success' : 'bg-danger' }}">
                                        {{ $log->status }}
                                    </span>
                                </td>
                                <td style="max-width: 520px; white-space: pre-wrap;">{{ $log->message }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="text-center p-3">No actions yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- laravel.log preview --}}
    <div class="card">
        <div class="card-header"><strong>laravel.log (tail)</strong></div>
        <div class="card-body">
            <pre style="max-height: 360px; overflow: auto; font-size: 12px; line-height: 1.35;">
{{ $logPreview }}
            </pre>
        </div>
    </div>
</div>
@endsection

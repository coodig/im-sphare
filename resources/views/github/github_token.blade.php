{{-- resources/views/github/simple-token.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="settings-section">
        <h3>🔑 Enter GitHub Token</h3>

        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <form action="{{ route('repos.index') }}" method="POST">
            @csrf
            <label for="token">Personal Access Token (PAT)</label>
            <input type="text" id="token" name="token" required>
            <button type="submit">Fetch Repos</button>
        </form>
    </div>
@endsection

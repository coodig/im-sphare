{{-- resources/views/github/simple-token.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="settings-section">
        <h3>🔑 Enter GitHub Token</h3>

        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <form action="{{ route('github.token.store')}}" method="POST">
            @csrf
            <input type="text" name="token" placeholder="Enter GitHub PAT" required>
            <button type="submit">Save Token</button>
        </form>
    </div>
@endsection

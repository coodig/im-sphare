{{-- resources/views/github/simple-token.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="github-token-form">
        <div>

            <h3><span><iconify-icon icon="fluent-emoji:key"></iconify-icon></span>GitHub Token</h3>
        </div>

        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('github.token.store')}}" method="POST">
            @csrf
            <input type="text" name="token" placeholder="Enter GitHub PAT" required value="{{$token ?? ''}}">
            {{-- @if(!$token) --}}
            <button type="submit">Add Token</button>
            {{-- @else --}}
            {{-- <button type="submit">Update Token</button> --}}
            {{-- @endif --}}
        </form>
        @if ($token)
            <p>Saved Token: {{ Str::limit($token,10)}}...</p>
        @endif
    </div>
@endsection

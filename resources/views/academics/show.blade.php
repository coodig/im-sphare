@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-name">
        <h4>Academics</h4>
    </div>
    <div class="edit-btn">
        <a href="{{route('academics.edit',['username'=>Auth::user()->username])}}">Edit</a>
    </div>

</div>

@endsection

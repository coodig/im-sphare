@extends('layouts.app')

@section('content')
<div class="dashboard-container">

    <div class="dashboard-header">

    @guest
        Welcome guys this IMSphare world where you will learn about the best of the world.
    @endguest
    @auth
        <h2>Welcome {{ ucfirst(Auth::user()->name)}}</h2>
        <p>This is your home page which you can share anyone</p>

    @endauth
    </div>

</div>
    @endsection

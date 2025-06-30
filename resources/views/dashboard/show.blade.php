@extends('layouts.app')

@section('content')
<div class="dashboard-container">

    <div class="page-name">
        <h2>Welcome to IMSPhare Dashboard show page</h2>
        <p>Manage your projects, repositories, and activities.</p>
    </div>

    <div class="card-grid">
        <div class="card">
            <h5>Total Projects</h5>
            <p class="big-number">12</p>
        </div>
        <div class="card">
            <h5>Total Repositories</h5>
            <p class="big-number">24</p>
        </div>
        <div class="card">
            <h5>Team Members</h5>
            <p class="big-number">5</p>
        </div>
        <div class="card">
            <h5>Total Projects</h5>
            <p class="big-number">12</p>
        </div>
    </div>
</div>
    @endsection

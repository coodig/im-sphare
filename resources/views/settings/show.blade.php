@extends('layouts.app')

@section('content')
<div class="dashboard-container">

    <div class="dashboard-header">
        <h2>Settings</h2>
        {{-- <p>Manage your Settings here.</p> --}}
    </div>



    <div class="setting-container">
<div class="setting-theme">
       <h3>Select Theme</h3>
<div class="dropdown">
    <select name="theme" id="theme" class="form-select">
        <option value="dark">Dark</option>
        <option value="light">Light</option>
        <option value="system">System</option>
    </select>
</div>


    </div>
        <div class="api-token">
            <h3>Your Api token</h3>
            <input type="text" placeholder="Github API Token">
        </div>

        <div class="notification">
            <h3>Manage Notification</h3>

        </div>
    </div>



</div>
    @endsection

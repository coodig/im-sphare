@extends('layouts.app')

@section('content')

    <div class="settings_container">

        <div>
            <span class="btn-edit" ><a class="btn-edit" href="{{route('settings.edit', ['username' => Auth::user()->username])}}">Edit</a></span>
        </div>
         <a class="btn-edit" id="edit-profile" href={{route('profile.edit', ['username' => Auth::user()->username])}}><button>

                        Edit profile
                    </button></a>

        <h2 class="settings-title"><iconify-icon icon="mdi:account-cog"></iconify-icon>Account Settings</h2>

        <div class="settings-section">
            <h3>Peronal Info</h3>
            <div class="form_element">
                <label for="name">Full Name</label>
                <p id="name" name="name" class="name">{{Auth::user()->profile->name ?? 'not available'}}</p>

            </div>
            <div class="form_element">
                <label for="email">Email Address</label>
                <p id="email" name="email" class="email">{{Auth::user()->email}}</p>
            </div>
            @auth
                <div class="form_element">
                    <label for="phone">Phone Number</label>
                    <p id="phone" name="phone" class="phone">{{ Auth::user()->contact->phone ?? 'not available'}}</p>
                </div>
            @endauth
        </div>

        {{-- Theme Settings --}}
        <div class="settings-section">
            <h3>Appearance</h3>

            <div class="form_element">
                <label for="theme">Theme</label>
                <select id="theme" name="theme" onchange="toggleTheme(this.value)">
                    <option value="light" selected>Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>
        </div>

        {{-- Notification Preferences --}}
        {{-- <div class="settings-section">
            <h3>Notification Preferences</h3>
            <form action="#" method="POST" class="settings-form">
                @csrf
                @method('PUT')

                <div class="notification-toggle">
                    <label for="email_notif">Email Notifications</label>
                    <input type="checkbox" id="email_notif" name="email_notif" checked>
                </div>

                <div class="notification-toggle">
                    <label for="push_notif">Push Notifications</label>
                    <input type="checkbox" id="push_notif" name="push_notif">
                </div>

                <div class="notification-toggle">
                    <label for="follower_alert">New Follower Alerts</label>
                    <input type="checkbox" id="follower_alert" name="follower_alert" checked>
                </div>

                <div class="notification-toggle">
                    <label for="repo_activity">Project Stars/Comments</label>
                    <input type="checkbox" id="repo_activity" name="repo_activity">
                </div>

                <hr>
                <button type="submit">Save Preferences</button>
            </form>
        </div> --}}

        {{-- @auth --}}
        {{-- Login History --}}
        {{-- <div class="settings-section"> --}}
            {{-- <h3>Login Activity</h3> --}}
            {{-- <table class="activity-log-table"> --}}
                {{-- <thead> --}}
                    {{-- <tr> --}}
                        {{-- <th>Date</th> --}}
                        {{-- <th>Time</th> --}}
                        {{-- <th>IP</th> --}}
                        {{-- <th>Browser</th> --}}
                        {{-- <th>Device</th> --}}
                        {{-- </tr> --}}
                    {{-- </thead> --}}
                {{-- <tbody> --}}
                    {{-- @foreach($loginActivities as $activity) --}}
                    {{-- <tr> --}}
                        {{-- <td>{{ $activity->logged_in_at->format('Y-m-d') }}</td> --}}
                        {{-- <td>{{ $activity->logged_in_at->format('h:i A') }}</td> --}}
                        {{-- <td>{{ $activity->ip_address }}</td> --}}
                        {{-- <td>{{ $activity->browser }}</td> --}}
                        {{-- <td>{{ $activity->device }}</td> --}}
                        {{-- <td>$activity->device</td> --}}
                        {{-- <td>$activity->device</td> --}}
                        {{-- <td>$activity->device</td> --}}
                        {{-- <td>$activity->device</td> --}}
                        {{-- <td>$activity->device</td> --}}
                        {{-- </tr> --}}
                    {{-- @endforeach --}}
                    {{-- </tbody> --}}
                {{-- </table> --}}
            {{-- </div> --}}
        {{-- @endauth --}}

        {{-- Danger Zone --}}
        <div class="settings-section danger-zone">
            <h3>Danger Zone</h3>

            @auth
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <iconify-icon icon="line-md:log-out"></iconify-icon>
                        <span>Logout</span></button>
                </form>
            @endauth
        </div>
    </div>

@endsection

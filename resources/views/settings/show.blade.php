@extends('layouts.app')

@section('content')

    <div class="settings_container">

        <h2 class="settings-title"><iconify-icon icon="mdi:account-cog"></iconify-icon>Account Settings</h2>

        {{-- Basic Info --}}
        <h3>Peronal Info</h3>
        <div class="settings-section">
            <div>
                <span><a href="{{route('settings.edit', ['username' => Auth::user()->username])}}">Edit</a></span>
            </div>


            {{-- <form action="#" method="POST" class="settings-form"> --}}
                {{-- @csrf --}}
                {{-- @method('PUT') --}}
                <div class="form_element">
                    <label for="name">Full Name</label>
                    {{-- <input type="text" id="name" name="name" required value="{{ucfirst(Auth::user()->name)}}" readonly>
                    --}}
                    <p id="name" name="name" class="name">{{Auth::user()->name ?? 'not available'}}</p>

                </div>
                <div class="form_element">
                    <label for="email">Email Address</label>
                    {{-- <input type="email" id="email" name="email" value="{{Auth::user()->email}}" required readonly> --}}
                    <p id="email" name="email" class="email">{{Auth::user()->email}}</p>
                </div>
                @auth
                    <div class="form_element">
                        <label for="phone">Phone Number</label>
                        {{-- <input type="text" id="phone" name="phone" value="{{ Auth::user()->contact->phone ?? ''}}"
                            readonly> --}}
                        <p id="phone" name="phone" class="phone">{{ Auth::user()->contact->phone ?? 'not available'}}</p>
                    </div>
                @endauth

                {{-- <button type="submit">Save Changes</button> --}}
                {{--
            </form> --}}
        </div>

        {{-- Change Password --}}
        {{-- <div class="settings-section"> --}}
            {{-- <h3>Change Password</h3> --}}
            {{-- <form action="#" method="POST" class="settings-form"> --}}
                {{-- @csrf --}}
                {{-- @method('PUT') --}}

                {{-- <div class="form_element">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" required>
                </div> --}}

                {{-- <div class="form_element">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div> --}}

                {{-- <div class="form_element">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div> --}}

                {{-- <button type="submit">Update Password</button> --}}
                {{-- </form> --}}
            {{-- </div> --}}

        {{-- <div class="settings-section">
            <h3>Location</h3>

            <div class="form_element">
                <label>Get Location</label>
                <button type="button" onclick="getGeolocation()">Get My Location</button>
                <p id="locationDisplay" style="margin-top: 8px; color: var(--text-color); font-size: 0.9rem;">
                </p>
            </div>
        </div> --}}


        {{-- <div class="settings-section">
            <h3>Privacy & Security</h3>

            <form action="{{ route('privacy.update') }}" method="POST" class="settings-form">
                @csrf

                <div class="form_element">
                    <label for="privacy_level_id">Profile Visibility</label>
                    <select id="privacy_level_id" name="privacy_level_id">
                        @foreach(\App\Models\PrivacyLevel::all() as $level)
                        <option value="{{ $level->id }}" {{ auth()->user()->profile->privacy_level_id == $level->id ?
                            'selected' : '' }}>
                            {{ $level->label }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit">Update Privacy</button>
            </form>
        </div> --}}

        {{-- Privacy Settings --}}
        {{-- <div class="settings-section">
            <h3>Privacy & Security</h3> --}}
            {{-- <form action="#" method="POST" class="settings-form"> --}}
                {{-- @csrf --}}
                {{-- @method('PUT') --}}

                {{-- <div class="form_element">
                    <label for="visibility">Profile Visibility</label>
                    <select id="visibility" name="visibility">
                        <option value="public" selected>Public</option>
                        <option value="private">Private</option>
                        <option value="friends">Friends Only</option>
                    </select>
                </div> --}}

                {{-- <div class="form-element">
                    <label for="two_fa">Two-Factor Authentication (2FA)</label>
                    <select id="two_fa" name="two_fa">
                        <option value="enabled" selected>Enabled</option>
                        <option value="disabled">Disabled</option>
                    </select>
                </div> --}}

                {{-- <button type="submit">Update Privacy</button> --}}
                {{--
            </form> --}}
            {{--
        </div> --}}

        {{-- Theme Settings --}}
        <div class="settings-section">
            <h3>Appearance</h3>

            {{-- <form action="#" method="POST" class="settings-form"> --}}
                {{-- @csrf --}}
                {{-- @method('PUT') --}}

                <div class="form_element">
                    <label for="theme">Theme</label>
                    <select id="theme" name="theme" onchange="toggleTheme(this.value)">
                        <option value="light" selected>Light</option>
                        <option value="dark">Dark</option>
                    </select>
                </div>

                {{-- <button type="submit">Apply Theme</button> --}}
                {{--
            </form> --}}
        </div>

        {{-- Connected Apps --}}
        {{-- <div class="settings-section">
            <h3>Connected APIs</h3>
            <ul class="connected-apps-list">
                <li>
                    <span>GitHub</span>
                    <button type="button" class="btn-disconnect">Disconnect</button>
                </li> --}}
                {{-- <li>
                    <span>Google</span>
                    <button type="button" class="btn-connect">Connect</button>
                </li> --}}
                {{-- <li>
                    <span>LinkedIn</span>
                    <button type="button" class="btn-connect">Connect</button>
                </li> --}}
                {{--
            </ul> --}}
            {{--
        </div> --}}

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

        {{-- Location --}}
        {{-- <div class="settings-section">
            <h3>Location Settings</h3>
            <form action="#" method="POST" class="settings-form">
                @csrf
                @method('PUT')

                <label for="location">Your Current Location</label>
                <input type="text" id="location" name="location" value="Lucknow, India">

                <label>
                    <input type="checkbox" name="auto_detect" checked>
                    Auto-detect location from IP
                </label>

                <button type="submit">Update Location</button>
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

        {{-- Public API Key --}}
        {{-- @auth
            <div class="settings-section">
                <h3>Git Hub PAT Token</h3>

                @foreach ($pat_token as $token)
                    <div class="api-key-box">
                        <code
                        id="apiKeyBox">{{$token->github_token}}</code>
                        <button type="button" onclick="copyAPIKey()"><iconify-icon
                                icon="solar:copy-bold-duotone"></iconify-icon></button>
                    </div>
                @endforeach

                <form action="#" method="POST" style="margin-top: 15px;">
                    @csrf
                    <button type="submit" class="btn-generate-key">Regenerate API Key</button>
                </form>
            </div>
        @endauth --}}

        {{-- Danger Zone --}}
        <div class="settings-section danger-zone">
            <h3>Danger Zone</h3>

            {{-- <form action="{{ route('logout') }}" method="POST"> --}}

                @auth
                    {{-- <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-btn red">
                            <iconify-icon icon="line-md:log-out"></iconify-icon>
                            <span class="sidebar-text">Logout</span>
                        </button>
                    </form> --}}
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn-logout">
                            <iconify-icon icon="line-md:log-out"></iconify-icon>
                            <span>Logout</span></button>
                    </form>
                @endauth

                {{-- <form action="{{ route('account.destroy') }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                    --}}

                    {{-- <form action="#" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete-account"><iconify-icon
                                icon="ic:twotone-delete"></iconify-icon>Delete Account</button>
                    </form> --}}
        </div>
    </div>

@endsection

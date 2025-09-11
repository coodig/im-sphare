@extends('layouts.app')

@section('content')

    <div class="settings_container">

        <div class="back-btn"><a href="{{url()->previous()}}">Back</a></div>
        <div class="page-name">
            <h2>Account Settings</h2>
        </div>

        <div class="settings-section">
            <div>
                <h3>Basic Information</h3>
            </div>

            <form action="" method="POST" class="settings-form">
                @csrf
                @method('PUT')
                <div class="form_element">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ Auth::user()->profile->name ?? ''}}">
                </div>
                <div class="form_element">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" value="{{ Auth::user()->contact->phone ?? ''}}">
                </div>

                <button type="submit">Save Changes</button>
            </form>
        </div>

        {{-- Change Password --}}
        {{-- <div class="settings-section">
            <h3>Change Password</h3>
            <form action="#" method="POST" class="settings-form">
                @csrf
                @method('PUT')

                <div class="form_element">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" required>
                </div>

                <div class="form_element">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" required>
                </div>

                <div class="form_element">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <button type="submit">Update Password</button>
            </form>
        </div> --}}


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

                {{-- <form action="{{ route('account.destroy') }}" method="POST" --}}
                    {{-- onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');"> --}}

                    {{-- <form action="#" method="POST" --}}
                        {{-- onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');"> --}}
                        {{-- @csrf --}}
                        {{-- @method('DELETE') --}}
                        <button type="submit" class="btn-delete-account"><iconify-icon
                                icon="ic:twotone-delete"></iconify-icon>Delete Account</button>
                    {{-- </form> --}}
        </div>
    </div>

@endsection

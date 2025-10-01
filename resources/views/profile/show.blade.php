@extends('layouts.app')

@section('content')

    <div class="profile_detail_container">

        <div class="user_profile_section">
            <h2 class="page-name">Profile</h2>
            <div class="profile-media">
                <div class="profile-banner">

                    <form action="{{route('profile-banner', ['username' => Auth::user()->username])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile-banner" id="profile-banner" accept="image/*" hidden>
                        <label for="profile-banner" style="cursor: pointer;">
                            <img src="{{asset('asset/img/profile-banner.jpeg')}}" alt="profile-banner">
                        </label>
                    </form>

                </div>

                <div class="profile-image">

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="profile-img" id="profile-img" accept="image/*" hidden>

                        <label for="profile-img" style="cursor: pointer; object-fit: cover;">
                            <img src="{{ asset('asset/img/about.jpg') }}" alt="Profile Image">
                        </label>
                    </form>

{{-- <div class="preview-image" id="preview-image" style="height: 300px;wi
400px; "></div> --}}
                </div>
            </div>

            <div class="name" id="name">
                <p>{{ ucwords(optional(Auth::user()->profile)->name) ?? '' }}</p>

            </div>
            <div class="username" id="username">
                <p>{{"@ " . Auth::user()->username ?? ''}}</p>
            </div>


            <div class="profile-stats">
                <div class="stat-item" id="projects">
                    <a href="{{route('repos.index', ['username' => Auth::user()->username])}}">
                        <span class="stat-count">{{Auth::user()->repos()->count()}}</span>
                        <span class="stat-label">Projects</span>
                    </a>
                </div>
                <div class="stat-item" id="followers">
                    <a href="{{route('followers', ['username' => Auth::user()->username])}}">
                        <span class="stat-count">{{Auth::user()->followers()->count()}}</span>
                        <span class="stat-label">Followers</span>
                    </a>
                </div>
            </div>

            <p class="email"></iconify-icon>&nbsp;{{
        Auth::user()->email}}
            </p>

            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->bio) ?? ''}}</p>
            </div>
            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->gender) ?? ''}}</p>
            </div>
            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->location) ?? ''}}</p>
            </div>
            <div class="bio" id="bio">
                <p>{{ucfirst(optional(Auth::user()->profile)->dob) ?? ''}}</p>
            </div>

            <div class="profile-actions">
                <a class="btn-edit" id="edit-profile" href={{route('profile.edit', ['username' => Auth::user()->username])}}><button>

                        Edit profile
                    </button></a>
            </div>



        </div>
    </div>
@endsection

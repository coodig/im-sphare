@extends('layouts.app')

@section('content')

    <div class="profile_detail_container">

        <div class="user_profile_section">
            <h2 class="page-name">Profile</h2>
            <div class="profile-banner" id="profile-banner">
                <img src="{{asset('asset/js/about.jpg')}}" alt="">

                <div class="profile-image" id="profile-image">
                    <img src="{{asset('asset/js/about.jpg')}}" alt="">
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
                {{-- <div class="stat-item" id="following">
                    <span class="stat-count">80</span>
                    <span class="stat-label">Following</span>
                </div> --}}
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
                {{-- <a class="btn-edit" id="edit-profile" href={{route('profile.edit', ['username' => Auth::user()->username])}}><button>

                        Edit profile
                    </button></a> --}}
                {{-- <button class="btn-share" id="share-profile">Share profile</button> --}}
            </div>



        </div>
    </div>
    {{-- </div> --}}
@endsection









































































{{--
<div class="profile-header"> --}}


    {{-- <p class="bio"><iconify-icon icon="streamline-plump-color:description-flat"></iconify-icon>&nbsp;{{
        ucfirst(Auth::user()->profile->bio ?? 'not available')}}
    </p>

    @auth
    <a href="{{route('profile.edit', ['username' => Auth::user()->username]) }}">
        <button class="profile-info-update-btn">Edit</button>
    </a>
    @endauth --}}
    {{-- <a href="{{route('profile.edit', ['username' => Auth::user()->username])}}">Edit</a> --}}
    {{--
</div>
</div> --}}

{{-- <div class="profile-stats">
    <div class="stat-box"><iconify-icon icon="solar:folder-bold-duotone"></iconify-icon> Projects:
        <strong>12</strong>
    </div>
    <div class="stat-box"><iconify-icon icon="solar:star-bold-duotone"></iconify-icon>Stars:
        <strong>120</strong>
    </div>
    <div class="stat-box"><iconify-icon icon="gravity-ui:eyes-look-left"></iconify-icon> Views:
        <strong>450</strong>
    </div>
    <div class="stat-box"><iconify-icon icon="uim:clock"></iconify-icon> Last Active: <strong>2 hours
            ago</strong></div>
</div> --}}

{{-- <div class="profile-details">

    <h3><iconify-icon icon="tdesign:education-filled"></iconify-icon> Education</h3>
    <ul class="education-list">
        <p>btech in Computer Science</p>
        <p>btech in Computer Science</p>
        <p>btech in Computer Science</p>
    </ul>

    <h3>💼 Skills</h3>
    <ul class="skills-list">
        <li>Laravel</li>
        <li>JavaScript</li>
        <li>React</li>
        <li>Python</li>
        <li>AI/ML</li>
    </ul>

    <h3>🌐 Social Links</h3>
    <ul class="social-links">
        <li><a href="#"><iconify-icon icon="uim:github"></iconify-icon>GitHub</a></li>
        <li><a href="#"><iconify-icon icon="uim:github"></iconify-icon>GitHub</a></li>
        <li><a href="#"><iconify-icon icon="uim:github"></iconify-icon>GitHub</a></li>
        <li><a href="#">LinkedIn</a></li>
        <li><a href="#">Portfolio</a></li>
    </ul>

</div> --}}

{{-- <div class="profile-picture-wrapper">
    <img src="{{ asset('asset/img/about.jpg') }}" alt="User Picture" id="profileImage" class="profile-image"
        style="width:150px; height:150px; object-fit: cover; border-radius:50%;"> --}}

    {{-- <img src="{{ asset('asset/img/about.jpg') }}" alt="User Picture" id="profileImage" class="profile-image"> --}}
    {{-- <label for="avatarUpload" class="edit-icon">
        <iconify-icon icon="ph:pencil-simple-bold"></iconify-icon>
    </label>
    <input type="file" name="avatar" id="avatarUpload" class="avatar-input" onchange="previewImage(event)">
</div>
<script>

    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('profileImage');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script> --}}

{{-- Social Media Links --}}
{{-- <h3 class="section-title">🌐 Social Links</h3> --}}
{{-- <button {{ route('social_link.edit', ['id'=>1]) }}>edit</button> --}}

{{-- <div class="social-links">
    @if($socialMediaLink->count())
    <ul class="social-list">
        @foreach($socialMediaLink as $link)
        <div class="social_link_line">
            <li class="social-item">
                <span class="platform-name">{{ ucfirst($link->plateform) }}</span>
                </a>

                <a class="url" href="{{ $link->social_url }}" target="_blank" rel="noopener">
                    {{ $link->social_url }}
                </a>
            </li>
        </div>
        @endforeach
    </ul>
    @else
    <p class="no-links">No social media links added yet.</p>
    @endif
</div> --}}

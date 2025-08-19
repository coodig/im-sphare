@extends('layouts.app')

@section('content')

    <div class="profile_detail_container">

        {{-- Profile Section --}}
        <div class="user_profile_section">

            <div class="profile-header">
                <div class="profile-picture">
                    <img src="{{ asset('asset/img/about.jpg') }}" alt="User Picture" id="profileImage">
                </div>
                <div class="profile-info">
                    <h2 id="profileName">{{ ucwords(Auth::user()->profile->name ?? 'not available')}}</h2>

                    {{-- <p class="username">{{ "@".Auth::user()->profile->username ?? 'not available'}}</p> --}}
                    <p class="username"><iconify-icon icon="fa-solid:user"></iconify-icon>&nbsp;
                        {{ optional(Auth::user())->username ? optional(Auth::user())->username : 'not available' }}
                    </p>

                    {{-- @php
                    $username = optional(Auth::user()->profile)->username;
                    @endphp --}}

                    {{-- <p class="username">
                        {{ $username ? '@' . $username : 'not available' }}
                    </p> --}}

                    {{-- <label for="email">Email</label> --}}
                    <p class="email"><iconify-icon icon="line-md:email-alt-twotone"></iconify-icon>&nbsp;{{ Auth::user()->email}}</p>
                    {{-- <p class="email">{{ (Auth::user()->profile->full_name ?? 'not available')}}</p> --}}
                    <p class="bio"><iconify-icon icon="streamline-plump-color:description-flat"></iconify-icon>&nbsp;{{ ucfirst(Auth::user()->profile->bio ?? 'not available')}}</p>
                    <p class="location"><iconify-icon icon="fa7-solid:map-location-dot"></iconify-icon>&nbsp;{{ ucwords(Auth::user()->profile->location ?? 'not available')}} </p>
                    <p class="dob"><iconify-icon icon="uiw:date"></iconify-icon>&nbsp;{{ ucwords(Auth::user()->profile->dob ?? 'not available')}} </p>
                    <p class="gender"><iconify-icon icon="streamline-ultimate:gender-hetero-bold"></iconify-icon>&nbsp;{{ ucwords(Auth::user()->profile->gender ?? 'not available')}} </p>
                    <p class="website"><iconify-icon icon="line-md:link"></iconify-icon>&nbsp;<a href="{{ ucwords(Auth::user()->profile->website ?? 'not available')}}" target="_blank">Visit Website &nbsp;<iconify-icon icon="line-md:external-link"></iconify-icon></p>

                    @auth
                        <a href="{{route('profile.edit', ['username' => Auth::user()->username]) }}">
                            <button class="profile-info-update-btn">Edit</button>
                        </a>
                    @endauth
                    {{-- <a href="{{route('profile.edit', ['username' => Auth::user()->username])}}">Edit</a> --}}
                </div>
            </div>

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



            {{-- Social Media Links --}}
            <h3 class="section-title">🌐 Social Links</h3>
            {{-- <button {{ route('social_link.edit', ['id'=>1]) }}>edit</button> --}}

            <div class="social-links">
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
            </div>



        </div>
    </div>

@endsection

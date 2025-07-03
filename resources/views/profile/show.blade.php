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
                <h2 id="profileName">Adarsh Sharma</h2>
                <p class="username">@adarsh_dev</p>
                <p class="bio">A passionate Computer Science student working on AI, Laravel, and gesture-control tech.</p>
                <p class="location"><iconify-icon icon = "stash:location-duotone"></iconify-icon> Lucknow, India</p>
            </div>
        </div>

        <div class="profile-stats">
            <div class="stat-box"><iconify-icon icon = "solar:folder-bold-duotone"></iconify-icon> Projects: <strong>12</strong></div>
            <div class="stat-box"><iconify-icon icon="solar:star-bold-duotone"></iconify-icon>Stars: <strong>120</strong></div>
            <div class="stat-box"><iconify-icon icon = "gravity-ui:eyes-look-left"></iconify-icon> Views: <strong>450</strong></div>
            <div class="stat-box"><iconify-icon icon = "uim:clock"></iconify-icon> Last Active: <strong>2 hours ago</strong></div>
        </div>

        <div class="profile-details">

            <h3><iconify-icon icon = "tdesign:education-filled"></iconify-icon> Education</h3>
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
                <li><a href="#"><iconify-icon icon = "uim:github"></iconify-icon>GitHub</a></li>
                <li><a href="#"><iconify-icon icon = "uim:github"></iconify-icon>GitHub</a></li>
                <li><a href="#"><iconify-icon icon = "uim:github"></iconify-icon>GitHub</a></li>
                {{-- <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Portfolio</a></li> --}}
            </ul>

        </div>

        <div class="profile-footer">
            <p>👋 Want to update your profile info? Visit your <a href="#">Edit Profile</a> page.</p>
        </div>

    </div>
</div>

@endsection


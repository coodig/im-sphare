@extends('layouts.app')

@section('content')

    <div class="profile_detail_container">

        {{-- Profile Section --}}
        <div class="user_profile_section">

            <div class="profile-header">
                {{-- <div class="profile-picture"> --}}
                    <div class="profile-picture">
                        <img src="{{ asset('asset/img/about.jpg') }}" alt="User Picture" id="profileImage">
                    </div>

                    <div class="profile-info">
                        <form action="{{ route('profile.update', ['username' => Auth::user()->username]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" name="name" value="{{ old('name', Auth::user()->profile->name ?? '') }}"
                                placeholder="Name">

                            <textarea name="bio" placeholder="Bio"
                                class="bio">{{ old('bio', Auth::user()->profile->bio ?? '') }}</textarea>

                            <input type="text" name="location"
                                value="{{ old('location', Auth::user()->profile->location ?? '') }}" placeholder="Location">

                            <input type="date" name="dob" value="{{ old('dob', Auth::user()->profile->dob ?? '') }}">

                            <select name="gender">
                                <option value="" {{ old('gender', Auth::user()->profile->gender ?? 'Not Available') ==
        'Not Available' ? 'selected' : '' }}>
                                    Not Available
                                </option>
                                <option value="male" {{ old('gender', optional(Auth::user()->profile)->gender) == 'male' ? 'selected' : '' }}>
                                    Male
                                </option>
                                <option value="female" {{ old('gender', optional(Auth::user()->profile)->gender) == 'female' ? 'selected' : '' }}>
                                    Female
                                </option>

                                <option value="other" {{ old('gender', optional(Auth::user()->profile)->gender) == 'other' ? 'selected' : '' }}>
                                    Other
                                </option>

                            </select>

                            <input type="url" name="website"
                                value="{{ old('website', Auth::user()->profile->website ?? '') }}"
                                placeholder="Your Website URL">

                            {{-- <input type="file" name="avatar"> --}}

                            <button class="profile-info-update-btn" type="submit">Update</button>
                        </form>
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

                    <iconify-icon icon="mdi:account-group"></iconify-icon>
                    <h3>Skills</h3>
                    <ul class="skills-list">
                        <li>Laravel</li>
                        <li>JavaScript</li>
                        <li>React</li>
                        <li>Python</li>
                        <li>AI/ML</li>
                    </ul>

                    <h3>
                        <iconify-icon icon="mdi:cog-outline"></iconify-icon>
                        Technical skills
                    </h3>
                    <ul class="social-links">
                        <li><a href="#"><iconify-icon icon="uim:github"></iconify-icon>GitHub</a></li>
                        <li><a href="#"><iconify-icon icon="uim:github"></iconify-icon>GitHub</a></li>
                        <li><a href="#"><iconify-icon icon="uim:github"></iconify-icon>GitHub</a></li>
                    </ul>

                </div> --}}

            </div>
        </div>

@endsection

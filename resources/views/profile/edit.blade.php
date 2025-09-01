@extends('layouts.app')

@section('content')
<div class="profile_detail_container">

    <div class="user_profile_section">
        <h2 class="page-name">Update Profile</h2>

        <div class="profile-info">
            <form action="{{ route('profile.update', ['username' => Auth::user()->username]) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name"
                           value="{{ old('name', Auth::user()->profile->name ?? '') }}"
                           placeholder="Name" class="form-input">
                </div>

                <!-- Bio -->
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea id="bio" name="bio" placeholder="Bio"
                              class="form-textarea">{{ old('bio', Auth::user()->profile->bio ?? '') }}</textarea>
                </div>

                <!-- Location -->
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location"
                           value="{{ old('location', Auth::user()->profile->location ?? '') }}"
                           placeholder="Location" class="form-input">
                </div>

                <!-- Date of Birth -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob"
                           value="{{ old('dob', Auth::user()->profile->dob ?? '') }}"
                           class="form-input">
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" class="form-input">
                        <option value=""
                            {{ old('gender', Auth::user()->profile->gender ?? 'Not Available') == 'Not Available' ? 'selected' : '' }}>
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
                </div>

                <!-- Website -->
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" id="website" name="website"
                           value="{{ old('website', Auth::user()->profile->website ?? '') }}"
                           placeholder="Your Website URL" class="form-input">
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
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

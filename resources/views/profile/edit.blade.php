{{-- @extends('layouts.app')

@section('content')
    <div class="profile_detail_container">
        <div class="back-btn"><a href="{{url()->previous()}}">Back</a></div>

        <div class="user_profile_section">
            <h2 class="page-name">Update Profile</h2>

            <div class="profile-info">
                <form action="{{ route('profile.update', ['username' => Auth::user()->username]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name"
                            value="{{ old('name', Auth::user()->profile->name ?? '') }}" placeholder="Name"
                            class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea id="bio" name="bio" placeholder="Bio"
                            class="form-textarea">{{ old('bio', Auth::user()->profile->bio ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location"
                            value="{{ old('location', Auth::user()->profile->location ?? '') }}" placeholder="Location"
                            class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" value="{{ old('dob', Auth::user()->profile->dob ?? '') }}"
                            class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-input">
                            <option value="" {{ old('gender', Auth::user()->profile->gender ?? 'Not Available') == 'Not Available' ? 'selected' : '' }}>
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

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" id="website" name="website"
                            value="{{ old('website', Auth::user()->profile->website ?? '') }}"
                            placeholder="Your Website URL" class="form-input">
                    </div>

                    <button type="submit" class="btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection --}}





































































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





@extends('layouts.app')

@section('content')

    <div class="flex items-center gap-4 mb-8 animate-fade">
        <a href="{{ url()->previous() }}" class="p-2 rounded-full bg-body border border-custom text-muted hover:text-primary transition-colors">
            <iconify-icon icon="solar:arrow-left-linear" class="text-xl"></iconify-icon>
        </a>
        <div>
            <h1 class="text-3xl font-bold text-text-main">Edit Profile</h1>
            <p class="text-muted text-sm">Update your personal information and public profile.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

        <div class="lg:col-span-1">
            <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 text-center sticky top-24">

                <div class="relative w-32 h-32 mx-auto mb-4">
                    <img src="{{ Auth::user()->profile->avatar_url ?? asset('asset/img/about.jpg') }}"
                         alt="Avatar"
                         class="w-full h-full rounded-full object-cover border-4 border-body shadow-lg">
                    <div class="absolute bottom-0 right-0 p-2 bg-primary text-white rounded-full border-2 border-card flex items-center justify-center">
                        <iconify-icon icon="solar:pen-bold" class="text-sm"></iconify-icon>
                    </div>
                </div>

                <h2 class="text-xl font-bold text-text-main mb-1">
                    {{ ucwords(Auth::user()->profile->name ?? Auth::user()->username) }}
                </h2>
                <p class="text-muted text-sm mb-6">{{ '@' . Auth::user()->username }}</p>

                <div class="p-4 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 text-sm leading-relaxed">
                    <p class="font-bold mb-1 flex items-center justify-center gap-2">
                        <iconify-icon icon="solar:info-circle-bold"></iconify-icon> Note
                    </p>
                    Changes made here will be visible on your public profile immediately.
                </div>
            </div>
        </div>

        <div class="lg:col-span-2">
            <form action="{{ route('profile.update', ['username' => Auth::user()->username]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 mb-8">
                    <h3 class="text-lg font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:user-id-bold-duotone" class="text-primary text-xl"></iconify-icon>
                        Basic Information
                    </h3>

                    <div class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-bold text-text-main mb-2 ml-1">Full Name</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="solar:user-rounded-bold-duotone" class="text-lg"></iconify-icon>
                                </span>
                                <input type="text" id="name" name="name"
                                    value="{{ old('name', Auth::user()->profile->name ?? '') }}"
                                    placeholder="e.g. Adarsh Vishwakarma"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                        <div>
                            <label for="bio" class="block text-sm font-bold text-text-main mb-2 ml-1">Bio / Headline</label>
                            <div class="relative">
                                <span class="absolute left-4 top-4 text-muted">
                                    <iconify-icon icon="solar:text-square-bold-duotone" class="text-lg"></iconify-icon>
                                </span>
                                <textarea id="bio" name="bio" rows="4"
                                    placeholder="Tell us a little about yourself..."
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main resize-none">{{ old('bio', Auth::user()->profile->bio ?? '') }}</textarea>
                            </div>
                            <p class="text-xs text-muted mt-2 ml-1">Brief description for your profile card.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 mb-8">
                    <h3 class="text-lg font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:clipboard-list-bold-duotone" class="text-purple-500 text-xl"></iconify-icon>
                        Personal Details
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="location" class="block text-sm font-bold text-text-main mb-2 ml-1">Location</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="solar:map-point-bold-duotone" class="text-lg"></iconify-icon>
                                </span>
                                <input type="text" id="location" name="location"
                                    value="{{ old('location', Auth::user()->profile->location ?? '') }}"
                                    placeholder="City, Country"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                        <div>
                            <label for="dob" class="block text-sm font-bold text-text-main mb-2 ml-1">Date of Birth</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="solar:calendar-date-bold-duotone" class="text-lg"></iconify-icon>
                                </span>
                                <input type="date" id="dob" name="dob"
                                    value="{{ old('dob', Auth::user()->profile->dob ?? '') }}"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                        <div>
                            <label for="gender" class="block text-sm font-bold text-text-main mb-2 ml-1">Gender</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="text-lg"></iconify-icon>
                                </span>
                                <select id="gender" name="gender"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main appearance-none">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="male" {{ old('gender', optional(Auth::user()->profile)->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', optional(Auth::user()->profile)->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender', optional(Auth::user()->profile)->gender) == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-muted pointer-events-none">
                                    <iconify-icon icon="solar:alt-arrow-down-bold" class="text-sm"></iconify-icon>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="mobile" class="block text-sm font-bold text-text-main mb-2 ml-1">Mobile No.</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="solar:phone-bold-duotone" class="text-lg"></iconify-icon>
                                </span>

                                <input type="tel" id="mobile" name="mobile"
                                    value="{{ old('mobile', Auth::user()->profile->mobile ?? '') }}"
                                    placeholder="+91 00000 00000"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>s
                    </div>
                </div>

                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 mb-8">
                    <h3 class="text-lg font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:globe-bold-duotone" class="text-blue-500 text-xl"></iconify-icon>
                        Online Presence
                    </h3>

                    <div>
                        <label for="website" class="block text-sm font-bold text-text-main mb-2 ml-1">Website / Portfolio URL</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                <iconify-icon icon="solar:link-circle-bold-duotone" class="text-lg"></iconify-icon>
                            </span>
                            <input type="url" id="website" name="website"
                                value="{{ old('website', Auth::user()->profile->website ?? '') }}"
                                placeholder="https://yourwebsite.com"
                                class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4">
                    <a href="{{ url()->previous() }}" class="px-8 py-3.5 rounded-full border border-custom bg-card text-text-main font-bold hover:bg-gray-50 dark:hover:bg-white/5 transition-all">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-3.5 rounded-full bg-primary text-white font-bold shadow-apple hover:bg-primary-hover hover:-translate-y-1 transition-all flex items-center gap-2">
                        <iconify-icon icon="solar:check-circle-bold" class="text-lg"></iconify-icon>
                        Save Changes
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection

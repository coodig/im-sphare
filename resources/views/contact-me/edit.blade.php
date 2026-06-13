{{--
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

@endsection --}}



@extends('layouts.app')

@section('content')

    <div class="flex items-center gap-4 mb-8 animate-fade">
        <a href="{{ url()->previous() }}" class="p-2 rounded-full bg-body border border-custom text-muted hover:text-primary transition-colors">
            <iconify-icon icon="solar:arrow-left-linear" class="text-xl"></iconify-icon>
        </a>
        <div>
            <h1 class="text-3xl font-bold text-text-main">Edit Contact Info</h1>
            <p class="text-muted text-sm">Update your public contact details, maps, and social profiles.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

        {{-- Left Sticky Sidebar --}}
        <div class="lg:col-span-1">
            <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-6 text-center sticky top-24">

                <div class="relative w-32 h-32 mx-auto mb-4 group">
                    <img src="{{ Auth::user()->profile->profile_image ? asset('storage/'.Auth::user()->profile->profile_image) : asset('asset/img/profile.svg') }}"
                         alt="Avatar"
                         class="w-full h-full rounded-full object-cover border-4 border-body shadow-lg">
                </div>

                <h2 class="text-xl font-bold text-text-main mb-1">
                    {{ ucwords(Auth::user()->username) }}
                </h2>
                <p class="text-muted text-sm mb-6">Contact Settings</p>

                <div class="p-4 rounded-xl bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-300 text-sm leading-relaxed">
                    <p class="font-bold mb-1 flex items-center justify-center gap-2">
                        <iconify-icon icon="solar:shield-check-bold-duotone"></iconify-icon> Privacy Note
                    </p>
                    The email and location you provide here will be visible to anyone visiting your public portfolio.
                </div>
            </div>
        </div>


        <div class="lg:col-span-2">
            {{-- <form action="{{ route('contact-me.update', ['username' => Auth::user()->username]) }}" method="POST"> --}}
            <form action="#" method="POST">
                @csrf
                {{-- @method('PUT') --}}


                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 mb-8">
                    <h3 class="text-lg font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:phone-calling-bold-duotone" class="text-primary text-xl"></iconify-icon>
                        Reachability
                    </h3>

                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="public_email" class="block text-sm font-bold text-text-main mb-2 ml-1">Public Email</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                        <iconify-icon icon="solar:letter-bold-duotone" class="text-lg"></iconify-icon>
                                    </span>
                                    <input type="email" id="public_email" name="public_email"
                                        value="{{ old('public_email', Auth::user()->email ?? '') }}"
                                        placeholder="hello@imsphare.com"
                                        class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                                </div>
                                <p class="text-xs text-muted mt-2 ml-1">This can be different from your login email.</p>
                            </div>

                            <div>
                                <label for="location" class="block text-sm font-bold text-text-main mb-2 ml-1">Public Location</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                        <iconify-icon icon="solar:map-point-bold-duotone" class="text-lg"></iconify-icon>
                                    </span>
                                    <input type="text" id="location" name="location"
                                        value="{{ old('location', 'Gorakhpur, Uttar Pradesh, India') }}"
                                        placeholder="City, State, Country"
                                        class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="map_iframe" class="block text-sm font-bold text-text-main mb-2 ml-1">Google Maps Embed Code (Optional)</label>
                            <div class="relative">
                                <span class="absolute left-4 top-4 text-muted">
                                    <iconify-icon icon="solar:map-bold-duotone" class="text-lg"></iconify-icon>
                                </span>
                                <textarea id="map_iframe" name="map_iframe" rows="3"
                                    placeholder='<iframe src="https://www.google.com/maps/embed?..."></iframe>'
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all text-sm font-mono text-muted resize-none">{{ old('map_iframe', '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 mb-8">
                    <h3 class="text-lg font-bold text-text-main mb-6 flex items-center gap-2">
                        <iconify-icon icon="solar:share-circle-bold-duotone" class="text-purple-500 text-xl"></iconify-icon>
                        Social Profiles
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>
                            <label for="github" class="block text-sm font-bold text-text-main mb-2 ml-1">GitHub URL</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="logos:github-icon" class="text-lg grayscale"></iconify-icon>
                                </span>
                                <input type="url" id="github" name="github"
                                    value="{{ old('github', '') }}"
                                    placeholder="https://github.com/username"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                        <div>
                            <label for="linkedin" class="block text-sm font-bold text-text-main mb-2 ml-1">LinkedIn URL</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="logos:linkedin-icon" class="text-lg grayscale"></iconify-icon>
                                </span>
                                <input type="url" id="linkedin" name="linkedin"
                                    value="{{ old('linkedin', '') }}"
                                    placeholder="https://linkedin.com/in/username"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                        <div>
                            <label for="twitter" class="block text-sm font-bold text-text-main mb-2 ml-1">Twitter / X URL</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="logos:twitter" class="text-lg grayscale"></iconify-icon>
                                </span>
                                <input type="url" id="twitter" name="twitter"
                                    value="{{ old('twitter', '') }}"
                                    placeholder="https://twitter.com/username"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                        <div>
                            <label for="instagram" class="block text-sm font-bold text-text-main mb-2 ml-1">Instagram URL</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-muted">
                                    <iconify-icon icon="logos:instagram-icon" class="text-lg grayscale"></iconify-icon>
                                </span>
                                <input type="url" id="instagram" name="instagram"
                                    value="{{ old('instagram', '') }}"
                                    placeholder="https://instagram.com/username"
                                    class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="flex items-center justify-end gap-4">
                    <a href="{{ url()->previous() }}" class="px-8 py-3.5 rounded-full border border-custom bg-card text-text-main font-bold hover:bg-gray-50 dark:hover:bg-white/5 transition-all">
                        Cancel
                    </a>
                    <button type="submit" class="px-8 py-3.5 rounded-full bg-primary text-white font-bold shadow-apple hover:bg-primary-hover hover:-translate-y-1 transition-all flex items-center gap-2">
                        <iconify-icon icon="solar:check-circle-bold" class="text-lg"></iconify-icon>
                        Save Contact Info
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection

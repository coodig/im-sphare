@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mb-12 animate-fade">

    <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-10">
        <div>
            <div class="inline-block px-3 py-1 mb-2 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider">
                Edit Mode
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main">
                Configure <span class="text-primary">About Me</span>
            </h1>
        </div>
        <a href="{{ route('about-me.show', ['username' => Auth::user()->username]) }}"
            class="px-5 py-2.5 rounded-full border border-custom bg-card text-text-main font-bold text-sm hover:bg-red-500 hover:text-white hover:border-red-500 transition-all flex items-center gap-2 shadow-sm">
            <iconify-icon icon="solar:close-circle-bold-duotone" class="text-lg"></iconify-icon>
            Cancel
        </a>
    </div>

    @if($errors->any())
    <div class="mb-8 p-5 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-2xl">
        <ul class="list-disc list-inside text-red-600 dark:text-red-400 font-medium text-sm space-y-1">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('about-me.update', ['username' => Auth::user()->username]) }}" method="POST" enctype="multipart/form-data" class="space-y-12">
        @csrf
        {{-- @method('PUT') --}} {{-- 1. Page Header & SEO Info --}}
        <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 relative overflow-hidden">
            <h3 class="text-xl font-bold text-text-main mb-8 flex items-center gap-2 border-b border-custom pb-4">
                <iconify-icon icon="solar:text-field-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                Hero Section
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label for="about_title" class="block text-sm font-bold text-text-main mb-2 ml-1">Main Heading (Title)</label>
                    <input type="text" id="about_title" name="about_title" value="{{ old('about_title', $user_about->title ?? '') }}"
                        class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main" required>
                </div>
                <div class="md:col-span-2">
                    <label for="about_description" class="block text-sm font-bold text-text-main mb-2 ml-1">Short Sub-heading (Description)</label>
                    <input type="text" id="about_description" name="about_description" value="{{ old('about_description', $user_about->description ?? '') }}"
                        class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main">
                </div>
            </div>
        </div>

        {{-- 2. Main Story Content & Image --}}
        <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 relative overflow-hidden">
            <h3 class="text-xl font-bold text-text-main mb-8 flex items-center gap-2 border-b border-custom pb-4">
                <iconify-icon icon="solar:book-bookmark-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                My Story & Image
            </h3>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <label for="about_content" class="block text-sm font-bold text-text-main mb-2 ml-1">Detailed Story Content (Markdown/HTML supported if configured)</label>
                    <textarea id="about_content" name="about_content" rows="8"
                        class="w-full px-5 py-4 rounded-2xl bg-body border border-custom focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all font-medium text-text-main resize-none">{{ old('about_content', $user_about->content ?? '') }}</textarea>
                </div>

                <div class="lg:col-span-1 flex flex-col gap-4">
                    <label class="block text-sm font-bold text-text-main mb-2 ml-1">Profile/About Image</label>
                    <div class="w-full h-48 rounded-2xl border-2 border-dashed border-custom flex flex-col items-center justify-center bg-body relative overflow-hidden group">
                        <img src="{{ Auth::user()->userabout && Auth::user()->userabout->image ? asset('storage/about/' . Auth::user()->userabout->image) : asset('asset/img/profile.svg') }}"
                            class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:opacity-30 transition-opacity">
                        <iconify-icon icon="solar:camera-add-bold-duotone" class="text-3xl text-primary z-10 mb-2"></iconify-icon>
                        <span class="text-xs font-bold text-text-main z-10 bg-card/80 px-3 py-1 rounded-full backdrop-blur-sm border border-custom">Upload New Image</span>
                        <input type="file" id="image" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
                    </div>
                </div>
            </div>
        </div>

        {{-- 3. Editable Core Values (Cards) --}}
        <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 relative overflow-hidden">
            <h3 class="text-xl font-bold text-text-main mb-8 flex items-center gap-2 border-b border-custom pb-4">
                <iconify-icon icon="solar:star-fall-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                Core Values (3 Cards)
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @for ($i = 0; $i < 3; $i++)
                <div class="p-6 rounded-2xl bg-body border border-custom space-y-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs font-bold text-muted uppercase">Card {{ $i + 1 }}</span>
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-text-main mb-1 ml-1 uppercase">Title</label>
                        <input type="text" name="core_values[{{$i}}][title]" placeholder="e.g. Hardcore Engineering"
                            class="w-full px-4 py-3 rounded-xl bg-card border border-custom focus:border-primary outline-none transition-all text-sm text-text-main font-bold">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-text-main mb-1 ml-1 uppercase">Description</label>
                        <textarea name="core_values[{{$i}}][description]" rows="3" placeholder="Brief description..."
                            class="w-full px-4 py-3 rounded-xl bg-card border border-custom focus:border-primary outline-none transition-all text-sm text-muted font-medium resize-none"></textarea>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        {{-- 4. Editable Technical Arsenal (Skills) --}}
        <div class="bg-card rounded-[2.5rem] border border-custom shadow-apple p-8 md:p-10 relative overflow-hidden">
            <h3 class="text-xl font-bold text-text-main mb-8 flex items-center gap-2 border-b border-custom pb-4">
                <iconify-icon icon="solar:code-square-bold-duotone" class="text-primary text-2xl"></iconify-icon>
                Technical Arsenal
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @for ($i = 0; $i < 4; $i++)
                <div class="flex items-center gap-4 p-4 rounded-2xl bg-body border border-custom">
                    <div class="flex-grow">
                        <label class="block text-[11px] font-bold text-text-main mb-1 ml-1 uppercase">Skill Name</label>
                        <input type="text" name="skills[{{$i}}][name]" placeholder="e.g. C / C++ (Systems)"
                            class="w-full px-4 py-3 rounded-xl bg-card border border-custom focus:border-primary outline-none transition-all text-sm text-text-main font-bold">
                    </div>
                    <div class="w-24 shrink-0">
                        <label class="block text-[11px] font-bold text-text-main mb-1 ml-1 uppercase">Percent</label>
                        <input type="number" name="skills[{{$i}}][percentage]" placeholder="90" min="1" max="100"
                            class="w-full px-4 py-3 rounded-xl bg-card border border-custom focus:border-primary outline-none transition-all text-sm text-primary font-bold text-center">
                    </div>
                </div>
                @endfor
            </div>
        </div>

        {{-- Submit Button --}}
        <div class="flex justify-end pt-4">
            <button type="submit" class="px-10 py-4 rounded-full bg-primary text-white font-bold text-lg shadow-apple hover:bg-primary-hover hover:shadow-lg hover:-translate-y-1 transition-all flex items-center gap-2 w-full md:w-auto justify-center">
                <iconify-icon icon="solar:diskette-bold-duotone" class="text-xl"></iconify-icon>
                Save All Changes
            </button>
        </div>

    </form>
</div>
@endsection

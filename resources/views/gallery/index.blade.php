@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto mb-12 animate-fade">

    <div class="flex flex-col md:flex-row justify-between items-end gap-4 mb-10">
        <div>
            <div class="inline-block px-3 py-1 mb-2 rounded-full bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 text-xs font-bold uppercase tracking-wider">
                Media Center
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-text-main">Gallery</h1>
            <p class="text-muted mt-2 text-lg">Manage your profile assets and project screenshots.</p>
        </div>

        @if(Auth::check() && Auth::id() === $user->id)
            <a href="{{ route('gallery.edit', ['username' => Auth::user()->username]) }}"
               class="px-5 py-2.5 rounded-full bg-primary text-white font-bold text-sm shadow-apple hover:bg-primary-hover hover:-translate-y-0.5 transition-all flex items-center gap-2">
                <iconify-icon icon="solar:upload-track-bold-duotone" class="text-lg"></iconify-icon>
                Upload New
            </a>
        @endif
    </div>

    <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-text-main flex items-center gap-2">
                <iconify-icon icon="solar:user-id-bold-duotone" class="text-primary text-xl"></iconify-icon>
                Profile Assets
            </h3>
            <a href="{{ route('gallery.show', ['username' => Auth::user()->username]) }}" class="text-sm font-bold text-primary hover:underline flex items-center gap-1">
                View All <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 group relative h-64 rounded-[2rem] overflow-hidden border border-custom shadow-apple cursor-pointer"
                 onclick="openModal('{{ asset('asset/img/profile-banner.jpeg') }}')">
                <img src="{{ asset('asset/img/profile-banner.jpeg') }}" alt="Profile Banner" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute bottom-4 left-4 px-3 py-1 bg-black/50 backdrop-blur-md rounded-lg text-white text-xs font-bold border border-white/20">
                    Current Banner
                </div>
            </div>

            <div class="group relative h-64 rounded-[2rem] overflow-hidden border border-custom shadow-apple cursor-pointer"
                 onclick="openModal('{{ asset('asset/img/about.jpg') }}')">
                <img src="{{ asset('asset/img/about.jpg') }}" alt="Profile Avatar" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute bottom-4 left-4 px-3 py-1 bg-black/50 backdrop-blur-md rounded-lg text-white text-xs font-bold border border-white/20">
                    Current Avatar
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-text-main flex items-center gap-2">
                <iconify-icon icon="solar:gallery-bold-duotone" class="text-orange-500 text-xl"></iconify-icon>
                Project Highlights
            </h3>
            <a href="{{ route('gallery.show', ['username' => Auth::user()->username]) }}" class="text-sm font-bold text-primary hover:underline flex items-center gap-1">
                View All <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @php
                // Dummy Images for design
                $projectImages = [
                    asset('asset/img/about.jpg'),
                    asset('asset/img/profile-banner.jpeg'),
                    asset('asset/img/about.jpg'),
                    asset('asset/img/profile-banner.jpeg')
                ];
            @endphp

            @foreach($projectImages as $img)
                <div class="group relative aspect-square rounded-2xl overflow-hidden border border-custom cursor-pointer"
                     onclick="openModal('{{ $img }}')">
                    <img src="{{ $img }}" alt="Project" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <iconify-icon icon="solar:eye-bold" class="text-white text-3xl drop-shadow-md"></iconify-icon>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

<div id="galleryModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/90 backdrop-blur-sm transition-opacity duration-300 opacity-0" style="display: none;">

    <button onclick="closeModal()" class="absolute top-6 right-6 p-2 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors z-20">
        <iconify-icon icon="solar:close-circle-bold" class="text-3xl"></iconify-icon>
    </button>

    <div class="relative w-full max-w-5xl h-full flex flex-col items-center justify-center p-4">
        <img id="modalImage" src="" alt="Full View" class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl">

        <div class="mt-6 flex gap-2 overflow-x-auto max-w-full pb-2 scrollbar-hide">
            @foreach($projectImages as $img)
                <img src="{{ $img }}" onclick="updateModalImage('{{ $img }}')"
                     class="w-16 h-16 object-cover rounded-lg cursor-pointer border-2 border-transparent hover:border-primary transition-all opacity-70 hover:opacity-100">
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Open Modal
    function openModal(imageSrc) {
        const modal = document.getElementById('galleryModal');
        const modalImg = document.getElementById('modalImage');

        modalImg.src = imageSrc;
        modal.style.display = 'flex';
        // Small delay for fade-in effect
        setTimeout(() => {
            modal.classList.remove('opacity-0');
        }, 10);
    }

    // Close Modal
    function closeModal() {
        const modal = document.getElementById('galleryModal');
        modal.classList.add('opacity-0');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    // Update Image inside Modal
    function updateModalImage(src) {
        document.getElementById('modalImage').src = src;
    }

    // Close on Outside Click
    document.getElementById('galleryModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>
@endsection

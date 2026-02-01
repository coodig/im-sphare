@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto mb-12 animate-fade">

    <div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-10">
        <div>
            <h1 class="text-4xl font-bold text-text-main flex items-center gap-3">
                <iconify-icon icon="solar:gallery-wide-bold-duotone" class="text-primary"></iconify-icon>
                Project Gallery
            </h1>
            <p class="text-muted mt-2 text-lg">A curated collection of my latest work and designs.</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <div class="p-1 rounded-full bg-card border border-custom flex items-center gap-1 shadow-sm">
                <button class="px-4 py-2 rounded-full bg-text-main text-body text-xs font-bold shadow-md">All</button>
                <button class="px-4 py-2 rounded-full text-muted hover:text-text-main hover:bg-gray-100 dark:hover:bg-white/5 text-xs font-bold transition-all">Web</button>
                <button class="px-4 py-2 rounded-full text-muted hover:text-text-main hover:bg-gray-100 dark:hover:bg-white/5 text-xs font-bold transition-all">App</button>
                <button class="px-4 py-2 rounded-full text-muted hover:text-text-main hover:bg-gray-100 dark:hover:bg-white/5 text-xs font-bold transition-all">Design</button>
            </div>

            @if(Auth::check() && Auth::id() === $user->id)
                <a href="{{ route('gallery.edit', ['username' => Auth::user()->username]) }}"
                   class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center shadow-apple hover:bg-primary-hover hover:scale-110 transition-all" title="Manage Gallery">
                    <iconify-icon icon="solar:settings-bold" class="text-xl"></iconify-icon>
                </a>
            @endif
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @php
            // Dummy Data for Preview
            $galleryItems = [
                ['src' => asset('asset/img/about.jpg'), 'title' => 'Portfolio Redesign', 'tag' => 'Web Design'],
                ['src' => asset('asset/img/profile-banner.jpeg'), 'title' => 'Marketing Campaign', 'tag' => 'Branding'],
                ['src' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800', 'title' => 'Dashboard UI', 'tag' => 'UI/UX'],
                ['src' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=800', 'title' => 'E-Commerce App', 'tag' => 'Development'],
                ['src' => asset('asset/img/about.jpg'), 'title' => 'Mobile Concept', 'tag' => 'App'],
                ['src' => asset('asset/img/profile-banner.jpeg'), 'title' => 'Social Media Kit', 'tag' => 'Graphics'],
                ['src' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800', 'title' => 'Analytics Tool', 'tag' => 'SaaS'],
                ['src' => 'https://images.unsplash.com/photo-1555099962-4199c345e5dd?auto=format&fit=crop&q=80&w=800', 'title' => 'Code Editor', 'tag' => 'Dev Tool'],
            ];
        @endphp

        @foreach($galleryItems as $item)
            <div class="group relative rounded-2xl overflow-hidden bg-gray-100 dark:bg-white/5 border border-custom shadow-sm hover:shadow-apple-hover cursor-zoom-in aspect-[4/3] transition-all duration-300 hover:-translate-y-1"
                 onclick="openGalleryModal('{{ $item['src'] }}', '{{ $item['title'] }}')">

                <img src="{{ $item['src'] }}"
                     alt="{{ $item['title'] }}"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <div class="absolute inset-0 flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="inline-block px-2 py-1 mb-2 rounded-md bg-primary/90 text-white text-[10px] font-bold uppercase tracking-wider w-fit transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        {{ $item['tag'] }}
                    </span>
                    <h3 class="text-white font-bold text-lg leading-tight transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                        {{ $item['title'] }}
                    </h3>
                </div>

                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white opacity-0 group-hover:opacity-100 scale-50 group-hover:scale-100 transition-all duration-300 delay-100">
                    <iconify-icon icon="solar:eye-bold" class="text-2xl"></iconify-icon>
                </div>
            </div>
        @endforeach

    </div>

    @if(empty($galleryItems))
        <div class="flex flex-col items-center justify-center py-20 border-2 border-dashed border-custom rounded-[3rem]">
            <div class="w-20 h-20 bg-body rounded-full flex items-center justify-center mb-6">
                <iconify-icon icon="solar:gallery-remove-bold-duotone" class="text-4xl text-muted opacity-50"></iconify-icon>
            </div>
            <h3 class="text-xl font-bold text-text-main">No Images Yet</h3>
            <p class="text-muted mt-2">Upload your first project to showcase it here.</p>
        </div>
    @endif

</div>

<div id="galleryModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/95 backdrop-blur-md transition-opacity duration-300 opacity-0" onclick="closeGalleryModal()">

    <button class="absolute top-6 right-6 w-12 h-12 rounded-full bg-white/10 text-white hover:bg-white/20 flex items-center justify-center transition-colors z-20">
        <iconify-icon icon="solar:close-circle-bold" class="text-2xl"></iconify-icon>
    </button>

    <div class="relative max-w-6xl w-full h-full p-4 flex flex-col items-center justify-center" onclick="event.stopPropagation()">
        <img id="modalImage" src="" alt="Full View" class="max-h-[80vh] max-w-full object-contain rounded-lg shadow-2xl animate-scale-up">
        <h3 id="modalTitle" class="mt-6 text-white text-2xl font-bold tracking-wide"></h3>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function openGalleryModal(src, title) {
        const modal = document.getElementById('galleryModal');
        const img = document.getElementById('modalImage');
        const caption = document.getElementById('modalTitle');

        img.src = src;
        caption.innerText = title;

        modal.style.display = 'flex';
        // Allow browser to render display:flex before adding opacity class
        requestAnimationFrame(() => {
            modal.classList.remove('opacity-0');
        });
        document.body.style.overflow = 'hidden';
    }

    function closeGalleryModal() {
        const modal = document.getElementById('galleryModal');
        modal.classList.add('opacity-0');
        setTimeout(() => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            closeGalleryModal();
        }
    });
</script>

<style>
    @keyframes scaleUp {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    .animate-scale-up {
        animation: scaleUp 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
</style>
@endsection

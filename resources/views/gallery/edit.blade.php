@extends('layouts.app')

@section('content')

    <div class="max-w-5xl mx-auto mb-12 animate-fade">

        <div class="flex items-center gap-4 mb-8">
            <a href="{{ url()->previous() }}"
                class="p-2 rounded-full bg-body border border-custom text-muted hover:text-primary transition-colors">
                <iconify-icon icon="solar:arrow-left-linear" class="text-xl"></iconify-icon>
            </a>
            <div>
                <h1 class="text-3xl font-bold text-text-main">Manage Gallery</h1>
                <p class="text-muted text-sm">Upload new project screenshots or remove old assets.</p>
            </div>
        </div>

        <div class="bg-card rounded-[2rem] border border-custom shadow-apple p-8 mb-12">
            <h3 class="text-lg font-bold text-text-main mb-6 flex items-center gap-2">
                <iconify-icon icon="solar:cloud-upload-bold-duotone" class="text-primary text-xl"></iconify-icon>
                Upload New Images
            </h3>

            <form action="{{ route('media.uploadImage',['username'=>Auth::user()->username]) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="relative w-full group">
                    <label for="gallery-upload"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-[2rem] cursor-pointer bg-body hover:bg-gray-50 dark:hover:bg-white/5 hover:border-primary transition-all duration-300 group-hover:shadow-inner">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center">
                            <div
                                class="p-4 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 mb-4 group-hover:scale-110 transition-transform duration-300">
                                <iconify-icon icon="solar:gallery-add-bold-duotone" class="text-4xl"></iconify-icon>
                            </div>
                            <p class="mb-2 text-sm text-text-main font-bold">
                                <span class="text-primary">Click to upload</span> or drag and drop
                            </p>
                            <p class="text-xs text-muted">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                        </div>

                        <input id="gallery-upload" name="images[]" type="file[]" class="hidden" multiple
                            onchange="showPreviewCount(this)" />
                    </label>
                </div>

                <div id="file-info"
                    class="hidden mt-4 items-center gap-2 px-4 py-2 bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-300 rounded-xl text-sm font-bold w-fit">
                    <iconify-icon icon="solar:check-circle-bold" class="text-lg"></iconify-icon>
                    <span id="file-count">0</span> files selected
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="px-8 py-3.5 rounded-full bg-primary text-white font-bold shadow-apple hover:bg-primary-hover hover:-translate-y-1 transition-all flex items-center gap-2">
                        <iconify-icon icon="solar:upload-track-bold-duotone" class="text-xl"></iconify-icon>
                        Upload Now
                    </button>
                </div>
            </form>
        </div>

        <div>
            <h3 class="text-lg font-bold text-text-main mb-6 flex items-center gap-2">
                <iconify-icon icon="solar:gallery-bold-duotone" class="text-orange-500 text-xl"></iconify-icon>
                Your Gallery
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @php
                    // Dummy Data for Preview
                    $images = [
                        asset('asset/img/about.jpg'),
                        asset('asset/img/profile-banner.jpeg'),
                        asset('asset/img/about.jpg'),
                        asset('asset/img/profile-banner.jpeg'),
                    ];
                @endphp

                @foreach($images as $index => $img)
                    <div
                        class="group relative aspect-square bg-body rounded-2xl overflow-hidden border border-custom shadow-sm hover:shadow-lg transition-all">
                        <img src="{{ $img }}" alt="Gallery Item" class="w-full h-full object-cover">

                        <div
                            class="absolute inset-0 bg-red-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[2px]">

                            {{-- <form action="{{ route('gallery.destroy', ['id' => $index]) }}" method="POST"> @csrf --}}

                                <form action="#" method="post">
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-12 h-12 rounded-full bg-white text-red-500 hover:bg-red-500 hover:text-white flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"
                                        title="Delete Image">
                                        <iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="text-2xl"></iconify-icon>
                                    </button>
                                </form>
                        </div>
                    </div>
                @endforeach
            </div>

            @if(count($images) == 0)
                <div class="text-center py-12 border-2 border-dashed border-custom rounded-3xl">
                    <iconify-icon icon="solar:gallery-remove-bold-duotone"
                        class="text-4xl text-muted opacity-50 mb-3"></iconify-icon>
                    <p class="text-muted font-medium">No images found in your gallery.</p>
                </div>
            @endif
        </div>

    </div>

    <script>
        function showPreviewCount(input) {
            const fileCount = input.files.length;
            const infoDiv = document.getElementById('file-info');
            const countSpan = document.getElementById('file-count');

            if (fileCount > 0) {
                countSpan.innerText = fileCount;
                infoDiv.classList.remove('hidden');
                infoDiv.classList.add('flex');
            } else {
                infoDiv.classList.add('hidden');
                infoDiv.classList.remove('flex');
            }
        }
    </script>

@endsection

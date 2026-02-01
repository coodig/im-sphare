@props(['title' => null, 'icon' => null, 'footer' => null, 'class' => ''])

<div {{ $attributes->merge(['class' => 'bg-red-500 border border-custom rounded-2xl shadow-sm hover:shadow-md hover:border-primary transition-all duration-300 ' . $class]) }}>

    @if ($title || $icon)
        <div class="px-6 py-4 border-b border-custom flex items-center gap-3">
            @if ($icon)
                <div class="text-primary text-xl flex items-center justify-center p-2 bg-main rounded-lg">
                    <iconify-icon icon="{{ $icon }}"></iconify-icon>
                </div>
            @endif

            @if($title)
                <h3 class="font-bold text-lg text-text-main tracking-wide">{{ $title }}</h3>
            @endif
        </div>
    @endif

    <div class="p-6 text-text-main">{{ $slot }}</div>

    @if($footer)
        <div class="px-6 py-4 bg-footer/50 border-t border-custom rounded-b-2xl text-sm text-muted">
            {{ $footer }}
        </div>
    @endif
</div>

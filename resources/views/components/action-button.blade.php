@php
    $icons = [
        'add' => '',
        'edit' => '',
        'update' => '',
        'view' => '',
        'delete' => '',
    ]
@endphp


<div>
    <a href="{{ $url }}" class="btn btn-{{ $type }}">{{ $icons[$type] ?? '' }}{{ $label }}</a>
</div>

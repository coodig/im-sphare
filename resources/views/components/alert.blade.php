@php
    $classes = [
        'success' => 'alert-success',
        'error' => 'alert-error',
        'warning' => 'alert-warning',
        'info' => 'alert-info',
    ]
@endphp


<div class="alert {{ $classes[$type] ?? 'alert-info' }}">
    {{ $message }}
</div>

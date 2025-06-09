@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-devantary-text-light font-medium'
            : 'text-devantary-text hover:text-devantary-text-light';
@endphp

<a {{ $attributes->merge(['class' => 'text-sm transition-colors ' . $classes]) }}>
    {{ $slot }}
</a>

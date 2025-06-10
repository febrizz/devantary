@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-primary font-medium border-b-2 border-primary'
            : 'text-text/70 hover:text-primary transition-colors duration-300';
@endphp

<a {{ $attributes->merge(['class' => 'text-sm font-medium py-2 px-1 ' . $classes]) }}>
    {{ $slot }}
</a>

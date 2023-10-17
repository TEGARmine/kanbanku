@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-3 cursor-pointer bg-gray-100 py-3 px-2 rounded-lg'
            : 'flex items-center gap-3 cursor-pointer hover:bg-gray-100 py-3 px-2 rounded-lg';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

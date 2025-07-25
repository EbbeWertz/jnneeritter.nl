@props([
    'icon' => null,
    'color' => 'jnn-logo-bl',
    'href' => '/',
])

@php
    $bgClass = "bg-{$color}";
    $hoverTextClass = "group-hover:text-{$color}";
@endphp

<a
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "group navbarlink $bgClass"
    ]) }}
>
    {{-- Icon --}}
    <x-dynamic-component :component="'icons.' . $icon" class="h-[90%] text-white {{ $hoverTextClass }}" />

    {{-- Slot --}}
    <span class="navbarlink-label group-hover:underline {{ $hoverTextClass }}">
        {{ $slot }}
    </span>
</a>

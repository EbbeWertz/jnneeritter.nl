@props([
    'secondary' => false,
    'href' => null,
    'onclick' => null,
    'type' => 'button',
])

@php
    $tag = $href ? 'a' : 'button';
    $variantClass = $secondary ? 'knop-secondary' : 'knop-primary';
@endphp

<{{ $tag }}
    @if($tag === 'a')
        href="{{ $href }}"
    @else
        type="{{ $type }}"
        @if ($onclick) onclick="{{ $onclick }}" @endif
    @endif
    {{ $attributes->merge(['class' => "knop $variantClass"]) }}
>
    <span class="knop-label">
        {{ $slot }}
    </span>
</{{ $tag }}>

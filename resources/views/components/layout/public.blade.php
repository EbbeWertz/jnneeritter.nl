@props([
    'home' => false,
    'titel' => null,
])

<x-root>
    <x-slot:title>
        JongNL Neeritter
    </x-slot>
    <x-slot:navbar>
        <x-navbar.navbar home="{{ $home }}" logo="{{ asset('/images/vector/logo.svg') }}" />
    </x-slot>
    <x-slot:header>
        {{ $header ?? '' }}
        @if (isset($titel))
            <h1
                class="font-bubblegum font-bold text-4xl text-jnn-logo-zw border-b-2 border-jnn-logo-zw text-center mx-4 md:mx-16 my-4">
                {{ $titel }}
            </h1>
        @endif
    </x-slot>
    {{ $slot }}
    <x-slot:footer>
        <div class="bg-jnn-hoody p-2 border-t-4 border-jnn-logo-zw">
            <img src="{{ asset('/images/vector/logo.svg') }}" alt="Jong Nederland Neeritter Logo" class="h-12">
        </div>
    </x-slot>
</x-root>

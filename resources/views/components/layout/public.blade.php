<x-root>
    <x-slot:title>
        JongNL Neeritter
    </x-slot>
    <x-slot:navbar>
        <x-navbar home logo="/images/logo.svg" />
    </x-slot>
    {{ $slot }}
    <x-slot:footer>
        <div class="bg-jnn-hoody p-2 border-t-4 border-jnn-logo-zw">
            <img src="{{ asset('/images/vector/logo.svg') }}" alt="Jong Nederland Neeritter Logo" class="h-12">
        </div>
    </x-slot>

</x-root>

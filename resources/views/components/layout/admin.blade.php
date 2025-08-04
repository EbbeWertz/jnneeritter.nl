<x-root>
    @php
        $links = [
            'Nieuws' => route('admin.nieuws'),
            'Activiteiten' => route('admin.activiteiten'),
            'Documenten' => route('admin.documenten'),
            'Info' => route('admin.info'),
            'Accounts' => route('admin.accounts'),
        ];
    @endphp
    <x-slot:head>
        <meta name="robots" content="noindex, nofollow">
    </x-slot>
    <x-slot:title>
        JNN - Beheer
    </x-slot>
    <x-slot:navbar>
        <div
            class="sticky top-0 z-50 p-2 border-b-4 border-jnn-logo-zw bg-jnn-logo-bl flex justify-between items-center">
            <span class="text-2xl font-hand font-bold">
                Website Beheer
            </span>
            <a href="/"
                class="text-jnn-logo-zw bg-white rounded-sm px-2 py-1 text-2xl font-bold font-hand underline">ga naar
                homepage</a>
        </div>
    </x-slot>
    <x-slot:aside>
        <div class="bg-white h-full border-r-4 border-r-jnn-logo-zw">
            <nav class="flex flex-col font-bubblegum text-2xl text-jnn-logo-zw">
                <a href="{{ route('admin.home') }}" class="py-4 pl-4">
                    <img src="{{ asset('/images/vector/logo.svg') }}" alt="Jong Nederland Neeritter Logo"
                        class="h-12">
                </a>
                @foreach ($links as $linkName => $linkHref)
                    @php
                        $isHuidigePagina = request()->url() == url($linkHref);
                    @endphp
                    <a href="{{ $linkHref }}"
                        class="flex items-center gap-2 p-4 border border-white/2 transition-colors duration-200 {{ $isHuidigePagina ? 'bg-jnn-hoody text-white' : 'hover:bg-jnn-hoody/20 hover:text-jnn-hoody hover:underline' }} ">
                        <span>
                            {{ $linkName }}
                        </span>
                        @if ($isHuidigePagina)
                            <x-icons.expand class="h-6 -rotate-90" />
                        @endif
                    </a>
                @endforeach
            </nav>
        </div>
    </x-slot>
    {{ $slot }}
</x-root>

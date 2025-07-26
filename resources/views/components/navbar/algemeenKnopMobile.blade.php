@props([
    'links' => [],
    'home' => false,
])

<div x-data="{ open: false }" class="w-full">
    <!-- Toggle Button -->
    <button x-on:click="open = !open"
        class="w-full flex items-center justify-between text-left px-4 py-2 rounded-sm transition">
        <span class="flex items-center gap-2 text-2xl font-bold text-jnn-logo-bl font-hand">
            algemeen
            <x-icons.expand class="w-4 h-4 {{ $home ? 'text-jnn-logo-zw' : 'text-white/50' }}"
                x-bind:class="{ 'rotate-180': open }" />

        </span>
    </button>

    <!-- Dropdown Items -->
    <ul x-cloak x-show="open" x-transition:enter="animate-expand-v" x-transition:leave="animate-collapse-v"
        class="pl-8 mt-2 space-y-2 text-xl {{ $home ? 'text-jnn-logo-zw' : 'text-white' }} font-hand">
        @foreach ($links as $linkName => $linkHref)
            <li><a href="{{ $linkHref }}"
                    class="block {{ $loop->index % 2 == 1 ? ($home ? 'bg-jnn-logo-zw/10' : 'bg-white/10') : 'bg-jnn-logo-bl/10' }} rounded-sm hover:underline px-2 py-1">{{ $linkName }}</a>
            </li>
        @endforeach
    </ul>
</div>

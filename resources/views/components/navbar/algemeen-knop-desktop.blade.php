@props(['links' => []])


<div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative group cursor-pointer">
    <!-- Button -->
    <div
        class="bg-jnn-logo-bl/75 flex w-full lg:w-max items-stretch h-12 p-1 pr-2 border-transparent border-2 rounded-sm shadow-[4px_4px_0_0] shadow-[#0008] cursor-pointer lg:rotate-2 group-hover:rotate-0 group-hover:bg-white group-hover:border-jnn-logo-zw transition-all">
        <x-icons.expand class="text-jnn-logo-zw w-4 ml-2 transition-all" x-bind:class="{ '-rotate-90': open }" />
        <span class="navbarlink-label group-hover:underline">algemeen</span>
    </div>

    <div x-show="open" class="absolute top-full left-0 h-2 w-full"></div>

    <!-- Dropdown -->
    <div x-cloak x-show="open" x-transition:enter="animate-expand-v" x-transition:leave="animate-collapse-v"
        class="absolute top-full w-full mt-2 left-0 bg-white shadow-2xl shadow-black rounded-sm border-2 border-jnn-logo-zw font-hand p-2 z-50 text-xl">
        <ul class="space-y-1">
            @foreach ($links as $linkName => $linkHref)
                <li><a href="{{ $linkHref }}" class="block hover:underline px-2 py-1">{{ $linkName }}</a></li>
            @endforeach
        </ul>
    </div>
</div>

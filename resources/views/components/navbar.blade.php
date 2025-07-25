@props(['home' => false, 'logo'])

<div x-data="{
    drawerOpen: false,
}">
    <!-- Fixed Navbar -->
    <div x-ref="navbar"
        class="px-4 pt-2 h-[56px] lg:h-[68px] fixed overflow-x-hidden top-0 left-0 right-0 z-50 {{ $home ? 'bg-white' : 'bg-jnn-hoody' }}">
        <!-- Top bar -->
        <div class="flex justify-between items-center">
            <a href="/">
                @if ($home)
                    <span class="flex items-end gap-4">
                        <span class="text-jnn-logo-zw font-bubblegum text-3xl font-bold">Jong Nederland</span>
                        <span class="font-hand text-lg font-bold text-jnn-logo-bl">Neeritter</span>
                    </span>
                @else
                    <img src="{{ $logo }}" alt="Jong Nederland Neeritter Logo"
                        class="h-13 hover:scale-105 transition" />
                @endif
            </a>

            <!-- Hamburger icon (mobile only) -->
            <button class="lg:hidden" x-on:click="drawerOpen = !drawerOpen" type="button"
                aria-label="Toggle navigation drawer">
                <x-icons.menuclose x-cloak x-show="drawerOpen" class="text-jnn-logo-rz w-8 h-8"></x-icons.menuclose>
                <x-icons.menu x-show="!drawerOpen" class="text-jnn-logo-bl w-8 h-8"></x-icons.menu>
            </button>

            <!-- Horizontal links (desktop only) -->
            <ul class="hidden lg:flex gap-2">
                <li><x-navbarlink icon="krant" color="jnn-blok-gr" href="/">nieuws</x-navbarlink></li>
                <li><x-navbarlink icon="agenda" color="jnn-blok-or" href="/">groepsavond</x-navbarlink></li>
                <li><x-navbarlink icon="contactboek" color="jnn-blok-rz" href="/">contact</x-navbarlink></li>
                <li><x-navbarlink icon="sleutel" color="jnn-blok-ge" href="/">voor leiding</x-navbarlink></li>
            </ul>
        </div>
    </div>
    <!-- Mobile drawer (overlay style) -->

    <div
        class="fixed left-0 right-0 top-[56px] lg:top-[68px] z-[49] min-h-px {{ $home ? 'bg-white' : 'bg-jnn-hoody' }} shadow-[0_0_16px_16px_rgba(0,0,0,0.5)]
 border-b-4 border-jnn-logo-zw">
        <div class="lg:hidden" x-cloak x-show="drawerOpen" x-transition:enter="animate-expand-v"
            x-transition:leave="animate-collapse-v">
            <ul class="mt-2 px-4 pb-4 flex flex-col gap-2 items-end -mr-8">
                <li class="w-full pl-16 animate-slide-right-in translate-x-full">
                    <x-navbarlink icon="krant" color="jnn-blok-gr" href="/">nieuws</x-navbarlink>
                </li>
                <li class="w-full pl-12 animate-slide-right-in translate-x-full" style="animation-delay: 0.2s">
                    <x-navbarlink icon="agenda" color="jnn-blok-or" href="/">groepsavond</x-navbarlink>
                </li>
                <li class="w-full pl-8 animate-slide-right-in translate-x-full" style="animation-delay: 0.4s">
                    <x-navbarlink icon="contactboek" color="jnn-blok-rz" href="/">contact</x-navbarlink>
                </li>
                <li class="w-full pl-4 animate-slide-right-in translate-x-full" style="animation-delay: 0.6s">
                    <x-navbarlink icon="sleutel" color="jnn-blok-ge" href="/">voor leiding</x-navbarlink>
                </li>
            </ul>
        </div>
    </div>

    <div class="h-[56px] lg:h-[68px]"></div>

    <!-- Overlay -->
    <div x-cloak x-show="drawerOpen" x-on:click="drawerOpen = false" x-transition:enter="animate-fade-in"
        x-transition:leave="animate-fade-out" class="fixed inset-0 bg-black/50 backdrop-blur-xs z-40 lg:hidden"></div>
</div>

@props(['home' => false, 'logo'])

<div x-data="{drawerOpen: false, navbarHeight: 0}" x-init="navbarHeight = $refs.navbar.offsetHeight">
    <div x-ref="navbar" class="px-4 py-2 border-b-4 fixed overflow-x-hidden top-0 left-0 right-0 z-50 border-jnn-logo-zw shadow-[0_10px_16px_0] shadow-[#0000004d] {{ $home ? 'bg-white' : 'bg-jnn-hoody' }}">
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
                <i-menuclose x-show="drawerOpen" class="text-jnn-logo-rz w-8 h-8"></i-menuclose>
                <i-menu x-show="!drawerOpen" class="text-jnn-logo-bl w-8 h-8"></i-menu>
            </button>

            <!-- Horizontal links (desktop only) -->
            <ul class="hidden lg:flex gap-2">
                <li>
                    <Navlink icon="i-krant" color="jnn-blok-gr" href="/">nieuws</Navlink>
                </li>
                <li>
                    <Navlink icon="i-agenda" color="jnn-blok-or" href="/">groepsavond</Navlink>
                </li>
                <li>
                    <Navlink icon="i-contactboek" color="jnn-blok-rz" href="/">contact</Navlink>
                </li>
                <li>
                    <Navlink icon="i-sleutel" color="jnn-blok-ge" href="/">voor leiding</Navlink>
                </li>
            </ul>
        </div>

        <!-- Mobile drawer -->
        <!-- Mobile drawer -->
<div
  class="overflow-hidden -mr-6 lg:hidden"
  x-cloak
  x-show="drawerOpen"
  x-transition:enter="transition-all duration-500 ease-in-out"
  x-transition:enter-start="max-h-0 opacity-0"
  x-transition:enter-end="max-h-[500px] opacity-100"
  x-transition:leave="transition-all duration-300 ease-in-out"
  x-transition:leave-start="max-h-[500px] opacity-100"
  x-transition:leave-end="max-h-0 opacity-0"
>
    <ul class="mt-2 flex flex-col gap-2 items-end">
        <li class="w-full pl-16">
            <Navlink icon="i-krant" color="jnn-blok-gr" href="/">nieuws</Navlink>
        </li>
        <li class="w-full pl-12">
            <Navlink icon="i-agenda" color="jnn-blok-or" href="/">groepsavond</Navlink>
        </li>
        <li class="w-full pl-8">
            <Navlink icon="i-contactboek" color="jnn-blok-rz" href="/">contact</Navlink>
        </li>
        <li class="w-full pl-4">
            <Navlink icon="i-sleutel" color="jnn-blok-ge" href="/">voor leiding</Navlink>
        </li>
    </ul>
</div>

    </div>

    <div x-bind:style="`height:${navbarHeight}px`"></div>

    <!-- Optional overlay when drawer is open -->
    <div
  x-cloak
  x-show="drawerOpen"
  x-on:click="$dispatch('close-drawer')"
  x-transition:enter="transition-all duration-300 ease-out"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition-all duration-200 ease-in"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 bg-black/50 backdrop-blur-xs z-40 lg:hidden"
></div>

</div>

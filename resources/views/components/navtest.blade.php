@props(['home' => false, 'logo'])

<div x-data="{drawerOpen: false, navbarHeight: 0, rendered: false}" x-init="navbarHeight = $refs.navbar.offsetHeight; rendered = true;">
    <div x-ref="navbar" class="px-4 py-2 border-b-4 overflow-x-hidden top-0 left-0 right-0 z-50 border-jnn-logo-zw shadow-[0_10px_16px_0] shadow-[#0000004d] {{ $home ? 'bg-white' : 'bg-jnn-hoody' }}"
    x-bind:style="rendered ? { position: 'fixed' } : {}"

    >
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
  x-transition:enter="animate-expand-v"
  x-transition:leave="animate-collapse-v"
>
    <ul class="mt-2 flex flex-col gap-2 items-end">
        <li class="w-full pl-16 animate-slide-left translate-x-full">
            <Navlink icon="i-krant" color="jnn-blok-gr" href="/">nieuws</Navlink>
        </li>
        <li class="w-full pl-12 animate-slide-left translate-x-full" style="animation-delay: 0.2s">
            <Navlink icon="i-agenda" color="jnn-blok-or" href="/">groepsavond</Navlink>
        </li>
        <li class="w-full pl-8 animate-slide-left translate-x-full" style="animation-delay: 0.4s">
            <Navlink icon="i-contactboek" color="jnn-blok-rz" href="/">contact</Navlink>
        </li>
        <li class="w-full pl-4 animate-slide-left translate-x-full" style="animation-delay: 0.6s">
            <Navlink icon="i-sleutel" color="jnn-blok-ge" href="/">voor leiding</Navlink>
        </li>
    </ul>
</div>

    </div>

    <div x-show="rendered" x-bind:style="`height:${navbarHeight}px`"></div>

    <!-- Optional overlay when drawer is open -->
    <div
  x-cloak
  x-show="drawerOpen"
  x-on:click="$dispatch('close-drawer')"
  x-transition:enter="animate-fade-in"
  x-transition:leave="animate-fade-out"
  class="fixed inset-0 bg-black/50 backdrop-blur-xs z-40 lg:hidden"
></div>

</div>

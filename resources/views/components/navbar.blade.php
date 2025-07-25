@props(['home' => false, 'logo'])

<div x-data="{ drawerOpen: false }">
    {{-- navbar --}}
    <div
        class="px-4 pt-2 h-[56px] lg:h-[68px] fixed overflow-visible top-0 left-0 right-0 z-50 {{ $home ? 'bg-white' : 'bg-jnn-hoody' }}">

        <div class="flex justify-between items-center">
            {{-- naam/logo --}}
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

            <div class="flex gap-4 items-center">

                {{-- horizontale links (desktop) --}}
                <ul class="hidden lg:flex gap-2">
                    <li>
                        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                            class="relative group cursor-pointer">
                            <!-- Button -->
                            <div
                                class="bg-jnn-logo-bl/75 flex w-full lg:w-max items-stretch h-12 p-1 pr-2 border-transparent border-2 rounded-sm shadow-[4px_4px_0_0] shadow-[#0008] cursor-pointer lg:rotate-2 group-hover:rotate-0 group-hover:bg-white group-hover:border-jnn-logo-zw transition-all">
                                <x-icons.expand class="text-jnn-logo-zw w-4 ml-2" />
                                <span class="navbarlink-label group-hover:underline">algemeen</span>
                            </div>

                            <div x-show="open" class="absolute top-full left-0 h-2 w-full"></div>

                            <!-- Dropdown -->
                            <div x-show="open" x-transition:enter="animate-expand-v"
                                x-transition:leave="animate-collapse-v"
                                class="absolute top-full w-full mt-2 left-0 bg-white shadow-2xl shadow-black rounded-sm border-2 border-jnn-logo-zw font-hand p-2 z-50 text-xl">
                                <ul class="space-y-1">
                                    <li><a href="/link1" class="block hover:underline px-2 py-1">over ons</a></li>
                                    <li><a href="/link1" class="block hover:underline px-2 py-1">groepen</a></li>
                                    <li><a href="/link2" class="block hover:underline px-2 py-1">bestuur</a></li>
                                    <li><a href="/link3" class="block hover:underline px-2 py-1">geschiedenis</a></li>
                                </ul>
                            </div>
                        </div>


                    </li>
                    <li><x-navbarlink icon="krant" color="jnn-blok-gr" href="/">nieuws</x-navbarlink></li>
                    <li><x-navbarlink icon="agenda" color="jnn-blok-or" href="/">activiteiten</x-navbarlink></li>
                    <li><x-navbarlink icon="contactboek" color="jnn-blok-rz" href="/">contact</x-navbarlink></li>
                    <li><x-navbarlink icon="sleutel" color="jnn-blok-ge" href="/">word lid</x-navbarlink></li>
                </ul>
            </div>

            {{-- expand knop (mobile) --}}
            <button class="lg:hidden" x-on:click="drawerOpen = !drawerOpen" type="button"
                aria-label="Toggle navigation drawer">
                <x-icons.menuclose x-cloak x-show="drawerOpen" class="text-jnn-logo-rz w-8 h-8"></x-icons.menuclose>
                <x-icons.menu x-show="!drawerOpen" class="text-jnn-logo-bl w-8 h-8"></x-icons.menu>
            </button>
        </div>
    </div>

    {{-- border (+mobile links drawer) --}}
    <div
        class="fixed left-0 right-0 top-[56px] lg:top-[68px] z-[49] min-h-px {{ $home ? 'bg-white' : 'bg-jnn-hoody' }} shadow-[0_0_16px_16px_rgba(0,0,0,0.5)]
 border-b-4 border-jnn-logo-zw">
        {{-- verticale drawer voor mobile links --}}
        <div class="lg:hidden" x-cloak x-show="drawerOpen" x-transition:enter="animate-expand-v"
            x-transition:leave="animate-collapse-v">
            <ul class="mt-2 px-4 pb-4 flex flex-col gap-2 items-end -mr-8">
                <li class="w-full pl-16 animate-slide-right-in translate-x-full">
                    <x-navbarlink icon="krant" color="jnn-blok-gr" href="/">nieuws</x-navbarlink>
                </li>
                <li class="w-full pl-12 animate-slide-right-in translate-x-full" style="animation-delay: 0.2s">
                    <x-navbarlink icon="agenda" color="jnn-blok-or" href="/">activiteiten</x-navbarlink>
                </li>
                <li class="w-full pl-8 animate-slide-right-in translate-x-full" style="animation-delay: 0.4s">
                    <x-navbarlink icon="contactboek" color="jnn-blok-rz" href="/">contact</x-navbarlink>
                </li>
                <li class="w-full pl-4 animate-slide-right-in translate-x-full" style="animation-delay: 0.6s">
                    <x-navbarlink icon="sleutel" color="jnn-blok-ge" href="/">word lid</x-navbarlink>
                </li>
            </ul>
        </div>
    </div>

    {{-- spacer --}}
    <div class="h-[56px] lg:h-[68px]"></div>

    {{-- donkere overlay voor open drawer --}}
    <div x-cloak x-show="drawerOpen" x-on:click="drawerOpen = false" x-transition:enter="animate-fade-in"
        x-transition:leave="animate-fade-out" class="fixed inset-0 bg-black/50 backdrop-blur-xs z-40 lg:hidden"></div>
</div>

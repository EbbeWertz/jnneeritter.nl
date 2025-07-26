@props(['home' => false, 'logo'])

<div x-data="{ drawerOpen: false }">
    {{-- navbar --}}
    <div
        class="px-4 pt-2 h-[56px] lg:h-[68px] fixed overflow-visible top-0 left-0 right-0 z-50 {{ $home ? 'bg-white' : 'bg-jnn-hoody' }}">

        <div class="flex justify-between items-center">
            {{-- naam/logo --}}
            <a href="{{route('home')}}">
                @if ($home)
                    <span class="flex items-end gap-4">
                        <span class="text-jnn-logo-zw font-bubblegum text-3xl font-bold">Jong Nederland</span>
                        <span class="font-hand text-lg font-bold text-jnn-logo-bl">Neeritter</span>
                    </span>
                @else
                    <img src="{{ $logo }}" alt="Jong Nederland Neeritter Logo"
                        class="h-10 lg:h-13 hover:scale-105 transition" />
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
                                <x-icons.expand class="text-jnn-logo-zw w-4 ml-2 transition-all" x-bind:class="{ '-rotate-90': open }"/>
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
                    <li><x-navbarlink icon="contactboek" color="jnn-blok-rz" href="{{route('contact')}}">contact</x-navbarlink></li>
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
            <ul class="mt-2 pl-4 pb-4 flex flex-col gap-2 items-end -mr-8">
                <li class="w-full pb-2 mb-2 border-b-2 {{ $home ? 'border-jnn-logo-zw/50' : 'border-white/50' }}">
                    <div x-data="{ open: false }" class="w-full">
                        <!-- Toggle Button -->
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between text-left px-4 py-2 rounded-sm hover:bg-jnn-blok-ge/10 transition">
                            <span class="flex items-center gap-2 text-2xl font-bold text-jnn-logo-bl font-hand">
                                algemeen
                                <x-icons.expand class="w-4 h-4 {{ $home ? 'text-jnn-logo-zw' : 'text-white/50' }}" x-bind:class="{ 'rotate-180': open }" />
                                
                            </span>
                        </button>

                        <!-- Dropdown Items -->
                        <ul x-show="open" x-transition:enter="animate-expand-v" x-transition:leave="animate-collapse-v"
                            class="pl-8 mt-2 space-y-2 text-xl {{$home ? 'text-jnn-logo-zw' : 'text-white'}} font-hand">
                            <li><a href="/link1" class="block bg-jnn-logo-bl/10 rounded-sm hover:underline px-2 py-1">over ons</a></li>
                            <li><a href="/link1" class="block {{$home ? 'bg-jnn-logo-zw/10' : 'bg-white/10'}} rounded-sm hover:underline px-2 py-1">groepen</a></li>
                            <li><a href="/link2" class="block bg-jnn-logo-bl/10 rounded-sm hover:underline px-2 py-1">bestuur</a></li>
                            <li><a href="/link3" class="block {{$home ? 'bg-jnn-logo-zw/10' : 'bg-white/10'}} rounded-sm hover:underline px-2 py-1">geschiedenis</a></li>
                        </ul>
                    </div>
                </li>
                <span class="text-2xl pl-4 font-bold text-jnn-logo-bl font-hand w-full mb-2">snelle links</span>
                <li class="w-full pl-16 animate-slide-right-in translate-x-full">
                    <x-navbarlink icon="krant" color="jnn-blok-gr" href="/">nieuws</x-navbarlink>
                </li>
                <li class="w-full pl-12 animate-slide-right-in translate-x-full" style="animation-delay: 0.2s">
                    <x-navbarlink icon="agenda" color="jnn-blok-or" href="/">activiteiten</x-navbarlink>
                </li>
                <li class="w-full pl-8 animate-slide-right-in translate-x-full" style="animation-delay: 0.4s">
                    <x-navbarlink icon="contactboek" color="jnn-blok-rz" href="{{route('contact')}}">contact</x-navbarlink>
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

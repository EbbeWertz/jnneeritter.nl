@props(['home' => false, 'logo'])

@php
    $algemeenLinks = [
        'over ons' => '/',
        'groepen' => '/',
        'bestuur' => '/',
        'geschiedenis' => '/',
    ];
    $snelLinks = [
        ['label' => 'nieuws', 'icon' => 'krant', 'color' => 'jnn-blok-gr', 'href' => '/'],
        ['label' => 'activiteiten', 'icon' => 'agenda', 'color' => 'jnn-blok-or', 'href' => '/'],
        ['label' => 'contact', 'icon' => 'contactboek', 'color' => 'jnn-blok-rz', 'href' => route('contact')],
        ['label' => 'word lid', 'icon' => 'sleutel', 'color' => 'jnn-blok-ge', 'href' => '/'],
    ];
@endphp

<div x-data="{ drawerOpen: false }">
    {{-- navbar --}}
    <div
        class="px-4 pt-2 h-[56px] lg:h-[68px] fixed overflow-visible top-0 left-0 right-0 z-50 {{ $home ? 'bg-white' : 'bg-jnn-hoody' }}">

        <div class="flex justify-between items-center">
            {{-- naam/logo --}}
            <a href="{{ route('home') }}">
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

            {{-- horizontale links (desktop) --}}
            <ul class="hidden lg:flex gap-2">
                <li><x-navbar.algemeen-knop-desktop :links="$algemeenLinks" /></li>
                @foreach ($snelLinks as $link)
                    <li><x-navbar.snellink-knop :icon="$link['icon']" :color="$link['color']"
                            :href="$link['href']">{{ $link['label'] }}</x-navbar.snellink-knop></li>
                @endforeach
            </ul>

            {{-- expand knop (mobile) --}}
            <button class="lg:hidden" x-on:click="drawerOpen = !drawerOpen" type="button">
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
                    <x-navbar.algemeen-knop-mobile :home="$home" :links="$algemeenLinks" />
                </li>
                <span class="text-2xl pl-4 font-bold text-jnn-logo-bl font-hand w-full mb-2">snelle links</span>

                @foreach ($snelLinks as $link)
                    <li class="w-full pl-16 animate-slide-right-in translate-x-full"
                        style="padding-left: {{ 16 * (count($snelLinks) - $loop->index) }}px; animation-delay: {{ 0.2 * $loop->index }}s;">
                        <x-navbar.snellink-knop :icon="$link['icon']" :color="$link['color']"
                            :href="$link['href']">{{ $link['label'] }}</x-navbar.snellink-knop>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- spacer --}}
    <div class="h-[56px] lg:h-[68px]"></div>

    {{-- donkere overlay voor open drawer --}}
    <div x-cloak x-show="drawerOpen" x-on:click="drawerOpen = false" x-transition:enter="animate-fade-in"
        x-transition:leave="animate-fade-out" class="fixed inset-0 bg-black/50 backdrop-blur-xs z-40 lg:hidden"></div>
</div>

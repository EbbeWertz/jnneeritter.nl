<x-layout.public>
    <div id="banner" class="bg-jnn-logo-bl flex flex-col items-center">

        <img src="{{ asset('/images/vector/banner.svg') }}" alt="Jong Nederland Neeritter: Het avontuur van je leven"
            loading="lazy" class="w-[120vw] sm:w-[80%] m-2" width="3543" height="1111">

        {{-- CTA Lint --}}
        <div class="flex justify-between w-full items-center bg-black/30 -mb-4 px-8 pt-2 pb-6 animate-slide-right-3">
            {{-- Welkom & actions --}}
            <div class="flex flex-col md:flex-row gap-4 md:gap-8 items-center">
                <span class="font-hand text-3xl drop-shadow-[1px_2px_0px_black] text-white">Welkom op onze
                    website!</span>
                <div class="flex gap-8">
                    <x-knop>Over Ons</x-knop>
                    <x-knop secondary>Word Lid</x-knop>
                </div>
            </div>
            {{-- Socials --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="https://www.facebook.com/jongnl.neeritter/" target="_blank">
                    <x-icons.fb class="text-white h-8 hover:shadow-[4px_4px_16px_0] shadow-black/50 transition-all" />
                </a>
                <a href="https://www.instagram.com/jongnederlandneeritter/" target="_blank">
                    <x-icons.ig class="text-white h-8 hover:shadow-[4px_4px_16px_0] shadow-black/50 transition-all" />
                </a>
            </div>
        </div>
        <div class="overflow-x-clip w-full">
        <x-icons.scheidlijno class="w-[2048px] min-w-screen text-jnn-paper-p z-30 translate-y-px" />

        </div >
        
    </div>

    <form action="/mail" method="post">
        @csrf
        <label for="email">adres:</label>
        <input type="email" name="email" id="email">
        <button type="submit">zend</button>
    </form>

</x-layout.public>
<style>
    #banner {
        background-image: url('{{ asset('/images/bitmap/kamp_carree.png') }}');
        background-size: cover;
        background-position: center;
    }
</style>

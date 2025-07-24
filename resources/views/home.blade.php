<x-layout.public>
    <div id="banner" class="bg-jnn-logo-bl overflow-hidden flex flex-col items-center">

        <img src="{{ asset('/images/vector/banner.svg') }}" alt="Jong Nederland Neeritter: Het avontuur van je leven"
            loading="eager" class="w-[120vw] sm:w-[80%] m-2">

        {{-- CTA Lint --}}
        <div class="flex justify-between w-full items-center bg-black/30 -mb-4 px-8 pt-2 pb-6">
            {{-- Welkom & actions --}}
            <div class="flex flex-col md:flex-row gap-4 md:gap-8 items-center">
                <span class="font-hand text-3xl drop-shadow-[1px_2px_0px_black] text-white">Welkom op onze
                    website!</span>
                <div class="flex gap-8">
                    <Knop variant="primary">Over Ons</Knop>
                    <Knop variant="secondary">Word Lid</Knop>
                </div>
            </div>
            {{-- Socials --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="https://www.facebook.com/jongnl.neeritter/" target="_blank">
                    <i-fb class="text-white h-8"><i-fb>
                </a>
                <a href="https://www.instagram.com/jongnederlandneeritter/" target="_blank">
                    <i-ig class="text-white h-8"><i-ig>
                </a>
            </div>
        </div>
        <i-scheidlijno class="text-jnn-paper-p w-[2048px] min-w-screen mt-0.5 -mb-0.5"></i-scheidlijno>
    </div>
aaaaaaaaaa
<br>
aaaaaaaaaa
<br>aaaaaaaaaa
<br>aaaaaaaaaa
<br>aaaaaaaaaa
<br>aaaaaaaaaa
<br>aaaaaaaaaa
<br>aaaaaaaaaa
<br>aaaaaaaaaa
<br>

</x-layout.public>
<style>
    #banner {
        background-image: url('{{ asset('/images/bitmap/kamp_carree.png') }}');
        background-size: cover;
        background-position: center;
    }
</style>

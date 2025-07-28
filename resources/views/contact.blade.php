<x-layout.public>
    <x-slot:header>
        <h1
            class="font-hand font-bold text-4xl text-jnn-logo-zw border-b-2 border-jnn-logo-zw text-center mx-4 md:mx-16 my-4">
            Contact
        </h1>
    </x-slot>

    <section class="px-4 md:px-16 py-8 font-hand text-jnn-logo-zw space-y-16">

        {{-- ALGEMEEN + LOCATIE + GOOGLE MAPS + AFBEELDING --}}
        <div class="flex flex-col md:flex-row gap-8">
            {{-- Linkerkolom: tekstuele info --}}
            <div class="md:w-1/2 space-y-8">
                {{-- Algemeen --}}
                <div>
                    <h2 class="text-2xl font-bold text-jnn-hoody">Algemeen</h2>
                    <p>Email:
                        <a href="mailto:info@jnneeritter.nl" class="text-jnn-logo-bl underline">
                            info@jnneeritter.nl
                        </a>
                    </p>
                    <p>Heb je een algemene vraag? Neem gerust contact op of vul het formulier <span class="hidden md:inline">hiernaast</span><span class="md:hidden">hieronder</span> in.</p>
                    <p>Onze contactpersonen voor specifieke vragen vind je onderaan deze pagina.</p>
                </div>

                {{-- Locatie --}}
                <div>
                    <h2 class="text-2xl font-bold text-jnn-hoody">Locatie</h2>
                    <p>Jeugdhuis "'t Zolderke"</p>
                    <p>Driessensstraat 29</p>
                    <p>6015 AD Neeritter, Nederland</p>
                </div>

                {{-- Google Maps --}}
                <div class="aspect-video w-full max-w-xl">
                    <iframe class="w-full h-full border-4 border-jnn-hoody rounded shadow-[4px_4px_0_0] shadow-[#0008]"
                        src="https://www.google.com/maps?q=Driessensstraat+29,+6015+AD+Neeritter,+Nederland&output=embed"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>


            <div class="md:w-1/2">
                <h2 class="text-2xl font-bold text-jnn-hoody mb-4">Contactformulier</h2>
                <form method="POST" action="/contact/verzenden" class="space-y-4 w-full">
                    @csrf
                    <div>
                        <label class="block mb-1 text-jnn-logo-bl" for="naam">Naam</label>
                        <input type="text" id="naam" name="naam" required
                            class="w-full border-2 border-jnn-logo-zw/50 p-2 rounded-sm shadow-[4px_4px_0_0] shadow-[#0008] bg-white">
                    </div>
                    <div>
                        <label class="block mb-1 text-jnn-logo-bl" for="email">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full border-2 border-jnn-logo-zw/50 p-2 rounded-sm shadow-[4px_4px_0_0] shadow-[#0008] bg-white">
                    </div>
                    <div>
                        <label class="block mb-1 text-jnn-logo-bl" for="bericht">Bericht</label>
                        <textarea id="bericht" name="bericht" rows="4" required
                            class="w-full border-2 border-jnn-logo-zw/50 p-2 rounded-sm shadow-[4px_4px_0_0] shadow-[#0008] bg-white"></textarea>
                    </div>
                    <x-knop type="submit">Verstuur</x-knop>
                </form>
            </div>

        </div>

        {{-- ROLLEN + FORMULIER --}}
        <div class="grid md:grid-cols-2 gap-8">
            {{-- Rollen --}}
            <div class="space-y-6">
                @php
                    $rollen = [
                        [
                            'rol' => 'Voorzitter',
                            'naam' => 'Jan Jansen',
                            'email' => 'voorzitter@jnneeritter.nl',
                            'tel' => '0612345678',
                        ],
                        [
                            'rol' => 'Ledenadministratie',
                            'naam' => 'Piet Pietersen',
                            'email' => 'leden@jnneeritter.nl'
                        ],
                        [
                            'rol' => 'Webmaster',
                            'email' => 'webmaster@jnneeritter.nl'
                        ],
                    ];
                @endphp

                @foreach ($rollen as $persoon)
                    <div class="p-4 space-y-1">
                        <h3 class="text-2xl font-bold text-jnn-hoody">{{ $persoon['rol'] }}</h3>
                        @if (isset($persoon['naam']))
                            <p class="font-bold">{{ $persoon['naam'] }}</p>
                        @endif
                        <p>Email:
                            <a href="mailto:{{ $persoon['email'] }}"
                                class="text-jnn-logo-bl underline">{{ $persoon['email'] }}</a>
                        </p>
                        @if (isset($persoon['tel']))
                            <p>Telefoon:
                                <a href="tel:{{ $persoon['tel'] }}"
                                    class="text-jnn-logo-bl underline">{{ $persoon['tel'] }}</a>
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>

            {{-- Formulier --}}
            {{-- Rechterkolom: afbeelding --}}
            <div class="md:w-full flex flex-col items-center">
                <img src="{{ asset('images/bitmap/pluumke_computer.webp') }}"
                    alt="pluumke computer"
                    class="w-2/3 object-contain">
            </div>
        </div>
    </section>
</x-layout.public>

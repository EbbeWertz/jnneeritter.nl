@php
    $leeftijdMinimum = 5;
    $leeftijdMaximum = 18;
    $contributieJaar = 70;
    $contributieMaand = 7;
    $seizoenStart = '1 januari';
    $seizoenEinde = '31 december';
@endphp

<x-layout.public titel="Lid Worden">
    <section class="px-4 md:px-16 py-8 font-hand text-jnn-logo-zw space-y-16">

        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/2 space-y-8">

                {{-- Motivatie --}}
                <div>
                    <h2 class="text-2xl font-bold text-jnn-hoody">Op zoek naar spanning, avontuur en gezelligheid?</h2>
                    <p>Dan ben je bij ons op het juiste adres!</p>
                </div>

                {{-- Algemene info --}}
                <div>
                    <h2 class="text-2xl font-bold text-jnn-hoody">Voor wie is het?</h2>
                    <p>Iedereen van <strong>{{ $leeftijdMinimum }}</strong> t.e.m.
                        <strong>{{ $leeftijdMaximum }}</strong> jaar is welkom. Neem ook gerust al eens een kijkje op de
                        <a href="/groepen"
                            class="underline text-jnn-logo-bl-d hover:text-jnn-logo-bl-d/70">groepenpagina</a> om
                        te zien in welke groep je thuishoort, wanneer de groepsavond is en wie je leiding is.
                    </p>
                    <p class="py-2">Ons seizoen loopt van <strong>{{ $seizoenStart }}</strong> tot
                        <strong>{{ $seizoenEinde }}</strong>, maar je mag op elk moment toetreden. Je bent dan wekelijks welkom op onze groepsavond.
                        Tijdens
                        juli en augustus is het vakantie, maar dan organiseren we natuurlijk wel ons zomerkamp dat zeker niet te
                        missen is!
                    </p>
                    <p>
                        Meegaan op kamp kan trouwens ook zonder lidmaatschap. Ken je een goede vriend of vriendin
                        die bij Jong Nederland Neeritter zit, aarzel dan niet om een uitnodiging te vragen.
                    </p>
                </div>

                {{-- Contributie --}}
                <div>
                    <h2 class="text-2xl font-bold text-jnn-hoody">Wat kost het?</h2>
                    <p>We vragen een jaarlijkse bijdrage van <strong>€ {{ $contributieJaar }}</strong>. Start je later
                        in
                        het seizoen, dan betaal je <strong>€ {{ $contributieMaand }}</strong> per maand vanaf je eerste
                        maand.</p>
                    <p>Je lidmaatschap wordt automatisch elk jaar verlengd, tenzij je je tijdig afmeldt.</p>
                </div>

                {{-- Twijfels / proberen --}}
                <div>
                    <h2 class="text-2xl font-bold text-jnn-hoody">Twijfel je nog?</h2>
                    <p>Kom gerust een keertje proberen! Je mag vrijblijvend een groepsavond meebeleven.</p>
                    <p>Klaar om lid te worden? Download dan het opgaveformulierformulier hieronder en breng het mee naar
                        de volgende groepsavond:</p>

                    <x-knop href="{{ route('download-opgaveformulier') }}" target="_blank" class="my-4">
                        Download Opgaveformulier
                    </x-knop>
                    <p>Heb je nog een vraag, of weet je niet waar ons jeugdhuis is? Dan kan je altijd terecht op onze <a
                            href="{{ route('contact') }}"
                            class="underline text-jnn-logo-bl-d hover:text-jnn-logo-bl-d/70">contactpagina</a>.</p>
                </div>

            </div>

            <div class="md:w-1/2 flex flex-col items-center">
                <img src="{{ asset('images/bitmap/pluumke_blokhut.webp') }}" alt="pluumke op het jeugdhuis"
                    class="w-2/3 object-contain">
            </div>
        </div>

    </section>
</x-layout.public>

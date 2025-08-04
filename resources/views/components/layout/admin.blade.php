<x-root>
    <x-slot:title>
        JNN - Beheer
    </x-slot>
    <x-slot:navbar>
        <div
            class="sticky top-0 z-50 p-2 border-b-4 border-jnn-logo-zw bg-jnn-logo-bl flex justify-between items-center">
            <span class="flex items-end gap-4">
                <span class="text-jnn-logo-zw font-bubblegum text-3xl font-bold">Jong Nederland</span>
                <span class="font-hand text-lg font-bold text-white">Neeritter</span>
            </span>
            <span class="text-2xl font-hand font-bold">
                Website Beheer
            </span>
            <a href="/"
                class="text-jnn-logo-zw bg-white rounded-sm px-2 py-1 text-2xl font-bold font-hand underline">ga naar
                homepage</a>
        </div>
    </x-slot>
    <x-slot:aside>
        <nav class="flex flex-col h-full gap-4 p-4 sticky top-0 bg-white border-r-2 border-r-jnn-logo-zw">
            <a href="">nieuws</a>
            <a href="">activiteiten</a>
            <a href="">documenten</a>
            <a href="">info</a>
            <a href="">beheerder accounts</a>
        </nav>
    </x-slot>
    {{ $slot }}
</x-root>

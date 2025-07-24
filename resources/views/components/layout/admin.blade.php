<x-root>
    <x-slot:title>
        JNN - Beheer
    </x-slot>
    <x-slot:navbar>
        <div class="p-2 border-b-4 border-jnn-logo-zw bg-jnn-logo-bl flex justify-between items-center">
            <span class="flex items-end gap-4">
					<span
						class="text-jnn-logo-zw font-bubblegum text-3xl font-bold"
						>Jong Nederland</span
					>
					<span class="font-hand text-lg font-bold text-white"
						>Neeritter</span
					>
				</span>
                <span class="text-2xl font-hand font-bold">
                    Website Beheer
                </span>
                <a href="/" class="text-jnn-logo-zw bg-white rounded-sm px-2 py-1 text-2xl font-bold font-hand underline">ga naar homepage</a>
        </div>
    </x-slot>
    {{ $slot }}
    <x-slot:footer>
        <div class="bg-jnn-logo-bl p-2 border-t-4 border-jnn-logo-zw">
            <img src="{{ asset('/images/vector/logo.svg') }}" alt="Jong Nederland Neeritter Logo" class="h-12">
        </div>
    </x-slot>

</x-root>

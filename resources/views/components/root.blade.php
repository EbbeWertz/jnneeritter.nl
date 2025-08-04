<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ $head ?? '' }}
    <title>{{ $title ?? 'JongNL Neeritter' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <style>
        @font-face {
            font-family: 'Patrick Hand';
            src: url('{{ asset('/fonts/PatrickHand-Regular.woff2') }}') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }


        @font-face {
            font-family: 'Caveat Brush';
            src: url('{{ asset('/fonts/CaveatBrush-Regular.woff2') }}') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Bubblegum Sans';
            src: url('{{ asset('/fonts/BubblegumSans-Regular.woff2') }}') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
    </style>
</head>

<body>
    <div class="flex min-h-screen bg-jnn-paper-p">
        {{-- fixed at side aside: --}}
        @if (isset($aside))
            <aside class="sticky top-0 z-50 h-screen">
                {{ $aside }}
            </aside>
        @endif
        {{-- full vertical stack --}}
        <div class="w-full min-h-screen flex flex-col">
            {{-- fixed at top nav: --}}
            <nav class="sticky top-0 z-50">
                {{ $navbar }}
            </nav>
            {{-- Scrollable page: --}}
            <div class="flex-grow">
                @if (isset($header))
                    <header>
                        {{ $header }}
                    </header>
                @endif
                <main>
                    {{ $slot }}
                </main>
            </div>
            {{-- footer at page bottom, min screen bottom --}}
            @if (isset($footer))
                <footer>
                    {{ $footer }}
                </footer>
            @endif
        </div>
    </div>
</body>

</html>

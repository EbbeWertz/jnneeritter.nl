<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'JongNL Neeritter' }}</title>
    <link rel="icon" type="image/x-icon" href="favicon.svg">
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
    <div class="flex flex-col min-h-screen">
        <header>
            <nav>
                {{ $navbar }}
            </nav>
        </header>
        <main class="flex-grow bg-jnn-paper-p">
            {{ $slot }}
        </main>
        <footer>
            {{ $footer }}
        </footer>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JongNL Neeritter</title>
  <link rel="icon" type="image/x-icon" href="favicon.svg">
  @vite('resources/js/app.js')
  @vite('resources/css/app.css')
  <style>
    @font-face {
        font-family: 'Patrick Hand';
        src: url('{{ asset('/fonts/PatrickHand-Regular.ttf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    @font-face {
        font-family: 'Caveat Brush';
        src: url('{{ asset('/fonts/CaveatBrush-Regular.ttf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    @font-face {
        font-family: 'Bubblegum Sans';
        src: url('{{ asset('/fonts/BubblegumSans-Regular.ttf') }}') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
</style>
</head>
<body>
    <div id="app">
        <h1 class="text-6xl font-bold">Welkom</h1>

        <div class="p-10">
            <Knop variant="primary" @click="()=>{}" > Word lid </Knop>
            <br><br>
            <Navlink icon="i-sleutel" color="jnn-blok-ge" href='/'>voor leiding</NavBarLinkKnop>
        </div>
    </div>
</body>
</html>

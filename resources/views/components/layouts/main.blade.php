<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Generator" content="Literatux">
    <meta name="Author" content="gdRipoll">
    <meta name="Keywords" content="">
    <meta name="Description" content="">

    <link rel="stylesheet" href="/css/main.css" />

    <title>TL | {{ $title ?? 'TallerLiterario.ar' }}</title>
</head>

<body>

    <header>
        <a href="/">TL</a> | TallerLiterario
    </header>

    <nav>
        <a href="/">Inicio</a> &mdash; {{ $title ?? 'TallerLiterario.ar' }}
    </nav>

    <div class="page">{{ $slot }}</div>

    <footer>byGoose(2021)</footer>

</body>

</html>
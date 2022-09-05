<!DOCTYPE html>
<html lang="rus-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <link rel="stylesheet" href="/css/styles.css">
    <title>{{ $title }}</title>
</head>

<body class="back">
<img class="back2" src="/images/giphy.gif" alt="vinyl">
<header>
    <div class="top-right">
        <div>
            <x-header.head />
        </div>
        <div>
            <x-header.navigation />
        </div>
        @if(url()->full() == route('authorization'))
        <div>
            <x-header.authorization />
        </div>
        @endif
    </div>
</header>

<main>
    @if (isset($picture))
        <div class="middle-right">
            <img id="bookImage" src="{{ $picture }}" alt="{{ $alt }}">
        </div>
    @endif
    <div class="content">
        {{ $slot }}
    </div>
</main>

<footer>
    by Vanito Kurason ©, 2022
</footer>
</body>

</html>

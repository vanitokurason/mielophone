<!DOCTYPE html>
<html lang="rus-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <link rel="stylesheet" href="../css/styles.css">
    <title>{{ $title }}</title>
</head>

<body class="back">
<img class="back2" src="/images/giphy.gif" alt="vinyl">
<header>
    <div class="top-right">
        <div>
            @include('elems.header')
        </div>
        <div>
            @include('elems.navigation')
        </div>
    </div>
</header>

<main>
    <div class="{{ $contentClass }}">
        <p>
            {{ $slot }}
        </p>
    </div>
</main>

<footer>
    by Vanito Kurason ©, 2022
</footer>
</body>

</html>

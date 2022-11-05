<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Portfolio en ligne de Evann Gehin">
    <meta name="author" content="Evann Gehin">
    <title>{{ config('app.name') }} - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skeleton.css') }}">
    @vite('resources/css/app.css')
    <!-- Analytics -->
    <script defer data-domain="evanng1.fr" src="https://analytics.alpasso.fr/js/plausible.js"></script>
    <!-- End Analytics -->
</head>
<body>
    <div class="container">
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
        <script src="https://kit.fontawesome.com/172596d4cd.js" crossorigin="anonymous"></script>
        @vite('resources/js/app.js')
    </div>
</body>
</html>

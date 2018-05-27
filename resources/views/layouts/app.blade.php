<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="Продать алкоголь и табак на территории Москвы и области.Наш сайт предлагает вам возможность продавать дешевые и дорогие алкогольные напитки а также табак.Мы покупаем вино, ром, водка, бренди, виски, шампанское и многое другое.Мы покупаем табак, сигареты, сигары.">
    <meta name="keywords" content="продажа алкоголя, продажа тобака,покупка табака, покупка алкоголя">
    <!-- Scripts -->
    <script src="{{ asset('js/libs.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div>
        @include('layouts.header')
            @yield('content')
        @include('layouts.footer')
    </div>
</body>
</html>

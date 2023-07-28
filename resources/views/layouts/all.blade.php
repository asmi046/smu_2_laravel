<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title') - СМУ-2</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:site_name" content="Магазин индийских товаров - Mini India" />
    <meta property="og:image" content="{{asset('img/og_img.jpg')}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />

	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/logo-mini.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU&coordorder=longlat&apikey=c38cf20b-9826-491c-abe0-0653932a0e17" type="text/javascript"></script>

    @vite([
        'resources/css/app.css',
        'public/css/style.css',
        'public/css/form-element.css',
        'public/css/text-styles.css',
        'resources/js/app.js',
    ])

</head>

<body>
	<div class="wrapper " id="global_app">
        <x-svg-sprite></x-svg-sprite>
        <x-mobile-menu></x-mobile-menu>
        <x-head></x-head>
        <div class="page">


            <modal-window rout="/send_consult" redirect="/thencs" hesh="showModal" title="Задать вопрос" subtitle="Мы свяжемся с Вами в течении 15 минут" showarea="false"></modal-window>
            @yield('content')

            <x-footer></x-footer>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Стоматологическая Клиника Доктора Малькова')</title>
    <meta name="description" content="@yield(
        'meta_description',
        'Качественное лечение зубов с гарантией в стоматологии с современным оборудованием и
            опытными врачами. Доверие, безопасность и гарантия на все услуги.'
    )">
    <meta name="keywords" content="@yield('meta_keywords', 'стоматологическая клиника, лечение зубов, современные технологии, квалифицированные врачи, безопасное лечение, гарантия на услуги, стоматология для всей семьи')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'Стоматологическая Клиника Доктора Малькова')">
    <meta property="og:description" content="@yield(
        'og_description',
        'Качественное лечение зубов с гарантией в стоматологии с современным оборудованием и
            опытными врачами. Доверие, безопасность и гарантия на все услуги.'
    )">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('default_image.jpg'))">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Стоматологическая Клиника Доктора Малькова')">
    <meta name="twitter:description" content="@yield(
        'twitter_description',
        'Качественное лечение зубов с гарантией в стоматологии с современным оборудованием и
            опытными врачами. Доверие, безопасность и гарантия на все услуги.'
    )">
    <meta name="twitter:image" content="@yield('twitter_image', asset('default_image.jpg'))">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="body">

    <x-navigation />
    <x-header />

    <main>
        @yield('content')
    </main>

    <x-footer />
    <x-modals.callback />
    <x-modals.thanks />
</body>

</html>

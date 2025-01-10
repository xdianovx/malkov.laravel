<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (!isset($page))
        <title>404 - Page not found</title>
        <meta name="description" content="Page not found">
    @else
        <title>{{ $page->meta_title }}</title>
        <meta name="description" content="{{ $page->meta_description }}">
        <meta name="keywords" content="{{ $page->meta_keywords }}">
        <meta property="og:locale" content="ru_RU">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{{ $page->og_title }}">
        <meta property="og:description" content="{{ $page->og_description }}">
        <meta property="og:url" content="{{ $page->og_url }}">
        <meta property="og:site_name" content="{{ $main_info->og_site_title }}">
        <meta property="og:image" content="{{ asset('storage') . '/' . $main_info->og_site_image }}">
    @endif
    <link rel="shortcut icon" href="{{ asset('img/favicons/favicon.ico') }}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="body">

    <x-navigation />
    <x-header />
    {{-- <section class="mt-4">
        <div class="container">
            <x-ui.breadcrumbs class="breadcrumbs" />
        </div>
    </section> --}}
    <main>
        @yield('content')
    </main>

    <x-footer />
    <x-modals.callback />
    <x-modals.thanks />
</body>

</html>

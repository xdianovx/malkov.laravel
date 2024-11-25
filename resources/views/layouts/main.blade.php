<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body class="body">

    <x-navigation />
    <x-header />
            <section class="section breadcrumbs">
                <div class="container">
                    <x-ui.breadcrumbs class="breadcrumbs" />
                </div>
            </section>
    <main>
        @yield('content')
    </main>

    <x-footer />
    <x-modals.callback />
    <x-modals.thanks />
</body>

</html>

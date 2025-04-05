<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ c('seo.title') }}</title>

        <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/favicon.ico">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
        @livewireStyles
    </head>
    <body class="antialiased">
        @inertia
        @livewireScripts
    </body>
</html>

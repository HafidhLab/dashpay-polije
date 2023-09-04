<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{ $title ?? 'Polijepay' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    @include('layouts.partials.styles')
    @livewireStyles
</head>
<body>
    <main>
        {{ $slot }}
    </main>

    @include('layouts.partials.scripts')
    @livewireScripts
</body>
</html>

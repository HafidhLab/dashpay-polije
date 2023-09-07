<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>{{ $title ?? 'Polijepay' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title"  content="Polijepay - PT.Kreasi Cyber Indonesia">
    <meta name="author" content="PT.Kreasi Cyber Indonesia">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Polijepay adalah solusi e-money inovatif yang dapat berbelanja atau melakukan transaksi.">
    <link rel="canonical" href="https://polije.kcbindo.co.id/">
    <meta name="keywords" content="polijepay, polije, payment, keuangan, uang, bisnis">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

@include('layouts.partials.styles')
@stack('style')
@livewireStyles

</head>
<body>

@include('layouts.components.sidebar')

    <main class="content">

        @include('layouts.components.nav')

        {{ $slot }}

        @include('layouts.components.footer')
    </main>

@include('layouts.partials.scripts')
@stack('script')
@livewireScripts
</body>
</html>

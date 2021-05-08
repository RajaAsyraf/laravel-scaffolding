<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Laravel Scaffolding Template">
    <meta name="author" content="Raja Asyraf">
    <meta name="keyword" content="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="robots" content="noindex">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendors/@coreui/coreui.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/free.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/brand.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/flag.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js" defer></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js') }}" defer></script>
    <script src="{{ asset('vendors/@coreui/utils/coreui-utils.js') }}" defer></script>
    <script src="{{ asset('vendors/@coreui/js/main.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="c-app">
    @include('layouts.navigation')
    <div class="c-wrapper c-fixed-components">
        @include('layouts.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        {{ $slot }}
                    </div>
                </div>
            </main>
            <footer class="c-footer">
                <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
                <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
            </footer>
        </div>
    </div>
</body>

</html>
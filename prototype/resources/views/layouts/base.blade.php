<!doctype html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Credit Union - ') }} @yield('title')</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans overflow-hidden">
    <div id="app">
        <main>
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </main>
        <!-- Slide Menu -->
        <side-menu-push-component></side-menu-push-component>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

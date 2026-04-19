<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ILOGE | Executive Portal')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="@yield('bodyClass', 'bg-surface text-on-surface selection:bg-primary selection:text-on-primary')">
    @include('admin.partials.sidebar')
    @include('admin.partials.header')

    <main class="@yield('mainClass', 'min-h-screen px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:px-12 lg:pt-32')">
        @yield('content')
        @include('admin.partials.footer')
    </main>

    @yield('floatingAction')
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- Header -->
    @include('partials.header')
    <!-- Jumbotron -->
    @include('partials.jumbotron')
    <!-- Main -->
    <main class="">
        @yield('content')
    </main>
    <!-- Blue strip -->
    @include('partials.strip')
    <!-- Info -->
    @include('partials.info')
    <!-- Footer -->
    @include('partials.footer')

</body>

</html>
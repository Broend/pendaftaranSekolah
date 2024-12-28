<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    @if (!in_array(request()->route()->getName(), ['login', 'register']))
        @include('partials.navbar')
    @endif
    <div @class([
        'pt-[30px] px-5 lg:px-[75px] relative' => !in_array(
            request()->route()->getName(),
            ['login', 'register']),
    ])>
        @yield('content')
    </div>


</body>

</html>

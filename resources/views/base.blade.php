<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <script src="{{ asset('vendor/jquery-3.7.1.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
    </style>
</head>

<body>
    <div id="loader">
        <div class="relative w-12 h-12 rounded-full animate-spin" id="loading">
            <div class="absolute top-0 left-0 w-full h-full border-t-4 border-blue-500 rounded-full"></div>
            <div class="absolute top-0 left-0 w-full h-full border-r-4 border-green-500 rounded-full"></div>
            <div class="absolute top-0 left-0 w-full h-full border-b-4 border-yellow-500 rounded-full"></div>
        </div>
    </div>
    <div id="content">
        @if (!in_array(request()->route()->getName(), ['login', 'register.pg']))
            @include('partials.navbar')
        @endif
        <div @class([
            'pt-[50px] top-[60px] px-5 lg:px-[75px] relative' => !in_array(
                request()->route()->getName(),
                ['login', 'register.pg']),
        ])>
            @yield('content')
        </div>
    </div>

    <script>
        window.onload = function() {
            const loader = document.getElementById('loader')
            const content = document.getElementById('content')

            loader.style.display = 'none'
            content.style.display = 'block'
        }
    </script>
</body>

</html>

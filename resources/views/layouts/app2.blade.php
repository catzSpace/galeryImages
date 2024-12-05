<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        *{
            background-color: #000; 
            color: #fff;
        }
        a{
            text-decoration: none;
            color: #636b6f;
        }
    </style>

    @yield('css')
</head>
<body class="text-light">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" ></script>

    @yield('js')
</body>
</html>

@extends('layouts.app2')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .down-arrow {
                position: absolute;
                top: calc(100vh - 90px);
                left: calc(50% - 14px);
                width: 0;
                height: 30px;
                border: 2px solid;
                border-radius: 2px;
                animation: jumpInfinite 1.5s infinite;
            }

            .down-arrow:after {
                content: " ";
                position: absolute;
                top: 12px;
                left: -8px;
                width: 16px;
                height: 16px;
                border-bottom: 4px solid;
                border-right: 4px solid;
                border-radius: 4px;
                transform: rotateZ(45deg);
            }

            @keyframes jumpInfinite {
            0% {
                margin-top: 0;
            }
            50% {
                margin-top: 20px;
            }
            100% {
                margin-top: 0;
            }
            }

        </style>
    </head>
    <body class="bg-dark text-light">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('admin.home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CATZSPACE
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://github.com/catzSpace">GitHub</a>
                </div>
                <div class="down-arrow"></div>
            </div>
            @section('content')
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="card-columns">
                              @foreach($files as $file)
                                <div class="card">
                                    <img src="{{asset($file->url)}}" alt="" class="card-img-top img-fluid">
                                </div>
                              @endforeach
                            </div>

                            {{$files->links()}}

                        </div>
                    </div>
                </div>
            @endsection
        </div>
    </body>
</html>

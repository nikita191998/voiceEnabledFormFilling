<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Voice enabled form filling</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <style>
    </style>

    <style>
        body {
            font-family: 'Nunito';
            background: black;
        }

        a {
            cursor: pointer;
        }

        .card {
            height: 500px;
        }

        #homepage {
            background-image: url('{{ asset('images/bg-01.jpg') }}');
            background-size: cover;

        }

    </style>
</head>

<body class="container-fluid" id="homepage">
    <div class="row" style="height:728px">
        <div class="col-6 offset-3">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else

                        <div>
                            @include("auth.login")
                        </div>
                        <div>
                            @include("auth.register")
                        </div>
                @endif
            </div>
            @endif
        </div>
        </div>
        <hr>

        <div style="height:750px;backdrop-filter: blur(5px);">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-3">
                        <h2>About US</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-8  ">
                    <span style="font-size:1.9rem">
                        Our voice Assissted form filling will help you fill forms with easy and refrain you from typing in
                        the same data again and again(which you don't want to anyway)
                    </span>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-3 mr-4">
                    <div><img src="{{ asset('images/rp.jpeg') }}" style="height:250px;width:100%;    border-radius: 10px;"
                            alt=""></div>
                </div>
                <div class="col-3 ml-5">
                    <div><img src="{{ asset('images/r.jpeg') }}" style="height: 250px;width:100%;    border-radius: 10px;"
                            alt=""></div>
                </div>
            </div>
        </div>
        @include("footer")
    </body>
    <script>
        const login = document.getElementById('login')
        const register = document.getElementById('register')

        function showlogin() {
            login.classList.add('show');
            login.classList.remove('hidden');
            register.classList.remove('show');
            register.classList.add('hidden');
        }

        function showRegister() {
            login.classList.add('hidden');
            login.classList.remove('show');
            register.classList.remove('hidden');
            register.classList.add('show');
        }

    </script>

    </html>

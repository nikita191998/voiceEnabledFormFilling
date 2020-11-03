<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
                background:black;
            }
            a{
                cursor:pointer;
            }
            .card{
                height:600px;
            }
            #homepage{
            background-image: url('{{ asset("images/Combined_Advertisment-2.jpg") }}');
            }
        </style>
    </head>
    <body class="container-fluid" id="homepage">
        <div class="row" style="height:100%">
            <div class="col-6">
                <img src="{{ asset('images/Combined_Advertisment-2.jpg') }}" style="width:100%;height:100%">
            </div>
            <div class="col-6">

                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                        <div class="row d-flex justify-content-center">
                        <button id="loginb" class="active btn btn-secondary" onclick="showlogin()" >Login</button>
                        &nbsp | &nbsp
                        <button id="registerb" class="btn btn-secondary" onclick="showRegister()">Register</button>
                        </div>
                        <div>
                        @include("auth.login")
                        </div>
                        <div>
                        @include("auth.register")

                        </div>
                        @endif
                    </div>
                @endif
            <div>
        </div>
    </body>
    <script>
        const login=document.getElementById('login')
        const register=document.getElementById('register')
        function showlogin(){
            login.classList.add('show');
            login.classList.remove('hidden');
            register.classList.remove('show');
            register.classList.add('hidden');
            document.getElementById('loginb').classList.toggle("active");
            document.getElementById('registerb').classList.toggle("active");

        }
        function showRegister(){
            login.classList.add('hidden');
            login.classList.remove('show');
            register.classList.remove('hidden');
            register.classList.add('show');
            document.getElementById('registerb').classList.toggle("active");
            document.getElementById('loginb').classList.toggle("active");

        }
    </script>
</html>

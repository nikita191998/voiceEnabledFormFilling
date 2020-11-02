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
            }
        </style>
    </head>
    <body class="container-fluid">
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
                        <div class="row d-flex justify-content-between">
                        <a onclick="showlogin()" >Login</a>
                        <a onclick="show register()">Register</a>
                        </div>
                        @include("auth.login")
                        @include("auth.register")
                        @endif
                    </div>
                @endif
            <div>
        </div>
    </body>
    <script>
function showlogin(){
document.getElementById('login').classList.addClass('show')
}
    </script>
</html>

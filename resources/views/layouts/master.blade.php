<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GasmAPI</title>
    {{-- CSRF Token --}}
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    {{-- Bootstrap Stylesheet --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- Custmos css files --}}
    <link rel="stylesheet" href="{{ url('./vendor/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('./css/main.css?v='.time()) }}">
    <link rel="stylesheet" href="{{ url('./css/style.css?v='.time()) }}">
    {{-- FontAwesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
    @yield('content')



    {{-- Scripts resource of bootstrap starter --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" integrity="sha512-qzrZqY/kMVCEYeu/gCm8U2800Wz++LTGK4pitW/iswpCbjwxhsmUwleL1YXaHImptCHG0vJwU7Ly7ROw3ZQoww==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    {{-- Google Maps API --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC33AxXmwEkCfwRuKyqfOsDW8-gfcreGCA&callback=initMap&libraries=places" async defer></script>
    {{-- Custom scripts --}}
    <script src="{{ url('./vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ url('./js/map.js') }}"></script>
    <script src="{{ url('./js/ajaxSearch.js') }}"></script>
    <script src="{{ url('./js/main.js') }}"></script>
</body>
</html>

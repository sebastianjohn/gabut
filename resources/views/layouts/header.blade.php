<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Photography') }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dist/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dist/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dist/owl.theme.default.css') }}">

</head>
<body>

    <div id="app">

        <header class="header">

          <h1 class="logo">

            <a href="{{ route('welcome') }}">{{ config('app.name')}}</a>

          </h1>

          <button class="hamburger hamburger--minus d-md-none d-lg-none top-0 position-a" type="button">

            <span class="hamburger-box">

              <span class="hamburger-inner"></span>

            </span>

          </button>


          <ul class="main-nav">

            <li><a href="{{ route('welcome') }}">Home</a></li>

            <li><a href="#">Portofolio</a></li>

            <li><a href="{{ route('about') }}">About</a></li>

          </ul>

        </header>

        @yield('content')

    </div>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/dist/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('js/dist/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>

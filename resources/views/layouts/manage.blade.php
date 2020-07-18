<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Varovný systém České republiky - upravit uživatele</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>

    @include('_includes.nav.main')

    @include('_includes.nav.manage')

    <div class="management-area" id="app">

        @yield('content')

    </div>

    <!-- Scripts -->
    <script type="text/javascript">
      $(document).ready(function () {
        $("#button-trigger").click(function () {
          $(".dropdown").toggleClass("is-active");
        });

        $("#button-trigger").blur(function () {
          $(".dropdown").removeClass("is-active");
        });
      });
    </script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>
</html>

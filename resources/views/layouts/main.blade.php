<!DOCTYPE html>
<html lang="cs">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="RUs_mhYQZPRu8WCBiWa2gVwSsUAnzdLBva3eEiqHNNg" />
    {!! SEOMeta::generate() !!}
    <title>Varovný systém České republiky | Domovská stránka</title>
    <link rel="alternate" type="application/atom+xml" title="News" href="/feed">
    <link rel="icon" href="../img/Varovny-System-Logo-Icon.png">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('styles')
    <script type="text/javascript" src="http://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script></head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Přepnout navigaci</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="logo" class="navbar-brand" href="{{ route('posts') }}"><img class="height-100" alt="Varovný systém ČR" src="../img/Varovny-System-Logo.png"></img></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="{{ (request()->is('')) ? 'active' : '' }}"><a href="{{ route('posts') }}">Varování</a></li>
                <li class="{{ (request()->is('o-nas') || request()->is('about')) ? 'active' : '' }}"><a href="{{ route('about') }}">O nás</a></li>
                <li class="{{ (request()->is('kontakt') || request()->is('contact')) ? 'active' : '' }}"><a href="{{ route('contact') }}">Kontakt</a></li>
                <li class="{{ (request()->is('bud-varovan') || request()->is('be-warned')) ? 'active' : '' }}"><a href="{{ route('be-warned') }}">Buď varován</a></li>
              </ul>
              <!--
              <div class="dropdown language">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <a id="firstLanguage" href="https://varovny-system.herokuapp.com/"><span class="flag-icon flag-icon-cz"></span>Česky</a>
                  <i class="fa fa-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right text-right language">
                  <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-gb"> </span>English</a>
                </div>
              </div>
            -->
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">2020 Varovný systém České republiky</p>
                    <p><a href="https://www.freeprivacypolicy.com/privacy/view/0d81a9ded479540d56e264a89405aa01">Privacy Policy</a></p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/Varovný-systém-proti-přírodním-katastrofám-ČR-100491714886173/" class="i fa fa-facebook"></a></li>
                            <li><a href="https://twitter.com/VarovnySystem" class="i fa fa-twitter"></a></li>
                            <li><a href="https://github.com/patmull/dws" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-2JRzNxMJiS0aHOJjG+liqsEOuBb6++9cY4dSOyiijX4=" crossorigin="anonymous"></script>
    <script src="administration/js/jquery-2.2.3.min.js"></script>
    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

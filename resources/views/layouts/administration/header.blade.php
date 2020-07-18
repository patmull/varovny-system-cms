<header class="main-header">
  <!-- Logo -->
  <a href="{{ route('home') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Varovný systém ČR |</b>Administrace</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Varovný systém ČR |</b>Administrace</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a> -->

    <div class="navbar-custom-menu">
      <ul id="profileButton" class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ Auth::user()->avatar() }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ Auth::user()->avatar() }}" class="img-circle" alt="{{ Auth::user()->name }}'s Avatar Image">

              <p>
                {{ Auth::user()->name }}
                <small>{{ Auth::user()->roles->first()->display_name ?? '' }}</small>
              </p>

            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ url('/edit-account') }}" class="btn btn-default btn-flat">Profil</a>
              </div>
              <div class="pull-right">
                 @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Odhlásit</a>
                     @include('_includes.forms.logout')

              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

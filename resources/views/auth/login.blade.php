@extends('layouts.app')

@section('content')

<div class="login-box">

<div class="card">
  <div class="card-content">
    <!-- /.login-logo -->
      <div class="login-logo">
        <a href="{{ route('home') }}"><b>Administrace</b><br> Disaster Warning System <br>Open Source Solution for early warning</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Přihlásit se</p>

        <form action="{{ route('login') }}" method="POST" role="form">
          {{csrf_field()}}

          <div class="form-group has-feedback">
            <input class="input {{$errors->has('email') ? 'is-danger' : ''}}, form-control" type="text" name="email" value="" id="email" placeholder="name@doamin.com" required>
            <span class="fa fa-envelope form-control-feedback"></span>

            <!-- Laravel condition -->
            @if ($errors->has('email'))
              <p class="help has-text-danger">Vyskytla se chyba.</p>
              <p class="help has-text-danger">{{$errors->first('email')}}</p>
            @endif

          </div>
          <div class="form-group has-feedback">
            <input class="input {{$errors->has('password') ? 'is-danger' : ''}}, form-control" type="password" name="password" id="password" placeholder="password" required>
            <span class="fa fa-lock form-control-feedback"></span>

            @if ($errors->has('password'))
              <p class="help text-danger">Vyskytla se chyba.</p>
              <p class="help text-danger">{{$errors->first('password')}}</p>
            @endif

          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Zapamatovat
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Přihlásit</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <br>
        <p class="has-text-centered m-t-10"><a href="{{route('password.request')}}" class="muted-text">Zapoměli jste heslo?</a></p>

      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
  </div>

</div>



@endsection

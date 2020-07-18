@extends('layouts.app')

@section('content')

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-100">
    <div class="card">
      <div class="card-content">
          <h2 class="title">Přihlášení</h2>

          <form class="{{route('login')}}" method="POST" role="form">
            {{csrf_field()}}
            <div class="field">
              <label for="email" class="label">Emailová adresa</label>
              <p class="control">
                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" value="" id="email" placeholder="name@doamin.com" required>
              </p>
              <!-- Laravel condition -->
              @if ($errors->has('email'))
                <p class="help has-text-danger">Vyskytla se chyba.</p>
                <p class="help has-text-danger">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="field">
              <label for="password" class="label">Heslo</label>
              <p class="control">
                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" required>
              </p>
              @if ($errors->has('password'))
                <p class="help has-text-danger">Vyskytla se chyba.</p>
                <p class="help has-text-danger">{{$errors->first('password')}}</p>
              @endif
            </div>
            <div class="field m-t-20">
              <p class="control">
                <label class="checkbox">
                  <input type="checkbox">
                  Zapamatovat
                </label>
                <button class="button is-success is-fullwidth">
                  Přihlásit
                </button>
              </p>
            </div>
          </form>
          <p class="has-text-centered m-t-10"><a href="{{route('password.request')}}" class="muted-text">Zapoměli jste heslo?</a></p>

      </div>
    </div>
  </div>
</div>

@endsection

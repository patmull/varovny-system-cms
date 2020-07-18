
@extends('layouts.app')

@section('content')

<div class="columns">
  <div class="column is-one-third is-offset-one-third m-t-100">
    <div class="card">
      <div class="card-content">
          <h2 class="title">Přidat se</h2>

          <form action="{{route('register')}}" method="POST" role="form">
            {{csrf_field()}}
            <div class="field">
              <label for="name" class="label">Jméno</label>
              <p class="control">
                <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="text" name="name" value="" id="name" required>
              </p>
              <!-- Laravel condition -->
              @if ($errors->has('name'))
                <p class="help has-text-danger">Vyskytla se chyba.</p>
                <p class="help has-text-danger">{{$errors->first('name')}}</p>
              @endif
            </div>
            <div class="field">
              <label for="email" class="label">E-mail</label>
              <p class="control">
                <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" id="email" placeholder="name@doamin.com" required>
              </p>
              @if ($errors->has('email'))
                <p class="help has-text-danger">Vyskytla se chyba.</p>
                <p class="help has-text-danger">{{$errors->first('email')}}</p>
              @endif
            </div>
            <div class="field">
              <label for="password" class="label">Password</label>
              <p class="control">
                <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" value="" id="password" required>
              </p>
              @if ($errors->has('password'))
                <p class="help has-text-danger">Vyskytla se chyba.</p>
                <p class="help has-text-danger">{{$errors->first('password')}}</p>
              @endif
            </div>
            <div class="field">
              <label for="confirm-password" class="label">Potvrdit heslo</label>
              <p class="control">
                <input class="input {{$errors->has('confirm-password') ? 'is-danger' : ''}}" type="password" name="confirm-password" value="" id="confirm-password" required>
              </p>
              @if ($errors->has('confirm-password'))
                <p class="help has-text-danger">Vyskytla se chyba.</p>
                <p class="help has-text-danger">{{$errors->first('confirm-password')}}</p>
              @endif
            </div>
            <div class="field m-t-20">
              <p class="control">
                <button class="button is-success is-fullwidth">
                  Registrovat
                </button>
              </p>
            </div>
          </form>
          <p class="has-text-centered m-t-10"><a href="{{route('login')}}" class="muted-text">Máte již účet?</a></p>

      </div>
    </div>
  </div>
</div>

@endsection

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

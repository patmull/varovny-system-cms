@extends('layouts.app')

@section('content')

  <div class="management-area">
    <div class="margin-container">
    <div class="columns m-t-30">
      <div class="column">
        <h1 class="title">Upravit uživatele</h1>
        <h3 class="subtitle">{{$user->name}}</h3>
      </div>
    </div>
    <hr>

    <div class="columns">
      <div class="column">
        <form action="{{route('users.update', $user->id)}}" method="POST">
          {{method_field('PUT')}}
          {{csrf_field()}}
        <div class="field">
          <label for="name" class="label">Jméno</label>
          <p class="control">
            <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
          </p>
        </div>

        <div class="field">
          <label for="email" class="label">E-mail</label>
          <p class="control">
            <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
          </p>
        </div>

        <div class="field">
          <p class="control">
            <div class="m-t-30">
              <div class="field">
                  <b-radio v-model="password_options"  name="password_options" native-value="keep">Neměnit heslo</b-radio>
              </div>
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="auto">Automaticky generovat heslo</b-radio>
              </div>
              <div class="field">
                <b-radio v-model="password_options" name="password_options" native-value="manual">Manuálně nastavit heslo</b-radio>
                <p class="control">
                  <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                </p>
              </div>

            </div>

          </p>
        </div>

        <button class="button is-success">Updavit uživatele</button>
      </form>
      </div>
    </div>

  </div>
  </div>

  @endsection

  @section('scripts')
    <script>

        window.addEventListener('load', function() {
            var app = new Vue({
                el: '#app',
                data: {
                    password_options: 'keep'
                }
            });
        });
    </script>

  @endsection

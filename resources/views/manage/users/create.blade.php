@extends('layouts.manage')

@section('content')

<div class="management-area">
  <div class="margin-container">
  <div class="columns m-t-30">
    <div class="column">
      <h1 class="title">Vytvořit nového uživatele</h1>
    </div>
  </div>
  <hr>

  <div class="columns">
    <div class="column">
      <form action="{{route('users.store')}}" method="POST">
        @CSRF
        <!--

        In this case, Laravel is requiring this field to be sent with the request so that it can verify the request is not a forgery when posted back.
          https://stackoverflow.com/questions/5207160/what-is-a-csrf-token-what-is-its-importance-and-how-does-it-work/33829607#33829607
      -->
      <div class="field">
        <label for="name" class="label">Jméno</label>
        <p class="control">
          <input type="text" class="input" name="name" id="name">
        </p>
      </div>

      <div class="field">
        <label for="email" class="label">E-mail</label>
        <p class="control">
          <input type="text" class="input" name="email" id="email">
        </p>
      </div>

      <div class="field">
        <label for="password" class="label">Heslo</label>
        <p class="control">
          <input type="text" class="input" name="password" id="password" :disabled="auto_password" placeholder="Type password">
          <div class="b-checkbox is-warning">
              <input id="checkbox" class="styled" checked type="checkbox" v-model="auto_password">
              <label for="checkbox">
                  Použít automaticky generované heslo
              </label>
          </div>
        </p>
      </div>

      <button class="button is-success">Vytvořit uživatele</button>
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
                  auto_password: true
              }
          });
      });
  </script>

@endsection

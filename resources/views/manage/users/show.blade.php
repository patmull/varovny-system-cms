@extends('layouts.manage')

@section('content')
<div class="margin-container">
  <div class="columns m-t-30">
    <div class="column">
      <h1 class="title">Detaily uživatele</h1>
      <h3 class="subtitle">{{$user->name}}</h3>
    </div>

    <div class="column">
      <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user"></i>Upravit uživatele</a>
    </div>
  </div>
<hr>

  <div class="columns">
    <div class="column">
      <div class="field">
        <label for="name" class="label">Jméno</label>
        <pre>{{$user->name}}</pre>
      </div>

      <div class="field">
        <div class="field">
          <label for="email" class="label">E-mail</label>
          <pre>{{$user->email}}</pre>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

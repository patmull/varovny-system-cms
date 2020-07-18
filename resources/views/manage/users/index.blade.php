@extends('layouts.manage')

@section('content')
<div class="margin-container">
    <div class="columns m-t-20">
      <div class="column">
        <h1 class="title">Spravovat uživatele</h1>
      </div>
      <div class="column">
        <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus"></i>Vytvořit nové uživatele</a>
      </div>
    </div>
    <hr class="m-t-0">

  <div class="card">
    <div class="card-content">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Jméno</th>
            <th>E-mail</th>
            <th>Datum vytvoření</th>
            <th>Akce<th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->toFormattedDateString('d/m/Y')}}</td>
            <td><a href="{{route('users.edit', $user->id)}}" class="button is-outlined">Upravit</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{$users->links()}}
  </div>
</div>

@endsection

@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Upravit povolení</h1>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Vytvořit nová povolení</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="card">
      <div class="card-content">
        <table class="table is-narrow">
          <thead>
            <tr>
              <th>Jméno</th>
              <th>Slug</th>
              <th>Popis</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($permissions as $permission)
              <tr>
                <th>{{$permission->display_name}}</th>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td class="has-text-right"><a class="button is-outlined is-small m-r-5" href="{{route('permissions.show', $permission->id)}}">View</a><a class="button is-outlined is-small" href="{{route('permissions.edit', $permission->id)}}">Upravit</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->
  </div>
@endsection

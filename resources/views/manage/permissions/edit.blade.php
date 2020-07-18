@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Zobrazit detaily povolení</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i>Upravit povolení</a>
      </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('permissions.update', $permission->id)}}" method="POST">
      {{csrf_field()}}
      {{method_field('PUT')}}

      <div class="field">
        <label for="display_name" class="label">Název:</label>
        <p class="control">
          <input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
        </p>
      </div>

      <div class="field">
        <label for="name" class="label">Slug <small>(odkaz)</small></label>
        <p class="control">
          <input type="text" class="input" name="name" id="name" value="{{$permission->name}}" disabled>
        </p>
      </div>

      <div class="field">
        <label for="description" class="label">Popis</label>
        <p class="control">
          <input type="text" class="input" name="description" id="description" placeholder="Describe what this permission does" value="{{$permission->description}}">
        </p>
      </div>

      <button class="button is-primary">Uložit změny</button>
    </form>
  </div>
@endsection

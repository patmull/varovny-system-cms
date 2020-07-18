@extends('layouts.manage')

@section('content')

<div class="margin-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Upravit role</h1>
    </div>
    <div class="column">
      <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-15"></i></a>
    </div>
  </div>
  <hr class="m-t-0">

  <div class="columns is-multiline">

    @foreach($roles as $role)
      <div class="column is-one-quarter">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <h3 class="title">{{$role->display_name}}</h3>
                <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                <p>
                  {{$role->description}}
                </p>
              </div>

              <div class="columns is-mobile">
                <div class="column is-one-half">
                    <a href="{{route('roles.show', $role->id)}}" class="button is-primary is-fullwidth">Detaily</a>
                </div>
                <div class="column is-one-half">
                    <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-fullwidth">Upravit</a>
                </div>
              </div>
            </div>
          </article>
        </div>

      </div>
     @endforeach

  </div>


</div>



@endsection

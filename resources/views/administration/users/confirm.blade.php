@extends('layouts.administration.main')

@section('title', 'Potvrzení smazání | Varovný systém ČR')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Uživatel
      <small>Potvrdit smazání</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Nástěnka</a>
      </li>
      <li><a href="{{ route('administration.users.index') }}">Kategorie</a></li>
      <li class="active">Potvrzení smazání</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($user, [
                  'method' => 'DELETE',
                  'route' => ['administration.users.destroy', $user->slug],
                  'files' => TRUE,
                  'id' => 'user-form'
                ]) !!}

                <div class="col-xs-9">
                  <div class="box">
                    <div class="box-body">
                      <p>You have selected this user for delete.</p>
                      <p>
                        <h3>ID #{{ $user->id }}: {{ $user->name }}</h3>
                      </p>
                      <p>
                        What to do with all posts of this user?
                      </p>
                      <p>
                        <input type="radio" name="delete_option" value="delete">Delete All Content
                      </p>
                      <p>
                        <input type="radio" name="delete_option" value="attribute" checked>Attribute all content to:
                        {!! Form::select('selected_user', $users, null, ['class' => 'form-control']) !!}
                      </p>

                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-danger">Confirm Delete</button>
                      <a href="{{ route('administration.users.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                  </div>
                </div>

              {!! Form::close() !!}


            </div>

          </div>
          <!-- /.box -->
        </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

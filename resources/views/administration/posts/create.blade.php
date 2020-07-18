@extends('layouts.administration.main')

@section('title', 'Varovný systém ČR | Přidat nový příspěvek')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       Index varování
      <small>Vytvořit nový příspěvek</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Nástěnka</a>
      </li>
      <li><a href="{{ route('administration.posts.index') }}">Varování</a></li>
      <li class="active">Vytvořit nový</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($postFound, [
                  'method' => 'POST',
                  'route' => 'administration.posts.store',
                  'files' => TRUE,
                  'id' => 'post-form'
                ]) !!}

                @include('administration.posts.form')

                <h3>Publikovat</h3>
                <p>
                  {!! Form::submit('Nové varování', ['id' => 'new-post-btn', 'class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => '1'])!!}
                  {!! Form::submit('Uložit koncept', ['id' => 'draft-btn', 'class' => 'btn btn-default', 'name' => 'draftbutton', 'value' => '1'])!!}
                  {!! Form::close() !!}
               </p>
              </div>


            </div>

          </div>
          <!-- /.box -->
        </div>
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@extends('layouts.administration.main')

@section('title', 'Přidat nového uživatele | Varovný systém ČR')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Uživatelé
      <small>Přidat nového uživatele</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Nástěnka</a>
      </li>
      <li><a href="{{ route('administration.users.index') }}">Kategorie</a></li>
      <li class="active">Přidat novou</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($userFound, [
                  'method' => 'POST',
                  'route' => 'administration.users.store',
                  'files' => TRUE,
                  'id' => 'user-form'
                ]) !!}

                @include('administration.users.form')

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

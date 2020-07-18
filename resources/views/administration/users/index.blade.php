@extends('layouts.administration.main')

@section('title', 'Uživatel | Varovný systém ČR')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Uživatel
      <small>Zibrazená všech uživatelů</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Nástěnka</a>
      </li>
      <li><a href="{{ route('administration.users.index') }}">Uživatelé</a></li>
      <li class="active">Všichni uživatelé</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="pull-left">
                <a href="{{ route('administration.users.create') }}" class="btn btn-success">Přidat nového uživatele</a>
              </div>

            <div class="pull-right">

            </div>
          </div>

          <div class="box-body">
            @include('administration.pieces.messages')

            @if(!$users->count())
                <div class="alert alert-warning">
                  No user found!
                </div>
            @else
                     @include('administration.users.table')
            @endif
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
              <div class="pull-left">
                {{ $users->appends(Request::query())->links() }}
              </div>
              <div class="pull-right">
                <small> {{ $usersCount }} items</small>
              </div>
            <br>
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

@extends('layouts.administration.main')

@section('title', 'Kategorie | Varovný systém ČR')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kategorie
      <small>Zobrazeny všechny kategorie</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Nástěnka</a>
      </li>
      <li><a href="{{ route('administration.categories.index') }}">Kategorie</a></li>
      <li class="active">Všechny kategorie</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="pull-left">
                <a href="{{ route('administration.categories.create') }}" class="btn btn-success">Přidat novou kategorii</a>
              </div>

            <div class="pull-right">

            </div>
          </div>

          <div class="box-body">
            @include('administration.pieces.messages')

            @if(!$categories->count())
                <div class="alert alert-warning">
                  Nebyla nalezena žádná kategorie!
                </div>
            @else
                     @include('administration.categories.table')
            @endif
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
              <div class="pull-left">
                {{ $categories->appends( Request::query() )->links() }}
              </div>
              <div class="pull-right">
                <small> {{ $categoriesCount }} items</small>
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

@extends('layouts.administration.main')

@section('title', 'Přidat novou kategorii | Varovný systém ČR')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kategorie
      <small>Vytvořit novou kategorii</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Nástěnka</a>
      </li>
      <li><a href="{{ route('administration.categories.index') }}">Kategorie</a></li>
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
              {!! Form::model($category, [
                  'method' => 'POST',
                  'route' => 'administration.categories.store',
                  'files' => TRUE,
                  'id' => 'category-form'
                ]) !!}

                @include('administration.categories.form')

                <h3>Publikovat</h3>
                <p>
                  {!! Form::submit('Vytvořit novou kategorii', ['class' => 'btn btn-primary'])!!}
                  {!! Form::submit('Uložit jako rozpracovanou', ['id' => 'draft-btn', 'class' => 'btn btn-default'])!!}
                  {!! Form::close() !!}

              </div>


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

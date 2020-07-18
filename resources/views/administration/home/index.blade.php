@extends('layouts.administration.main')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Nástěnka
    </h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-dashboard"></i>Nástěnka</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body ">
                  <h3>Vítejte v administrátorské sekci Varovného systému ČR!</h3>
                  <p class="lead text-muted">Zdravím, {{ Auth::user()->name }}. Vítejte v administraci.</p>

                  <h4></h4>
                  <p><a href="{{ route('administration.posts.create') }}" class="btn btn-primary" id="addNewPostDashboard">Přidat varování</a> </p>
            </div>
            <!-- /.box-body -->
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

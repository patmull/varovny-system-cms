@extends('layouts.administration.main')

@section('title', 'Varovný systém ČR | Index varování')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Index příspěvků
      <small>Zobrazeny všechny příspěvky</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Nástěnka</a>
      </li>
      <li><a href="{{ route('administration.posts.index') }}">Příspěvky</a></li>
      <li class="active">Všechny příspěvky</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="pull-left">
                <a href="{{ route('administration.posts.create') }}" class="btn btn-success" id="addNewPostTable">Vytvořit nový přísěpvek</a>
              </div>

            <div class="pull-right">
              <?php
                  $links = [];
                  $translations = array(
                    'all' => 'Vše',
                    'own' => 'Moje',
                    'scheduled' => 'Naplánováno',
                    'draft' => 'Rozepsáno',
                    'published' => 'Publikováno',
                    'trash' => 'Koš'
                  );
              ?>
                @foreach ($statusList as $key => $value)
                  @if($value)
                      <?php $selectedFilterLink = Request::get('status') == $key ? 'selected-status' : '' ?>
                      <?php $links[] = "<a class='{$selectedFilterLink}' href='?status={$key}'>".$translations[$key]." ({$value})</a>" ?>
                  @endif
                @endforeach
                {!! implode(' | ', $links) !!}
            </div>
          </div>

          <div class="box-body">
            @include('administration.pieces.messages')

            @if(!$allPosts->count())
                <div class="alert alert-warning">
                  No post found!
                </div>
            @else
                  @if($onlyTrashed)
                      @include('administration.posts.table-trash')
                  @else
                     @include('administration.posts.table')
                  @endif
            @endif
          </div>
          <!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="pull-left">
                {{ $allPosts->appends( Request::query() )->links() }}
              </div>
              <div class="pull-right">
                <small> {{ $postCount }} items</small>
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

@push('removeCachedImage')
  <script type="text/javascript">
    $(document).ready(function() {
      localStorage.removeItem("imgUploaded");
    });
  </script>
@endpush

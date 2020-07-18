@if(session('message'))
  <div class="alert alert-info">
    {{ session('message') }}
  </div>
@elseif (session('trash-message'))
    <?php list($trashMessage, $postSlug) = session('trash-message') ?>
      {!! Form::open(['method' => 'PUT', 'route' => ['administration.posts.restore', $postSlug]]) !!}
      <div class="alert alert-info">
      {{ $trashMessage }}
      </div>
      <button type="submit" class="btn btn-warning">Zpět</button>
      {!! Form::close() !!}
@endif

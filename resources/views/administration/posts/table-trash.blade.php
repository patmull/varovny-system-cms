<table class="table table-bordered">
  <thead>
    <tr>
      <th>Akce</th>
      <th>Název</th>
      <th>Autor</th>
      <th>Kategorie</th>
      <th>Datum</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>

    <?php $request = request(); ?>

    @foreach($allPosts as $post)

    <tr>
      <td>
        {!! Form::open(['style' => 'display:inline-block', 'method' => 'PUT', 'route' => ['administration.posts.restore', $post->slug]]) !!}
          @if(check_user_permissions($request, "Posts@destroy", $post->id))
            <button title="Restore" class="btn btn-xs btn-default">
                <i class="fa fa-refresh"></i>
            </button>
          @else
            <button title="Restore" onclick="return false;" class="btn btn-xs btn-default disabled">
                <i class="fa fa-refresh"></i>
            </button>
          @endif
        {!! Form::close() !!}

        {!! Form::open(['style' => 'display:inline-block', 'method' => 'DELETE', 'route' => ['administration.posts.force-destroy', $post->slug]]) !!}
        @if(check_user_permissions($request, "Posts@forceDestroy", $post->id))
          <button title="Permanentní smazání" onclick="return confirm('Snažíte se přesunout varování do koše. Doopravdy to chcete udělat?')" type="submit" class="btn btn-xs btn-danger">
              <i class="fa fa-times"></i>
          </button>
        @else
          <button title="Permanentní smazání" onclick="return false;" type="submit" class="btn btn-xs btn-danger disabled">
              <i class="fa fa-times"></i>
          </button>
        @endif
        {!! Form::close() !!}
      </td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->author->name }}</td>
      <td>{{ $post->category->title }}</td>
      <td>{{ $post->created_at }} </td>
    </tr>
  @endforeach

  </tbody>
</table>

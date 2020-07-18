<div id="table">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th>Akce</th>
      <th scope="col" class="sort" data-sort="post_title">Název</th>
      <th scope="col" class="sort" data-sort="author">Autor</th>
      <th scope="col" class="sort" data-sort="category">Kategorie</th>
      <th scope="col" class="sort" data-sort="created_at">Vytvořeno</th>
      <th scope="col" class="sort" data-sort="published_at">Publikováno</th>
    </tr>
  </thead>
  <tbody class="list">

    <?php $request = request();  ?>

    @foreach($allPosts as $post)

    <tr>
      <th scope="row">
        {!! Form::open(['method' => 'DELETE', 'route' => ['administration.posts.destroy', $post->slug]]) !!}

        @if(check_user_permissions($request, "Posts@edit", $post))
        <a href="{{ route('administration.posts.edit', $post->slug) }}" class="btn btn-xs btn-default">
                <i class="fa fa-edit"></i>
        </a>
        @else
        <a href="#" class="btn btn-xs btn-default disabled">
                <i class="fa fa-edit"></i>
        </a>
        @endif
        @if(check_user_permissions($request, "Posts@destroy", $post))
            <button title="Delete" onclick="return confirm('Chystáte se přesunout varování do koše. Opravdu to chcete udělat?')" type="submit" class="btn btn-xs btn-danger">
                <i class="fa fa-trash"></i>
            </button>
        @else
              <button title="Delete" onclick="return false;" type="submit" class="btn btn-xs btn-danger disabled">
                  <i class="fa fa-trash"></i>
              </button>
        @endif
          {!! Form::close() !!}
      </th>
      <td class="post_title">{{ $post->title }}</td>
      <td class="author">{{ $post->author->name }}</td>
      <td class="category">{{ $post->category->title }}</td>
      <td class="created_at">{{ $post->created_at }} {!! $post->publicationLabel() !!} </td>
      <td class="published_at">{{ $post->published_at }}</td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>

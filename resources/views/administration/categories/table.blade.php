<table class="table table-bordered">
  <thead>
    <tr>
      <th>Akce</th>
      <th>Kategorie</th>
      <th>Počet příspěvků</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)

    <tr>
      <td>
        {!! Form::open(['method' => 'DELETE', 'route' => ['administration.categories.destroy', $category->slug]]) !!}
        <a href="{{ route('administration.categories.edit', $category->slug) }}" class="btn btn-xs btn-default">
                <i class="fa fa-edit"></i>
        </a>
            <button onclick="return confirm('Jste si jistí?');" title="Permanent Delete" type="submit" class="btn btn-xs btn-danger">
                <i class="fa fa-times"></i>
            </button>
        {!! Form::close() !!}
      </td>
      <td>{{ $category->title }}</td>
      <td>{{ $category->posts->count() }}</td>
    </tr>
  @endforeach

  </tbody>
</table>

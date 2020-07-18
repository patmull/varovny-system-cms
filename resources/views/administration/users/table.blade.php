<table class="table table-bordered">
  <thead>
    <tr>
      <th>Akce</th>
      <th>Jméno</th>
      <th>E-mail</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>

    <?php $currentUser = auth()->user(); ?>
    @foreach($users as $user)

    <tr>
      <td>
        <a href="{{ route('administration.users.edit', $user->slug) }}" class="btn btn-xs btn-default">
                <i class="fa fa-edit"></i>
        </a>
        @if($user->id == config('cms.default_user_id') || $user->id == $currentUser->id)
            <button onclick="return confirm('Jste si jistí?');" title="Permanentní smazání" type="submit" class="btn btn-xs btn-danger disabled">
                <i class="fa fa-times"></i>
            </button>
        @else
          <a href="{{ route('administration.users.confirm', $user->slug) }}" onclick="return confirm('Jste si jistí?');" title="Permanentní smazáníe" type="submit" class="btn btn-xs btn-danger">
            <i class="fa fa-times"></i>
          </a>
        @endif
      </td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->roles->first()->display_name ?? '' }}</td>
    </tr>
    @endforeach

  </tbody>
</table>

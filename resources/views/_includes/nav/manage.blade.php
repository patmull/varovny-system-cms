<div class="side-menu" id="admin-side-menu">
  <aside class="menu m-l-20 m-t-30">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Nástěnka</a></li>
  </ul>

    <p class="menu-label">
      Administrator
    </p>

    <ul class="menu-list">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}"><i class="fa fa-user-plus m-r-5"></i>Manage Users</a></li>
      <li>
        <a class="submenu-parent {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permission</a>
        <ul class="submenu">
          <li> <a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
      <li>
        <a class="submenu-parent">Roles &amp; Permission</a>
      <ul class="submenu">
        <li> <a href="{{route('roles.index')}}">Roles</a></li>
        <li><a href="{{route('permissions.index')}}">Permissions</a></li>
      </ul>
      </li>
    </ul>
  </aside>
</div>

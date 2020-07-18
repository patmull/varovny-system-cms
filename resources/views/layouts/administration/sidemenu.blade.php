<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Auth::user()->avatar() }}" class="img-circle" alt="{{ Auth::user()->name }}'s avatar image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Nástěnka</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i>
            <span>Varování</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ route('administration.posts.create') }} " id="addNewPostSidemenu"><i class="fa fa-circle-o"></i>Vytvořit nové</a></li>
            <li><a href=" {{ route('administration.posts.index') }} "><i class="fa fa-circle-o"></i>Všechny příspěvky</a></li>
          </ul>
        </li>
        @role(['administrator', 'editor'])
          <li><a href="{{ route('administration.categories.index') }}"><i class="fa fa-folder"></i> <span>Kategorie</span></a></li>
        @endrole
        @role('administrator')
          <li><a href="{{ route('administration.users.index') }}"><i class="fa fa-users"></i> <span>Uživatelé</span></a></li>
        @endrole
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>

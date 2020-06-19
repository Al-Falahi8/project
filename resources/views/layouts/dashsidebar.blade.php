<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('pages.index')}}" class="brand-link">
        <img src="" alt="" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light"><img class="logo p-0 ml-3" src="{{ asset('dist/img/Artboard 2.png')}}" alt="logo"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="position: relative; padding-left: 50px;">
            <img src="/gameart/public/uploads/avatar/{{ Auth::user()->avatar }}" style="width: 32px; height: 32px; position:absolute; bottom: 1px; left:10px; border-radius:50%;" alt="User Image">
        </div>

        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->first_name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
                <a href="{{ route('userTable')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
                <a href="{{ route('Product') }}" class="nav-link">
                    <i class="nav-icon fas fa-plus-square"></i>
                    <p>
                        Add Assets
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Categories
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
                <ul class="nav nav-treeview">
                    @php
                        $categories = DB::table('categories')->get();
                    @endphp
                    @foreach ($categories as $category)
                        <a class="dropdown-item" href="{{url('categories', $category->id)}}"><i class="far fa-circle nav-icon"></i>{{ ucwords($category->name) }}</a>
                    @endforeach
                </ul>
            </li>

            <li class="nav-item has-treeview menu-open">
                <a href="{{ route('userProfile')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Profile/Edit
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-power-off"></i>
                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
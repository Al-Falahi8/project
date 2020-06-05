<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('pages.index')}}" class="brand-link">
        <img src="" alt="" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">Game Art</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/avatar04.png')}}" class="img-circle elevation-2" alt="User Image">
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
                <a href="{{ route('Product') }}" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Add Assets
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    SubCategories
                    <i class="fas fa-angle-left right"></i>
                
                </p>
            </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2D Game Assets</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>3D Game Assets</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>GUI Game Assets</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Character</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
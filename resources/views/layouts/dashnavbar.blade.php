<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('pages.market')}}" class="nav-link">Market</a>
        </li>
        
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('pages.contact')}}" class="nav-link">Contact</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt">{{ __('Logout') }}</i>
                </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
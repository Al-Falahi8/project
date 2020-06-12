<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('pages.index')}}" class="nav-link">HOME</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('pages.market')}}" class="nav-link">MARKET</a>
        </li>
        
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url('pages.contact')}}" class="nav-link">CONTACT US</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}<i class="fas fa-sign-out-alt ml-3"></i>
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
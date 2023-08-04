<!-- Logo Header -->
<div class="logo-header" data-background-color="dark">

    @if (Auth::user()->role == 'development')
    <a class="h1 mt-3 logo" href="/development">
        <img class="navbar-brand" src="{{ asset('assets/front/img/flashschool/favicon-white.png')}}" alt="" width="160px">
    </a>
    @else
    <a class="h1 mt-3 logo" href="/admin">
        <img class="navbar-brand" src="{{ asset('assets/front/img/flashschool/favicon-white.png')}}" alt="" width="160px">
    </a>
    @endif
    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
        </span>
    </button>
    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
    <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
        </button>
    </div>
</div>
<!-- End Logo Header -->

<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark2">

    <div class="container-fluid">
        <marquee class="text-white h3 mt-2">Selamat Datang <i class="text-uppercase">{{ Auth::user()->name }}</i> anda adalah <i class="text-uppercase">{{ Auth::user()->role }}</i>&nbsp; Flash School</marquee>
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center mr-1 mt-2">
            <a class="nav-link h2" href="{{ route('logout') }}" id="logout" onclick="return logout(event);">
                <i class="fas fa-power-off text-danger"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</nav>
<!-- End Navbar -->

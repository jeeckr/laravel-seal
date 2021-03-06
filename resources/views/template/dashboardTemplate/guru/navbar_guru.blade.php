<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="{{ route('homeSiswa') }}" class="navbar-brand sidebar-gone-hide">SEAL</a>

    <div class="nav-collapse mx-auto">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('homeGuru') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('profilGuru', $guru->id) }}" class="nav-link">Profil</a></li>
        </ul>
    </div>

    <ul class="navbar-nav navbar-right ml-auto">

        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ $guru->showImage() }}" class="rounded-circle mr-1 image-navbar">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ $guru->nama_depan}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="{{ route('profilGuru', $guru->id) }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <!-- <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
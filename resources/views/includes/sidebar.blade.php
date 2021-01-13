<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active nav-item">
                    <a href="/" class="nav-link"><i class="menu-icon fa fa-laptop"></i>Landing Page </a>
                </li>

                <li class="menu-title">Wisata</li><!-- /.menu-title -->
                <li class="nav-item">
                    <a href="{{ route('wisata.index') }}" class="nav-link"> <i class="menu-icon fa fa-list"></i>Lihat Wisata</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('wisata.create') }}" class="nav-link"> <i class="menu-icon fa fa-plus"></i>Tambah Wisata</a>
                </li>

                <li class="menu-title">Foto wisata</li><!-- /.menu-title -->
                <li class="nav-item">
                    <a href="{{ route('galeri.index') }}" class="nav-link"> <i class="menu-icon fa fa-list"></i>Lihat Foto Wisata</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galeri.create') }}" class="nav-link"> <i class="menu-icon fa fa-list"></i>Tambah Foto Wisata</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
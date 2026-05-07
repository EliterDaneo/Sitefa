<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top" style="border-top: 5px solid rgb(175, 140, 226);">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="Logo" width="30" height="30"
                class="d-inline-block align-top">
            </i>
            Master-T</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}"
                        href="{{ route('berita') }}"><i class="fa fa-book-open" aria-hidden="true"></i>
                        BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('visi') ? 'active' : '' }}" href="{{ route('visi') }}"><i
                            class="fa fa-book" aria-hidden="true"></i> VISI
                        MISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('produk') ? 'active' : '' }}"
                        href="{{ route('produk') }}"><i class="fa fa-podcast" aria-hidden="true"></i>
                        PRODUK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('struktur-organisasi') ? 'active' : '' }}"
                        href="{{ route('struktur-organisasi') }}"><i class="fa fa-users" aria-hidden="true"></i>
                        STRUKTUR
                        ORGANISASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}"
                        href="{{ route('kontak') }}"><i class="fa fa-phone" aria-hidden="true"></i>
                        KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

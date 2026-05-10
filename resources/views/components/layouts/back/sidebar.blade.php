<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard.index') }}" class="brand-link">
            <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow rounded-circle"
                width="50" />
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">

                <x-ui.button type="navLink" :url="route('admin.dashboard.index')" title="Dashboard" icon="bi bi-speedometer"
                    path="admin/dashboard" />

                <li class="nav-header">Daftar Menu</li>
                <x-ui.button type="navLink" :url="route('category.index')" title="Kategori" icon="bi bi-tag" path="admin/category" />

                <x-ui.button type="navLink" :url="route('admin.dashboard.index')" title="Berita" icon="bi bi-newspaper"
                    path="admin/berita" />

                <x-ui.button type="navLink" :url="route('admin.dashboard.index')" title="Produk" icon="bi bi-clipboard-data"
                    path="admin/produk" />

                <x-ui.button type="navLink" :url="route('admin.dashboard.index')" title="Order" icon="bi bi-cart-plus"
                    path="admin/order" />

                <li class="nav-header">Pengaturan</li>
                <x-ui.button type="navLink" :url="route('category.index')" title="Struktur Organisasi" icon="bi bi-pip"
                    path="admin/sistem-organisasi" />

                <x-ui.button type="navLink" :url="route('category.index')" title="Visi & Misi" icon="bi bi-book"
                    path="admin/visi-misi" />

                @if (Auth::user()->role === 'admin')
                    <li class="nav-header">Pengguna</li>
                    <x-ui.button type="navLink" :url="route('category.index')" title="Pengguna" icon="bi bi-people"
                        path="admin/pengguna" />
                @endif

            </ul>
        </nav>
    </div>
</aside>

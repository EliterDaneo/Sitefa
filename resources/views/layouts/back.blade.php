<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard &mdash; Master-T</title>
    <link rel="shortcut icon" href="{{ asset('assets/back/img/school.svg') }}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/back/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/back/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/back/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/back/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/back/css/components.css') }}">

    <script src="{{ asset('assets/back/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/back/js/sweetalert.min.js') }}"></script>

</head>

<body style="background: #e2e8f0">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/back/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" style="cursor: pointer"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="logo" width="50"
                            class="shadow-light rounded-circle">
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MAIN MENU</li>
                        <li class="{{ setActive('admin/dashboard') }}"><a class="nav-link"
                                href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a></li>

                        <li class="{{ setActive('admin/post') }}"><a class="nav-link" href="#"><i
                                    class="fas fa-book-open"></i>
                                <span>Berita</span></a></li>

                        <li class="{{ setActive('admin/berita') }}"><a class="nav-link" href="#"><i
                                    class="fas fa-tags"></i> <span>Berita</span></a>
                        </li>

                        <li class="{{ setActive('admin/category') }}"><a class="nav-link" href="#"><i
                                    class="fas fa-folder"></i>
                                <span>Kategori</span></a></li>

                        <li class="{{ setActive('admin/order') }}"><a class="nav-link" href="#"><i
                                    class="fas fa-ordered-list"></i>
                                <span>Order</span></a></li>

                        <li class="menu-header">Menu SO</li>
                        <li class="{{ setActive('admin/sistem-organisasi') }}"><a class="nav-link"
                                href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                                <span>SO</span></a></li>

                        <li class="{{ setActive('admin/visi-misi') }}"><a class="nav-link" href="#"><i
                                    class="fas fa-book-open"></i>
                                <span>Visi & Misi</span></a></li>

                        <li class="menu-header">PENGATURAN</li>

                        <li class="{{ setActive('admin/slider') }}"><a class="nav-link" href="#"><i
                                    class="fas fa-laptop"></i>
                                <span>Sliders</span></a></li>

                        <li
                            class="dropdown {{ setActive('admin/role') . setActive('admin/permission') . setActive('admin/user') }}">

                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users
                                    Management</span></a>


                            <ul class="dropdown-menu">
                                <li class="{{ setActive('admin/role') }}"><a class="nav-link" href="#"><i
                                            class="fas fa-unlock"></i> Roles</a>
                                </li>

                                <li class="{{ setActive('admin/permission') }}"><a class="nav-link"
                                        href="#"><i class="fas fa-key"></i>
                                        Permissions</a></li>

                                <li class="{{ setActive('admin/user') }}"><a class="nav-link" href="#"><i
                                            class="fas fa-users"></i> Users</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Master-T <div class="bullet"></div> All
                    Rights
                    Reserved.
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/back/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/back/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/back/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/back/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/back/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/back/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/back/js/custom.js') }}"></script>
    <script>
        //active select2
        $(document).ready(function() {
            $('select').select2({
                theme: 'bootstrap4',
                width: 'style',
            });
        });

        //flash message
        @if (session()->has('success'))
            swal({
                type: "success",
                icon: "success",
                title: "BERHASIL!",
                text: "{{ session('success') }}",
                timer: 1500,
                showConfirmButton: false,
                showCancelButton: false,
                buttons: false,
            });
        @elseif (session()->has('error'))
            swal({
                type: "error",
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                timer: 1500,
                showConfirmButton: false,
                showCancelButton: false,
                buttons: false,
            });
        @endif
    </script>
</body>

</html>

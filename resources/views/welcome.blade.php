@extends('layouts.app', ['title' => 'Selamat Datang di TEFA MUTU'])

@section('content')
    {{-- Slider --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="{{ asset('assets/images/slider_image.png') }}" class="w-100">

            </div>
            <div class="carousel-item">

                <img src="{{ asset('assets/images/slider_image.png') }}" class="w-100">

            </div>
            <div class="carousel-item">

                <img src="{{ asset('assets/images/slider_image.png') }}" class="w-100">

            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- About: Struktur Organisasi & Visi Misi --}}
    <div class="container mt-5 mb-5" id="about">

        <div class="row mb-4">
            <div class="col-md-12">
                <h4><i class="fas fa-users"></i> STRUKTUR ORGANISASI</h4>
                <hr style="border-top: 3px solid rgb(175,140,226); width: 60px; margin-left: 0;">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-3 mb-3">
                <div class="card text-center border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                            style="width:70px;height:70px;background:#EEEDFE;">
                            <i class="fas fa-user-tie fa-2x" style="color:#534AB7;"></i>
                        </div>
                        <h6 class="font-weight-bold mb-1">Ahmad Priyanto</h6>
                        <p class="text-muted small mb-2">Kepala Sekolah</p>
                        <span class="badge badge-pill px-3 py-2"
                            style="background:#EEEDFE;color:#3C3489;font-size:11px;">Ketua</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                            style="width:70px;height:70px;background:#E1F5EE;">
                            <i class="fas fa-user fa-2x" style="color:#0F6E56;"></i>
                        </div>
                        <h6 class="font-weight-bold mb-1">Siti Rahayu</h6>
                        <p class="text-muted small mb-2">Wakil Ketua</p>
                        <span class="badge badge-pill px-3 py-2"
                            style="background:#E1F5EE;color:#085041;font-size:11px;">Wakil Ketua</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                            style="width:70px;height:70px;background:#FAEEDA;">
                            <i class="fas fa-file-alt fa-2x" style="color:#854F0B;"></i>
                        </div>
                        <h6 class="font-weight-bold mb-1">Budi Wicaksono</h6>
                        <p class="text-muted small mb-2">Sekretaris I</p>
                        <span class="badge badge-pill px-3 py-2"
                            style="background:#FAEEDA;color:#633806;font-size:11px;">Sekretaris</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-center border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center"
                            style="width:70px;height:70px;background:#FAECE7;">
                            <i class="fas fa-coins fa-2x" style="color:#993C1D;"></i>
                        </div>
                        <h6 class="font-weight-bold mb-1">Dewi Puspitasari</h6>
                        <p class="text-muted small mb-2">Bendahara I</p>
                        <span class="badge badge-pill px-3 py-2"
                            style="background:#FAECE7;color:#712B13;font-size:11px;">Bendahara</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <h4><i class="fas fa-lightbulb"></i> VISI & MISI</h4>
                <hr style="border-top: 3px solid rgb(175,140,226); width: 60px; margin-left: 0;">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <h5 class="mb-3">
                            <i class="fas fa-eye mr-2" style="color:rgb(175,140,226);"></i> VISI
                        </h5>
                        <p class="text-muted">
                            Menjadi lembaga pendidikan kejuruan unggulan yang menghasilkan lulusan berkarakter,
                            kompeten, dan berdaya saing di tingkat nasional maupun global.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm rounded-lg h-100">
                    <div class="card-body">
                        <h5 class="mb-3">
                            <i class="fas fa-flag mr-2" style="color:rgb(175,140,226);"></i> MISI
                        </h5>
                        <ul class="list-unstyled text-muted mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle mr-2"
                                    style="color:#1D9E75;"></i>Menyelenggarakan pembelajaran berbasis kompetensi dan
                                teknologi terkini.</li>
                            <li class="mb-2"><i class="fas fa-check-circle mr-2" style="color:#1D9E75;"></i>Membentuk
                                karakter peserta didik yang berakhlak mulia dan disiplin.</li>
                            <li class="mb-2"><i class="fas fa-check-circle mr-2" style="color:#1D9E75;"></i>Menjalin
                                kemitraan dengan dunia usaha dan industri secara aktif.</li>
                            <li class="mb-2"><i class="fas fa-check-circle mr-2"
                                    style="color:#1D9E75;"></i>Mengembangkan budaya inovasi dan kewirausahaan di lingkungan
                                sekolah.</li>
                            <li><i class="fas fa-check-circle mr-2" style="color:#1D9E75;"></i>Meningkatkan kualitas
                                pendidik dan tenaga kependidikan secara berkelanjutan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Berita & Produk --}}
    <div class="container mb-5">

        {{-- Berita Terbaru --}}
        <div class="row mb-2">
            <div class="col-md-12">
                <h4><i class="fas fa-book-open"></i> BERITA TERBARU</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <img src="{{ asset('assets/images/post_image.png') }}" class="w-100"
                        style="height:200px;object-fit:cover;border-top-left-radius:.3rem;border-top-right-radius:.3rem;">
                    <div class="card-body">
                        <a href="#" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar"></i> 07 Mei 2026
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <img src="{{ asset('assets/images/post_image.png') }}" class="w-100"
                        style="height:200px;object-fit:cover;border-top-left-radius:.3rem;border-top-right-radius:.3rem;">
                    <div class="card-body">
                        <a href="#" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar"></i> 07 Mei 2026
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <img src="{{ asset('assets/images/post_image.png') }}" class="w-100"
                        style="height:200px;object-fit:cover;border-top-left-radius:.3rem;border-top-right-radius:.3rem;">
                    <div class="card-body">
                        <a href="#" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar"></i> 07 Mei 2026
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-2 mb-4">
                <a href="#" class="btn btn-outline-secondary px-4">
                    <i class="fas fa-book-open mr-2"></i> Lihat Semua Berita
                </a>
            </div>
        </div>

        {{-- Produk & Sidebar --}}
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <h4><i class="fas fa-box-open"></i> PRODUK TERBARU</h4>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <img src="{{ asset('assets/images/post_image.png') }}" class="w-100"
                                style="height:200px;object-fit:cover;border-top-left-radius:.3rem;border-top-right-radius:.3rem;">
                            <div class="card-body">
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar"></i> 07 Mei 2026
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <img src="{{ asset('assets/images/post_image.png') }}" class="w-100"
                                style="height:200px;object-fit:cover;border-top-left-radius:.3rem;border-top-right-radius:.3rem;">
                            <div class="card-body">
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar"></i> 07 Mei 2026
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <img src="{{ asset('assets/images/post_image.png') }}" class="w-100"
                                style="height:200px;object-fit:cover;border-top-left-radius:.3rem;border-top-right-radius:.3rem;">
                            <div class="card-body">
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar"></i> 07 Mei 2026
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0 rounded-lg">
                            <img src="{{ asset('assets/images/post_image.png') }}" class="w-100"
                                style="height:200px;object-fit:cover;border-top-left-radius:.3rem;border-top-right-radius:.3rem;">
                            <div class="card-body">
                                <a href="#" class="text-dark text-decoration-none">
                                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                                </a>
                            </div>
                            <div class="card-footer bg-white">
                                <i class="fa fa-calendar"></i> 07 Mei 2026
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-2 mb-3">
                        <a href="#" class="btn btn-outline-secondary px-4">
                            <i class="fas fa-box-open mr-2"></i> Lihat Semua Produk
                        </a>
                    </div>
                </div>
            </div>

            {{-- Sidebar Kategori --}}
            <div class="col-md-4">
                <div class="mb-4 mt-5">
                    <h4><i class="fa fa-folder"></i> KATEGORI</h4>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                        <i class="fa fa-folder-open"></i> Tefa Pengembangan Perangkat Lunak dan Gim
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                        <i class="fa fa-folder-open"></i> Tefa Teknik Jaringan Komputer dan Telekomunikasi
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                        <i class="fa fa-folder-open"></i> Tefa Teknik Kendaraan Ringan Otomotif
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                        <i class="fa fa-folder-open"></i> Tefa Teknik dan Bisnis Sepeda Motor
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0 shadow-sm mb-2 rounded">
                        <i class="fa fa-folder-open"></i> Tefa Bisnis Daring dan Pemasaran
                    </a>
                </div>
            </div>
        </div>

    </div>

    {{-- Rekanan Industri --}}
    <div class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <h4><i class="fas fa-building"></i> REKANAN INDUSTRI</h4>
                    <p class="text-muted">Mitra industri yang bekerja sama dengan TEFA MUTU</p>
                    <hr style="border-top: 3px solid rgb(175,140,226); width: 60px; margin: 0 auto 1.5rem;">
                </div>
            </div>

            <div id="rekananCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#E6F1FB;color:#0C447C;font-size:18px;">
                                            PT</div>
                                        <p class="mb-0 small font-weight-bold">PT Maju Bersama</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Manufaktur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#EEEDFE;color:#3C3489;font-size:18px;">
                                            CV</div>
                                        <p class="mb-0 small font-weight-bold">CV Karya Mandiri</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Konstruksi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#E1F5EE;color:#085041;font-size:18px;">
                                            TB</div>
                                        <p class="mb-0 small font-weight-bold">TB Sejahtera</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Material Bangunan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#FAEEDA;color:#633806;font-size:18px;">
                                            UD</div>
                                        <p class="mb-0 small font-weight-bold">UD Nusantara Teknik</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Teknik & Mesin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#FAECE7;color:#712B13;font-size:18px;">
                                            PT</div>
                                        <p class="mb-0 small font-weight-bold">PT Surya Abadi</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Perdagangan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#EAF3DE;color:#27500A;font-size:18px;">
                                            CV</div>
                                        <p class="mb-0 small font-weight-bold">CV Prima Tekindo</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Elektronika</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#FBEAF0;color:#72243E;font-size:18px;">
                                            PT</div>
                                        <p class="mb-0 small font-weight-bold">PT Digital Kreasi</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Teknologi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 mb-3">
                                <div class="card border-0 shadow-sm rounded-lg text-center py-3 h-100">
                                    <div class="card-body">
                                        <div class="mx-auto mb-2 rounded d-flex align-items-center justify-content-center font-weight-bold"
                                            style="width:56px;height:56px;background:#F1EFE8;color:#444441;font-size:18px;">
                                            UD</div>
                                        <p class="mb-0 small font-weight-bold">UD Mitra Usaha</p>
                                        <p class="mb-0 text-muted" style="font-size:11px;">Distribusi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#rekananCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter:invert(1);"></span>
                </a>
                <a class="carousel-control-next" href="#rekananCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter:invert(1);"></span>
                </a>
            </div>

        </div>
    </div>
@endsection

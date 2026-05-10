@extends('components.layouts.front.app', ['title' => $produk->title])

@section('content')
    <header class="pt-5 border-bottom bg-light">
        <div class="container pt-md-1 pb-md-1">
            <h1 class="bd-title mt-4 font-weight-bold"><i class="bi bi-bag" aria-hidden="true"></i> Produk
            </h1>
            <p class="bd-lead">Detail produk terbaru tentang Master-T.</p>
        </div>
    </header>

    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a hre="#" class="text-decoration-none"><i class="bi bi-house"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="#" class="text-decoration-none"><i class="bi bi-bag"></i>
                    Produk - {{ $produk->title }}</a>
            </li>
        </ol>
    </nav>
    <!-- end breadcrumb -->

    <div class="container mt-3 mb-5">
        <div class="row">
            <!-- Sisi Kiri: Gambar Produk -->
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/assets/back/img/produk/' . $produk->image) }}" class="img-fluid w-100"
                        alt="{{ $produk->title }}" style="min-height: 400px; object-fit: cover;">
                </div>
            </div>

            <!-- Sisi Kanan: Detail & Order -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="pl-md-3">
                    <span class="badge badge-primary mb-2 px-3 py-2">{{ $produk->category->name ?? 'Kategori' }}</span>
                    <h2 class="font-weight-bold text-dark">{{ $produk->title }}</h2>

                    <div class="d-flex align-items-center my-3">
                        <h3 class="text-primary font-weight-bold mb-0">
                            Rp {{ number_format($produk->price, 0, ',', '.') }}
                        </h3>
                        <div class="ml-3 border-left pl-3 text-muted">
                            <i class="fa fa-eye"></i> {{ $produk->views }} Dilihat
                        </div>
                    </div>

                    <hr>

                    <h6 class="font-weight-bold text-uppercase text-muted" style="letter-spacing: 1px;">Deskripsi Produk
                    </h6>
                    <div class="mt-3 text-secondary leading-relaxed">
                        {!! $produk->content !!}
                    </div>

                    <div class="mt-5 p-4 bg-light rounded-lg border">
                        <h6 class="font-weight-bold mb-3">Tertarik dengan produk ini?</h6>
                        <div class="row">
                            <div class="col-sm-6 mb-2">
                                {{-- Tombol Order via WhatsApp --}}
                                <a href="https://wa.me/628123456789?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ urlencode($produk->title) }}"
                                    target="_blank" class="btn btn-success btn-block py-2 rounded-pill shadow-sm">
                                    <i class="fab fa-whatsapp mr-2"></i> Tanya via WA
                                </a>
                            </div>
                            <div class="col-sm-6">
                                {{-- Tombol Form Pesanan --}}
                                <a href="#"
                                    class="btn btn-primary btn-block py-2
                                    rounded-pill shadow-sm">
                                    <i class="fa fa-edit mr-2"></i> Isi Form Pesanan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <small class="text-muted">
                            <i class="fa fa-info-circle"></i> Diposting pada {{ $produk->created_at->format('d M Y') }}
                        </small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Opsional: Bagian Produk Lainnya --}}
        <div class="row mt-5">
            <div class="col-12">
                <h4 class="font-weight-bold mb-4">Produk Lainnya</h4>
                <hr>
                <!-- Anda bisa memasukkan loop produk terkait di sini -->
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .leading-relaxed {
            line-height: 1.8;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            font-size: 1.2rem;
            vertical-align: middle;
        }
    </style>
@endpush

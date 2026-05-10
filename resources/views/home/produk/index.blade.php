@extends('components.layouts.front.app', ['title' => 'List Produk Tefa'])

@section('content')
    <header class="pt-5 border-bottom bg-light">
        <div class="container pt-md-1 pb-md-1">
            <h1 class="bd-title mt-4 font-weight-bold"><i class="fa fa-book-open" aria-hidden="true"></i> Produk
            </h1>
            <p class="bd-lead">Produk terbaru tentang Master-T.</p>
        </div>
    </header>

    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a hre="#" class="text-decoration-none"><i class="fa fa-home"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="#" class="text-decoration-none"><i class="fa fa-book-open"></i>
                    Produk</a>
            </li>
        </ol>
    </nav>
    <!-- end breadcrumb -->

    <div class="container mt-3 mb-5">
        <div class="row">

            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $index)
                {{-- Contoh jika menggunakan loop --}}
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <div class="card h-100 shadow-sm border-0 rounded-lg">
                        <img src="{{ asset('assets/images/12.jpeg') }}" class="w-100"
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
            @endforeach
        </div>
    </div>
@endsection

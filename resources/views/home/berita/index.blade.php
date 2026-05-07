@extends('layouts.app', ['title' => 'List Berita Tefa'])

@section('content')
    <header class="pt-5 border-bottom bg-light">
        <div class="container pt-md-1 pb-md-1">
            <h1 class="bd-title mt-4 font-weight-bold"><i class="fa fa-book-open" aria-hidden="true"></i> BERITA
            </h1>
            <p class="bd-lead">Berita terbaru tentang Master-T.</p>
        </div>
    </header>

    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('welcome') }}" class="text-decoration-none"><i class="fa fa-home"></i> Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('berita') }}" class="text-decoration-none"><i class="fa fa-book-open"></i>
                    Berita</a>
            </li>
        </ol>
    </nav>
    <!-- end breadcrumb -->

    <div class="container mt-3 mb-5">
        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/content/3.jpeg') }}" class="w-100"
                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                    </div>
                    <div class="card-body">
                        <a href="http://" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/content/1.jpeg') }}" class="w-100"
                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                    </div>
                    <div class="card-body">
                        <a href="http://" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/content/4.jpeg') }}" class="w-100"
                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                    </div>
                    <div class="card-body">
                        <a href="http://" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/content/5.jpeg') }}" class="w-100"
                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                    </div>
                    <div class="card-body">
                        <a href="http://" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/content/6.jpeg') }}" class="w-100"
                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                    </div>
                    <div class="card-body">
                        <a href="http://" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 rounded-lg">
                    <div class="card-img">
                        <img src="{{ asset('assets/images/content/7.jpeg') }}" class="w-100"
                            style="height: 200px;object-fit: cover;border-top-left-radius: .3rem;border-top-right-radius: .3rem;">
                    </div>
                    <div class="card-body">
                        <a href="http://" class="text-dark text-decoration-none">
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h6>
                        </a>
                    </div>
                    <div class="card-footer bg-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i> 09 Juli 2020
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

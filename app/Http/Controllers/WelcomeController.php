<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function berita()
    {
        return view('home.berita.index');
    }

    public function visi()
    {
        return view('home.vm.index');
    }

    public function produk()
    {
        return view('home.produk.index');
    }

    public function so()
    {
        return view('home.so.index');
    }

    public function kontak()
    {
        return view('home.kontak.index');
    }
}

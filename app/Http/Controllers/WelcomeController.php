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
        return view('home.berita');
    }

    public function visi()
    {
        return view('home.visi');
    }

    public function produk()
    {
        return view('home.produk');
    }

    public function so()
    {
        return view('home.so');
    }
}

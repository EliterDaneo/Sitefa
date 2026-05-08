<?php

namespace App\Http\Controllers;

use App\Models\Order;
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


    public function produk()
    {
        return view('home.produk.index');
    }

    public function order()
    {
        return view('home.order.index');
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'nama'          => 'required|string|max:100',
            'no_hp'         => 'required|string|max:20',
            'email'         => 'nullable|email|max:100',
            'jenis_layanan' => 'required|string',
            'judul'         => 'required|string|max:150',
            'deskripsi'     => 'required|string|min:10',
        ], [
            'nama.required'          => 'Nama lengkap wajib diisi.',
            'no_hp.required'         => 'No. HP wajib diisi.',
            'jenis_layanan.required' => 'Pilih jenis layanan terlebih dahulu.',
            'judul.required'         => 'Judul pesanan wajib diisi.',
            'deskripsi.required'     => 'Deskripsi kebutuhan wajib diisi.',
            'deskripsi.min'          => 'Deskripsi minimal 10 karakter.',
        ]);

        Order::create($request->only([
            'nama',
            'no_hp',
            'email',
            'jenis_layanan',
            'judul',
            'deskripsi',
            'anggaran',
            'tanggal',
        ]));

        return redirect()->route('order.index')->with('success', 'Pesanan berhasil dikirim! Kami akan segera menghubungi Anda.');
    }


    public function kontak()
    {
        return view('home.kontak.index');
    }
}

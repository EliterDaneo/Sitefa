<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita', [App\Http\Controllers\WelcomeController::class, 'berita'])->name('berita');
Route::get('/order', [App\Http\Controllers\WelcomeController::class, 'order'])->name('order');
Route::post('/order', [App\Http\Controllers\WelcomeController::class, 'storeOrder'])->name('order.store');
Route::get('/produk', [App\Http\Controllers\WelcomeController::class, 'produk'])->name('produk');
Route::get('/kontak', [App\Http\Controllers\WelcomeController::class, 'kontak'])->name('kontak');

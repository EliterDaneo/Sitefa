<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita', [App\Http\Controllers\WelcomeController::class, 'berita'])->name('berita');
Route::get('/visi', [App\Http\Controllers\WelcomeController::class, 'visi'])->name('visi');
Route::get('/produk', [App\Http\Controllers\WelcomeController::class, 'produk'])->name('produk');
Route::get('/struktur-organisasi', [App\Http\Controllers\WelcomeController::class, 'so'])->name('struktur-organisasi');

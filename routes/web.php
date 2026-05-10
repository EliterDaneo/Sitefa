<?php

use Illuminate\Support\Facades\Route;

//forntend
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita', [App\Http\Controllers\WelcomeController::class, 'berita'])->name('berita');
Route::get('/order', [App\Http\Controllers\WelcomeController::class, 'order'])->name('order');
Route::post('/order', [App\Http\Controllers\WelcomeController::class, 'storeOrder'])->name('order.store');
Route::get('/produk', [App\Http\Controllers\WelcomeController::class, 'produk'])->name('produk');
Route::get('/kontak', [App\Http\Controllers\WelcomeController::class, 'kontak'])->name('kontak');

//login dan register
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/proses-login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('proses.login');
Route::post('/proses-register', [App\Http\Controllers\Auth\LoginController::class, 'register'])->name('proses.register');

//dashboard
Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {
        //logout
        Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['only' => ['create', 'store', 'update', 'destroy', 'index']]);
    });
});

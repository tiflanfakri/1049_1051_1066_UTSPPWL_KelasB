<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;

Route::middleware(['guest'])->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});

Auth::routes();

Route::get('/', function () {
    return view('welcome'); // Welcome sekarang menjadi halaman login
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home'); // Setelah login, masuk ke halaman home
    })->name('home');

    Route::resource('barang', BarangController::class);
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/'); // Setelah logout, kembali ke login
})->name('logout');

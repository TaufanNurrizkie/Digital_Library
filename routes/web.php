<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index']);
});



//routes marketplace
Route::get('/marketplace', function () {
    return view('marketplace.marketplace');
})->name('marketplace');
Route::get('/kategori', function () {
    return view('marketplace.kategori');
})->name('kategori');
Route::get('/desk', function () {
    return view('marketplace.desk');
})->name('desk');

Route::middleware('auth')->get('/keranjang', function () {
    return view('marketplace.keranjang');
})->name('keranjang');

Route::middleware('auth')->get('/deskripsi', function () {
    return view('marketplace.deskripsi');
})->name('deskripsi');

Route::middleware('auth')->get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Route::middleware('auth')->get('/checkout', function () {
    return view('marketplace.checkout');
})->name('checkout');

Route::middleware('auth')->get('/homepage', function () {
    return view('marketplace.homepage');
})->name('homepage');


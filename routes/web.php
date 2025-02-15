<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceProductController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('marketplace/products', MarketplaceProductController::class);


//routes marketplace
Route::get('/marketplace', [MarketplaceProductController::class, 'index'])->name('marketplace');
Route::get('/deskripsi/{id}', [MarketplaceProductController::class, 'show'])->name('product.show');

Route::get('/kategori/{kategori}', [MarketplaceProductController::class, 'kategori'])->name('kategori.show');


Route::get('/keranjang', function () {return view('marketplace.keranjang');})->name('keranjang');
Route::get('/tes', function () {return view('profile.profile');})->name('profile');
Route::middleware('auth')->get('/checkout', function () {return view('marketplace.checkout');})->name('checkout');




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














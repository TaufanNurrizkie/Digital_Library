@extends('layouts.marketplaceLayout')
@include('layouts.loader')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Gambar Produk -->
        <div class="md:w-1/3">
            <img src="{{ asset('storage/lout-of-counts-family.jpg') }}" alt="Lout of Count's Family" class="rounded-lg shadow-lg">
        </div>

        <!-- Detail Produk -->
        <div class="md:w-2/3">
            <h2 class="text-gray-500 text-sm">Yu Ryeo Han / Ping</h2>
            <h1 class="text-2xl font-bold">Lout of Count’s Family</h1>
            <p class="text-lg font-semibold text-gray-900">Rp199.000</p>
            
            <!-- Tombol Favorit dan Bagikan -->
            <div class="flex items-center space-x-4 my-4">
                <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21l-1.45-1.318C5.4 15.364 2 12.273 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.773-3.4 6.864-8.55 11.182L12 21z"></path>
                    </svg>
                    <span>Favorit</span>
                </button>
                <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18" cy="5" r="3"></circle>
                        <circle cx="6" cy="12" r="3"></circle>
                        <circle cx="18" cy="19" r="3"></circle>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.59 13.51l6.83 3.98M15.41 6.51l-6.82 3.98"></path>
                    </svg>
                    <span>Bagikan</span>
                </button>
            </div>

            <!-- Format Buku -->
            <div class="mt-4">
                <h3 class="text-gray-600">Format Buku</h3>
                <div class="inline-flex items-center bg-gray-200 text-gray-700 text-sm px-3 py-1 rounded-full">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21l-1.45-1.318C5.4 15.364 2 12.273 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.773-3.4 6.864-8.55 11.182L12 21z"></path>
                    </svg>
                    Soft Cover
                </div>
            </div>

            <!-- Tombol Keranjang -->
            <div class="mt-6 p-6 bg-white shadow-xl rounded-lg flex items-center justify-between border border-gray-300">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('storage/lout-of-counts-family.jpg') }}" alt="Lout of Count's Family" class="w-12 h-12 rounded">
                    <div>
                        <p class="text-sm text-gray-700">Yu Ryeo Han / Ping</p>
                        <p class="text-sm font-bold">Lout of Count’s Family</p>
                        <p class="text-sm font-semibold">Rp199.000</p>
                    </div>
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center space-x-2 hover:bg-blue-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h16M12 4v16"></path>
                    </svg>
                    <span>Keranjang</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

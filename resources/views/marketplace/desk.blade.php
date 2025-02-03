@extends('layouts.marketplaceLayout')

@section('content')

@vite('resources/css/app.css')

<div class="container mx-auto p-6">
    <div class="flex flex-wrap -mx-4">
        <!-- Gambar Buku -->
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
            <img src="img/promo1.png" alt="Lout of Count's Family" class="w-full rounded-lg shadow-md">
        </div>

        <!-- Detail Buku -->
        <div class="w-full md:w-2/3 px-4">
            <h2 class="text-xl font-semibold text-gray-800"><a href="#" class="text-blue-500">Yu ryeo han</a> / <a href="#" class="text-blue-500">Ping</a></h2>
            <h1 class="text-3xl font-bold text-gray-900">Lout of Count’s Family</h1>
            <p class="text-2xl font-semibold text-gray-900 mt-2">Rp199.000</p>

            <div class="flex items-center space-x-6 mt-4">
                <button class="flex items-center space-x-2 text-gray-600">
                    <span>&hearts;</span>
                    <span>Favorit</span>
                </button>
                <button class="flex items-center space-x-2 text-gray-600">
                    <span>&#x1F517;</span>
                    <span>Bagikan</span>
                </button>
            </div>

            <p class="mt-4 font-semibold">Format Buku</p>
            <div class="bg-gray-200 px-4 py-2 rounded-full border-2 border-gray-900 inline-flex items-center">
                <span>Soft Cover</span>
            </div>

            <!-- Card Produk -->
            <div class="mt-6 p-4 bg-white shadow-xl rounded-lg flex items-center space-x-4 w-full md:w-2/3">
                <img src="img/promo1.png" alt="Lout of Count's Family" class="w-16 h-16 rounded-lg">
                <div class="flex-1">
                    <p class="text-sm bg-gray-200 px-2 py-1 inline-block rounded-md">Soft Cover</p>
                    <p class="text-gray-700">Yu ryeo han / Ping</p>
                    <p class="font-semibold">Lout of Count’s Family</p>
                    <p class="text-lg font-bold">Rp199.000</p>
                </div>
                <button class="bg-blue-500 text-white px-6 py-2 rounded-lg flex items-center space-x-2">
                    <span>+ Keranjang</span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

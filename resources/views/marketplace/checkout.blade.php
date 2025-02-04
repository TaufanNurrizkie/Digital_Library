@extends('layouts.marketplaceLayout')

@include('layouts.loader')

@section('content')
<div class="container mx-auto max-w-5xl p-6">
    <!-- Header -->
    <h1 class="text-3xl font-bold mb-4">CheckOut</h1>

    <!-- Kontainer Atas (Progress Bar & Ringkasan Belanja) -->
    <div class="flex justify-between items-start gap-6">
        <!-- Progress Bar -->
        <div class="w-2/3">
            <div class="bg-gray-100 p-4 rounded-lg">
                <div class="relative w-full h-2 bg-gray-300 rounded-lg">
                    <div class="absolute top-0 left-0 h-2 w-1/2 bg-blue-500 rounded-lg"></div>
                </div>
                <div class="flex justify-between mt-2 text-gray-600 text-sm">
                    <span class="text-blue-500 font-semibold">1. Pengiriman</span>
                    <span class="text-gray-400">2. Pembayaran</span>
                </div>
            </div>

            <!-- Alamat Pengiriman (Lebih Dekat dengan Progress Bar) -->
            <div class="bg-white p-4 mt-2 rounded-lg shadow-md">
                <h2 class="font-semibold text-lg">Alamat Pengiriman</h2>
                <button class="mt-2 border border-gray-400 rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100">
                    Buat Alamat
                </button>
            </div>

            <!-- Produk (Lebih Dekat dengan Alamat Pengiriman) -->
            <div class="bg-white p-4 mt-2 rounded-lg shadow-md flex items-center">
                <img src="{{ asset('images/book-cover.jpg') }}" alt="Book Cover" class="w-24 h-32 object-cover rounded-md">
                <div class="ml-4 flex flex-col justify-between h-full">
                    <div>
                        <span class="bg-gray-200 text-xs px-2 py-1 rounded">Soft Cover</span>
                        <h3 class="text-lg font-bold mt-1 leading-tight">Lout of Count’s Family</h3>
                    </div>
                    <p class="text-xl font-semibold text-gray-800">Rp199.000</p>
                </div>
            </div>
        </div>

        <!-- Ringkasan Belanja (Sejajar dengan Progress Bar) -->
        <div class="w-1/3 bg-white p-4 rounded-lg shadow-md self-start">
            <h2 class="font-semibold text-lg">Ringkasan Belanja</h2>
            <div class="flex justify-between text-gray-700 mt-2">
                <span>Total Harga</span>
                <span class="font-medium">Rp199.000</span>
            </div>
            <div class="flex justify-between text-gray-700">
                <span>Diskon Belanja</span>
                <span class="font-medium">Rp0</span>
            </div>
            <div class="flex justify-between font-semibold text-lg mt-2">
                <span>Total Belanja</span>
                <span class="text-blue-600 font-bold">Rp199.000</span>
            </div>
            <button class="w-full mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Lanjut Pembayaran
            </button>
        </div>
    </div>
</div>
@endsection

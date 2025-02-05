@extends('layouts.marketplaceLayout')

@include('layouts.loader')

@section('content')
<div class="container mx-auto p-6">
  <!-- Header -->
  <div class="mb-6">
    <h1 class="text-2xl font-semibold">Keranjang</h1>
  </div>

  <!-- Cart Section -->
  <div class="grid grid-cols-3 gap-6">
    <div class="col-span-2 space-y-4">
      <!-- Card: Select All & Hapus -->
      <div class="flex items-center p-4 bg-white rounded-2xl shadow-md border">
        <input type="checkbox" id="select-all" class="mr-4">
        <label for="select-all" class="flex-grow text-gray-700">Semua</label>
        <button class="flex items-center text-red-500 hover:text-red-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.136 21H7.864a2 2 0 01-1.997-1.858L5 7m5 4v6m4-6v6M9 7h6" />
          </svg>
          Hapus
        </button>
      </div>

      <!-- Card: Item -->
      <div class="flex items-center p-4 bg-white rounded-2xl shadow-md border">
        <input type="checkbox" class="mr-4">
        <img src="img/promo1.png" alt="Buku Cover" class="w-24 h-32 object-cover rounded mr-4">
        <div class="flex-grow">
          <p class="font-medium">Soft Cover</p>
          <p class="text-sm text-gray-600">Lout of Count's Family</p>
          <p class="text-red-500 font-bold">Rp199.000</p>
        </div>
        <div class="flex items-center space-x-2">
          <button class="text-red-500 hover:text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.136 21H7.864a2 2 0 01-1.997-1.858L5 7m5 4v6m4-6v6M9 7h6" />
            </svg>
          </button>
          <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">-</button>
          <span>1</span>
          <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
        </div>
      </div>
    </div>

    <!-- Cart Summary -->
    <div class="bg-white p-4 rounded-2xl shadow-md border">
      <h2 class="text-lg font-semibold mb-4">Ringkasan Keranjang</h2>
      <div class="flex justify-between mb-2">
        <span>Total Harga (0 Barang)</span>
        <span>Rp0</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Diskon Belanja</span>
        <span>Rp0</span>
      </div>
      <div class="flex justify-between font-semibold mb-4">
        <span>Subtotal</span>
        <span>Rp0</span>
      </div>
      <button class="w-full bg-gray-300 text-gray-700 py-2 rounded cursor-not-allowed" disabled>CheckOut</button>
    </div>
  </div>

  <!-- Recommendations Section -->
<h2 class="text-xl font-semibold mt-8 mb-4">Rekomendasi Untukmu</h2>
<div class="grid grid-cols-5 gap-4">
  @foreach (range(1, 1) as $item)
  <div class="border rounded-lg p-4 flex flex-col items-center">
    <!-- Gambar Vertikal -->
    <div class="bg-red-200 h-40 w-28 rounded-lg mb-2"></div>
    <!-- Konten -->
    <div class="text-center">
      <p class="font-semibold">Judul</p>
      <p class="text-gray-500">Harga</p>
    </div>
  </div>
  @endforeach
</div>

</div>
@endsection

@extends('layouts.marketplaceLayout')
@include('layouts.loader')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Sidebar Profil -->
        <div class="md:w-1/4 bg-white shadow-lg rounded-xl p-6 border border-gray-200">
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    </svg>
                </div>
                <h2 class="mt-4 text-lg font-semibold">User</h2>
                <p class="text-gray-500 text-sm">user@gmail.com</p>
            </div>
            <div class="mt-6 space-y-4 border-t pt-4">
                <a href="#" class="flex items-center text-blue-600 font-medium">Profile Summary</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 19.5V5a2 2 2 0 012-2h10a2 2 0 012 2v14.5a2.5 2.5 0 01-2.5 2.5H6.5A2.5 2.5 0 014 19.5zM6.5 17H17"></path>
                    </svg>
                    Koleksi Buku
                </a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21l-1.45-1.318C5.4 15.364 2 12.273 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.773-3.4 6.864-8.55 11.182L12 21z"></path>
                    </svg>
                    WishList
                </a>

                <hr>
                <a href="#" class="flex items-center text-blue-600 font-medium">Profil</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600">Pengaturan Profil</a>
                <hr>
                <a href="#" class="flex items-center text-blue-600 font-medium">Transaksi</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600">Riwayat Pembayaran</a>
                <hr>
                <a href="#" class="block text-blue-600 font-medium">Notifikasi</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600">Notifikasi Saya</a>
                <hr>
                <a href="#" class="block text-blue-600 font-medium">Bantuan</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600">Pusat Bantuan</a>
            </div>
        </div>

        <!-- Detail Profil -->
        <div class="md:w-3/4 bg-white shadow-lg rounded-xl p-6 border border-gray-200 flex flex-col">
            <h2 class="text-xl font-semibold text-blue-600">Profile</h2> 

            <div class="flex flex-col md:flex-row gap-6 mt-4">
                <!-- Foto Profil + Button -->
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 bg-gray-300 rounded-full flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                    </div>
                    <button class="mt-4 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 4v16m-8-8h16"></path></svg>
                        Ubah Foto Profil
                    </button>
                </div>

                <!-- Informasi Pengguna -->
                <div class="flex-grow ml-6"> <!-- Menggunakan flex-grow agar tinggi card otomatis menyesuaikan isi -->
                    <h3 class="text-lg font-semibold text-blue-600">Informasi Pengguna</h3> 
                    <p class="text-gray-600">Nama Lengkap</p>
                    <p class="text-gray-600">Tanggal Lahir</p>
                    <p class="text-gray-600">Jenis Kelamin</p>
                    <hr class="my-4">
                    <h3 class="text-lg font-semibold text-blue-600">Informasi Personal</h3> 
                    <p class="text-gray-600">Email</p>
                    <p class="text-gray-600">No Telepon</p>

                    <!-- Button Ubah Kata Sandi tetap di dalam card -->
                    <button class="mt-4 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 12h16M12 4v16"></path></svg>
                        Ubah Kata Sandi
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

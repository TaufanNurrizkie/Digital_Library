@extends('layouts.marketplaceLayout')
@include('layouts.loader')

@section('content')
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">


    <main class="container mx-auto p-6">
        <!-- Carousel -->
        <div class="grid grid-cols-3 gap-4 mb-8">
            <div class="col-span-2 relative">
                <div class="bg-gray-300 h-64 rounded-lg"></div>
                <button class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">&#9664;</button>
                <button class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">&#9654;</button>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="bg-gray-300 h-32 rounded-lg"></div>
                <div class="bg-gray-300 h-32 rounded-lg"></div>
            </div>
        </div>

        <!-- Categories -->
        <div class="grid grid-cols-4 gap-4 mb-8">
            <div class="bg-blue-200 h-32 rounded-lg"></div>
            <div class="bg-red-200 h-32 rounded-lg"></div>
            <div class="bg-blue-100 h-32 rounded-lg"></div>
            <div class="bg-red-100 h-32 rounded-lg"></div>
        </div>

        <!-- Buku Komik Section -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Buku Komik</h2>
                <a href="#" class="text-blue-500 hover:underline">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-5 gap-4">
                <div class="border rounded-lg p-4 flex flex-col items-center">
                    <div class="bg-blue-200 h-40 w-28 rounded-lg mb-2 border-2 border-blue-500"></div>
                    <div class="text-center">
                        <p class="font-semibold">Judul</p>
                        <p class="text-gray-500">Harga</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buku Fiksi Section -->
        <div>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Buku Fiksi</h2>
                <a href="#" class="text-blue-500 hover:underline">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-5 gap-4">
                <div class="border rounded-lg p-4 flex flex-col items-center">
                    <div class="bg-red-200 h-40 w-28 rounded-lg mb-2"></div>
                    <div class="text-center">
                        <p class="font-semibold">Judul</p>
                        <p class="text-gray-500">Harga</p>
                    </div>
                </div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold">Buku Fiksi</h2>
                        <a href="#" class="text-blue-500 hover:underline">Lihat Semua</a>
                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <div class="border rounded-lg p-4 flex flex-col items-center">
                            <div class="bg-red-200 h-40 w-28 rounded-lg mb-2"></div>
                            <div class="text-center">
                                <p class="font-semibold">Judul</p>
                                <p class="text-gray-500">Harga</p>
                            </div>
                        </div>
                            </div>
                        </div><div>
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-bold">Buku Fiksi</h2>
                                <a href="#" class="text-blue-500 hover:underline">Lihat Semua</a>
                            </div>
                            <div class="grid grid-cols-5 gap-4">
                                <div class="border rounded-lg p-4 flex flex-col items-center">
                                    <div class="bg-red-200 h-40 w-28 rounded-lg mb-2"></div>
                                    <div class="text-center">
                                        <p class="font-semibold">Judul</p>
                                        <p class="text-gray-500">Harga</p>
                                    </div>
                                </div>
                                    </div>
                                </div>
            </div>
        </main>
    </body>
    </html>
    @endsection
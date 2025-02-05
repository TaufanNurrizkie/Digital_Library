@extends('layouts.marketplaceLayout')
{{-- @include('layouts.loader') --}}

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
            <div class="col-span-2 relative overflow-hidden">
                <div id="carousel-container" class="flex transition-transform duration-500 ease-in-out w-full">
                    <img src="img/promo1.png" class="w-full h-64 object-cover flex-shrink-0">
                    <img src="img/promo2.png" class="w-full h-64 object-cover flex-shrink-0">
                    <img src="img/Logo.png" class="w-full h-64 object-cover flex-shrink-0">
                </div>
                <button id="prev-btn" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">&#9664;</button>
                <button id="next-btn" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">&#9654;</button>
            </div>
            <div class="flex flex-col space-y-4">
                <div class="bg-gray-300 h-32 rounded-lg flex items-center justify-center overflow-hidden">
                    <img src="img/promo1.png" class="h-full w-full object-cover rounded-lg">
                </div>
                <div class="bg-gray-300 h-32 rounded-lg flex items-center justify-center overflow-hidden">
                    <img src="img/promo2.png" class="h-full w-full object-cover rounded-lg">
                </div>
            </div>
        </div>
        


        <!-- Categories -->
        <div class="grid grid-cols-4 gap-4 mb-8">
            <div class="flex flex-col items-center">
            <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <p class="text-center">Category 1</p>
            </div>
            <div class="flex flex-col items-center">
            <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <p class="text-center">Category 2</p>
            </div>
            <div class="flex flex-col items-center">
            <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <p class="text-center">Category 3</p>
            </div>
            <div class="flex flex-col items-center">
            <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <p class="text-center">Category 4</p>
            </div>
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
                                </div>
            </div>
        </main>
    </body>
    </html>


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll("#carousel-container img");
        const carouselContainer = document.getElementById("carousel-container");
        const prevBtn = document.getElementById("prev-btn");
        const nextBtn = document.getElementById("next-btn");
        let currentIndex = 0;
        const totalImages = images.length;

        function updateImage() {
            carouselContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % totalImages;
            updateImage();
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            updateImage();
        }

        prevBtn.addEventListener("click", prevImage);
        nextBtn.addEventListener("click", nextImage);

        setInterval(nextImage, 3000);
    });
    </script>
    @endsection
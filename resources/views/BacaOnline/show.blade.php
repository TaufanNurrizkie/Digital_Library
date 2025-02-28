@extends('layouts.marketplaceLayout')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
    <!-- Gambar Buku -->
    <div class="col-span-1 flex justify-center">
        <div class="bg-gray-400 w-64 h-80 rounded-lg flex items-center justify-center">
            <img src="{{ asset('storage/' . $book->cover_img) }}" alt="{{ $book->title }}" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>

    <!-- Detail Buku -->
    <div class="col-span-2 flex flex-col">
        <div class="flex items-center space-x-4">
            <div>
                <h1 class="text-2xl font-bold">{{ $book->title }}</h1>
                <p class="text-gray-600">{{ $book->author }}</p>
            </div>
        </div>

        <div class="mt-4 flex space-x-2">
            <button id="btn-info" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Info</button>
            <button id="btn-sinopsis" class="bg-gray-300 text-black px-4 py-2 rounded-lg">Sinopsis</button>
        </div>

        <!-- Info Box -->
        <div class="mt-4 border border-black p-4 rounded-lg">
            <p id="book-content" 
               data-description="{{ $book->description }}" 
               data-sinopsis="{{ $book->sinopsis }}">
                {{ $book->description }}
            </p>
        </div>

        <!-- Comments & Bookmark -->
        <div class="mt-4 flex space-x-4">
            <button class="flex items-center text-blue-500">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 5h6m-3 3v6m-6 4h12"></path>
                </svg>
                Comments
            </button>

            <button class="flex items-center text-blue-500">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 7h14M5 7l7 7 7-7M5 17h14"></path>
                </svg>
                Bookmark
            </button>
        </div>
    </div>
</div>

<!-- Daftar Chapter -->
<div class="mt-6 mx-4 border border-gray-300 p-4 rounded-lg">
    <h2 class="text-xl font-semibold">Chapters</h2>
    <ul class="mt-2">
        @foreach ($book->chapters as $chapter)
            <li class="border-b py-2 flex items-center justify-between">
                <a href="{{ route('chapters.show', $chapter->id) }}" class="text-blue-500 hover:underline">
                    {{ $chapter->title }}
                </a>
                
                @if($user && $user->readChapters->contains($chapter->id))
                    <span class="text-green-500 font-semibold">✅ Sudah Dibaca</span>
                @endif
            </li>
        @endforeach
    </ul>
</div>




<!-- Script untuk tombol sinopsis/info -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const btnInfo = document.getElementById("btn-info");
    const btnSinopsis = document.getElementById("btn-sinopsis");
    const bookContent = document.getElementById("book-content");

    // Ambil data dari atribut dataset
    const description = bookContent.dataset.description;
    const sinopsis = bookContent.dataset.sinopsis;

    btnInfo.addEventListener("click", function() {
        bookContent.textContent = description;
        btnInfo.classList.add("bg-blue-500", "text-white");
        btnInfo.classList.remove("bg-gray-300", "text-black");

        btnSinopsis.classList.add("bg-gray-300", "text-black");
        btnSinopsis.classList.remove("bg-blue-500", "text-white");
    });

    btnSinopsis.addEventListener("click", function() {
        bookContent.textContent = sinopsis;
        btnSinopsis.classList.add("bg-blue-500", "text-white");
        btnSinopsis.classList.remove("bg-gray-300", "text-black");

        btnInfo.classList.add("bg-gray-300", "text-black");
        btnInfo.classList.remove("bg-blue-500", "text-white");
    });
});
</script>

@endsection

@extends('layouts.marketplaceLayout')

@section('content')
<div class="container mx-auto p-6">
    <a href="{{ url()->previous() }}" class="text-blue-500">&larr; Back</a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        <!-- Gambar Buku -->
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Gambar Buku -->
            <div class="bg-gray-400 w-full md:w-1/2 h-64 rounded-lg flex items-center justify-center">
            <img src="{{ asset('storage/' . $book->cover_img) }}" alt="{{ $book->title }}" class="w-full h-full object-cover rounded-lg">
            </div>

            <!-- Detail Buku -->
            <div class="md:w-1/2">
            <h1 class="text-3xl font-bold">{{ $book->title }}</h1>

            <div class="mt-4 flex space-x-2">
                <button id="btn-info" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Info</button>
                <button id="btn-sinopsis" class="bg-gray-300 text-black px-4 py-2 rounded-lg">Sinopsis</button>
            </div>

            <!-- Deskripsi/Sinopsis -->
            <div id="info-box" class="mt-4 border border-black p-4 rounded-lg">
                <p id="book-content">{{ $book->description }}</p>
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
        </div>

        


        </div>
            <!-- Daftar Chapter -->
            <div class="mt-6 border border-gray-300 p-4 rounded-lg">
                <h2 class="text-xl font-semibold">Chapters</h2>
                <ul class="mt-2">
                    @foreach ($book->chapters as $chapter)
                        <li class="border-b py-2">
                            <a href="{{ route('chapters.show', $chapter->id) }}" class="text-blue-500 hover:underline">
                                {{ $chapter->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
    </div>
</div>

<!-- Script untuk tombol sinopsis/info -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const btnInfo = document.getElementById("btn-info");
    const btnSinopsis = document.getElementById("btn-sinopsis");
    const bookContent = document.getElementById("book-content");

    btnInfo.addEventListener("click", function() {
        bookContent.textContent = "{{ $book->description }}";
        btnInfo.classList.add("bg-blue-500", "text-white");
        btnInfo.classList.remove("bg-gray-300", "text-black");

        btnSinopsis.classList.add("bg-gray-300", "text-black");
        btnSinopsis.classList.remove("bg-blue-500", "text-white");
    });

    btnSinopsis.addEventListener("click", function() {
        bookContent.textContent = "{{ $book->sinopsis }}";
        btnSinopsis.classList.add("bg-blue-500", "text-white");
        btnSinopsis.classList.remove("bg-gray-300", "text-black");

        btnInfo.classList.add("bg-gray-300", "text-black");
        btnInfo.classList.remove("bg-blue-500", "text-white");
    });
});
</script>
@endsection

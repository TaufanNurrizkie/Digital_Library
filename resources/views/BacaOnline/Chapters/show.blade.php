@extends('layouts.marketplaceLayout')

@section('content')
<div class="container mx-auto p-6">
    <a href="{{ url()->previous() }}" class="text-blue-500">&larr; Back</a>

    <h1 class="text-3xl font-bold text-center">{{ $chapter->title }}</h1>

    <!-- Navigasi Chapter -->
    <div class="mt-4 flex justify-between items-center">
        <!-- Dropdown Semua Chapter -->
        <div class="relative">
            <button id="dropdownButton"
                    class="bg-gray-700 text-white px-4 py-2 rounded-full text-sm hover:bg-gray-800 transition flex items-center space-x-2">
                📖 Lihat Semua Chapter
                <svg id="dropdownIcon" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>

            <!-- Isi Dropdown -->
            <div id="dropdownMenu" class="hidden absolute left-0 mt-2 w-56 bg-white border rounded-lg shadow-lg z-10 overflow-auto max-h-60">
                <ul class="py-2 text-gray-700">
                    @foreach($allChapters as $ch)
                        <li>
                            <a href="{{ route('chapters.show', $ch->id) }}" 
                               class="block px-4 py-2 hover:bg-gray-200 {{ in_array($ch->id, $readChapters) ? 'text-gray-400 line-through' : 'text-black' }}5">
                                Chapter {{ $loop->iteration }}: {{ $ch->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Navigasi Sebelumnya & Selanjutnya -->
        <div class="flex space-x-4">
            @if($previousChapter)
                <a href="{{ route('chapters.show', $previousChapter->id) }}" class="text-blue-500">&larr; Sebelumnya</a>
            @endif

            @if($nextChapter)
                <a href="{{ route('chapters.show', $nextChapter->id) }}" class="text-blue-500">Selanjutnya &rarr;</a>
            @endif
        </div>
    </div>

    <!-- Konten Chapter -->
    <div class="mt-4 border p-4 rounded-lg">
        <p>{{ $chapter->content }}</p>

        <!-- Menampilkan gambar dari pages -->
        @if($chapter->pages->count() > 0)
            <div class="mt-4 grid grid-cols-1 gap-4">
                @foreach($chapter->pages as $page)
                    <div class="border rounded-lg overflow-hidden">
                        <img src="{{ asset('img/' . $page->image_url) }}" 
                             alt="Page {{ $page->number }}" 
                             class="w-full h-auto max-w-[800px] mx-auto">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

<!-- JavaScript untuk Dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dropdownButton = document.getElementById("dropdownButton");
        const dropdownMenu = document.getElementById("dropdownMenu");
        const dropdownIcon = document.getElementById("dropdownIcon");

        dropdownButton.addEventListener("click", function () {
            dropdownMenu.classList.toggle("hidden"); // Tampilkan/Sembunyikan menu
            dropdownIcon.classList.toggle("rotate-180"); // Animasi panah
        });

        // Klik di luar dropdown untuk menutupnya
        document.addEventListener("click", function (event) {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
                dropdownIcon.classList.remove("rotate-180");
            }
        });
    });
</script>
@endsection

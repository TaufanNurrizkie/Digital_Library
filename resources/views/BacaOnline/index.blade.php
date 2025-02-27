@extends('layouts.marketplaceLayout')
@section('content')

<div class="container mx-auto p-6">
    <h2 class="text-xl font-bold">Top Komik</h2>
    <div class="grid grid-cols-5 gap-4 my-4">
        @foreach($topKomik as $komik)
            <a href="{{ route('books.show', $komik->id) }}" class="border rounded-lg p-2 flex flex-col items-center bg-white shadow-md hover:shadow-lg transition-shadow duration-300" style="width: 214px; height: 333px;">
                <img src="{{ asset('storage/'.$komik->cover_img) }}" alt="{{ $komik->title }}" class="w-full h-60 object-cover rounded mb-4">
                <div class="text-start">
                    <p class="font-semibold">{{ $komik->title }}</p>
                    <p class="text-sm text-gray-700">{{ $komik->author }}</p>
                </div>
            </a>
        @endforeach
    </div>

    <h2 class="text-xl font-bold">Top Novel</h2>
    <div class="grid grid-cols-5 gap-4 my-4">
        @foreach($topNovel as $novel)
            <a href="{{ route('books.show', $novel->id) }}" class="border rounded-lg p-2 flex flex-col items-center bg-white shadow-md hover:shadow-lg transition-shadow duration-300" style="width: 214px; height: 333px;">
                <img src="{{ asset('storage/'.$novel->cover_img) }}" alt="{{ $novel->title }}" class="w-full h-60 object-cover rounded mb-4">
                <div class="text-start">
                    <p class="font-semibold">{{ $novel->title }}</p>
                    <p class="text-sm text-gray-700">{{ $novel->author }}</p>
                </div>
            </a>
        @endforeach
    </div>

    <div class="container mx-auto p-6">
        <div class="flex space-x-6 items-start">
            <!-- Bagian Terbaru -->
            <div class="w-2/3">
                <h2 class="text-xl font-bold mb-4">Terbaru</h2>
                <div class="grid grid-cols-4 gap-4">
                    @foreach($terbaru as $book)
                    <a href="{{ route('books.show', $book->id) }}" 
                       class="border rounded-lg p-2 flex flex-col items-center bg-white shadow-md hover:shadow-lg transition-shadow duration-300 w-[180px] h-[300px]">
                        <img src="{{ asset('storage/'.$book->cover_img) }}" 
                             alt="{{ $book->title }}" 
                             class="w-full h-48 object-cover rounded mb-2">
                        <div class="text-center">
                            <p class="font-semibold text-sm">{{ $book->title }}</p>
                            <p class="text-xs text-gray-700">{{ $book->author }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
    
            <!-- Trending Section -->
            <div class="w-1/3">
                <h2 class="text-xl font-semibold mb-4">Trending</h2>
                <div class="flex space-x-2 mb-4">
                    <button class="bg-red-500 text-white px-3 py-2 rounded-lg text-sm">Harian</button>
                    <button class="bg-gray-300 px-3 py-2 rounded-lg text-sm hover:bg-gray-400">Mingguan</button>
                    <button class="bg-gray-300 px-3 py-2 rounded-lg text-sm hover:bg-gray-400">Semua</button>
                </div>
    
                {{-- <div class="space-y-4">
                    @foreach($trending as $rank => $book)
                        <div class="flex items-center space-x-3 border-b pb-3">
                            <div class="w-7 h-7 bg-blue-100 text-center rounded-full flex items-center justify-center font-bold text-sm">
                                {{ $rank + 1 }}
                            </div>
                            <a href="{{ route('books.show', $book->id) }}" class="flex items-center space-x-2">
                                <img src="{{ asset('storage/'.$book->cover_img) }}" 
                                     alt="{{ $book->title }}" 
                                     class="w-12 h-16 object-cover rounded">
                                <div>
                                    <p class="font-semibold text-sm">{{ $book->title }}</p>
                                    <p class="text-gray-500 text-xs">Rating: ★{{ $book->rating }}/5</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </div>
    
</div>

@endsection

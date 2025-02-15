@extends('layouts.marketplaceLayout')
@include('layouts.loader')

@section('content')
<div class="flex justify-between items-center mb-4 p-4">
    <h2 class="text-xl font-bold">Buku Komik</h2>
</div>

@if ($books->isEmpty())
    <p class="text-gray-500 text-center">Tidak ada buku komik yang tersedia saat ini.</p>
@else
    <div class="grid grid-cols-5 gap-4 p-4">
        @foreach ($books as $book)
            <a href="{{ route('product.show', $book->id) }}" class="border rounded-lg p-4 flex flex-col items-center bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="h-40 w-28 rounded-lg mb-2 border-2 border-blue-500 overflow-hidden">
                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->name }}" class="h-full w-full object-cover">
                </div>
                <div class="text-center">
                    <p class="font-semibold">{{ $book->name }}</p>
                    <p class="text-gray-500">Rp{{ number_format($book->price, 0, ',', '.') }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endif
@endsection

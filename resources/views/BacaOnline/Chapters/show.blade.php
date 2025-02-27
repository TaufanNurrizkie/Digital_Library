@extends('layouts.marketplaceLayout')

@section('content')
<div class="container mx-auto p-6">
    <a href="{{ url()->previous() }}" class="text-blue-500">&larr; Back</a>

    <h1 class="text-3xl font-bold text-center">{{ $chapter->title }}</h1>

    <!-- Navigasi Chapter -->
    <div class="mt-4 flex justify-between">
        @if($previousChapter)
            <a href="{{ route('chapters.show', $previousChapter->id) }}" class="text-blue-500">&larr; Sebelumnya</a>
        @else
            <span></span>
        @endif

        @if($nextChapter)
            <a href="{{ route('chapters.show', $nextChapter->id) }}" class="text-blue-500">Selanjutnya &rarr;</a>
        @endif
    </div>

<!-- Konten Chapter -->
<div class="mt-4 border p-4 rounded-lg">
    <p>{{ $chapter->content }}</p>

    <!-- Menampilkan gambar dari pages -->
    @if($chapter->pages->count() > 0)
        <div class="mt-4 grid grid-cols-1 gap-4"> <!-- Set grid menjadi satu kolom -->
            @foreach($chapter->pages as $page)
                <div class="border rounded-lg overflow-hidden">
                    <img src="{{ asset('img/' . $page->image_url) }}" alt="Page {{ $page->number }}" class="w-full h-auto max-w-[800px] mx-auto"> <!-- Perkecil gambar -->
                </div>
            @endforeach
        </div>
    @endif
</div>

</div>
@endsection

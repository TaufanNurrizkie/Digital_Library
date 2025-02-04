@extends('layouts.marketplaceLayout')
@include('layouts.loader')

@section('content')
<div class="flex justify-between items-center mb-4 p-4">
    <h2 class="text-xl font-bold">Buku Komik</h2>
</div>
    <div class="grid grid-cols-5 gap-4 p-4">
        <div class="border rounded-lg p-4 flex flex-col items-center">
            <div class="bg-blue-200 h-40 w-28 rounded-lg mb-2 border-2 border-blue-500"></div>
            <div class="text-center">
                <p class="font-semibold">Judul</p>
                <p class="text-gray-500">Harga</p>
            </div>
            </div>
        {{-- @endforeach --}}
    </div>
@endsection

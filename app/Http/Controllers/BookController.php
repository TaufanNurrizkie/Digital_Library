<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
    $topKomik = Book::whereIn('type', ['comic', 'manga', 'manhwa'])->latest()->take(5)->get();
    $topNovel = Book::where('type', 'novel')->latest()->take(5)->get();
    $terbaru = Book::latest()->take(8)->get();


    return view('BacaOnline.index', compact('topKomik', 'topNovel', 'terbaru'));
}


    public function show($id)
{
        $book = Book::findOrFail($id);
        return view('BacaOnline.show', compact('book'));
}
}

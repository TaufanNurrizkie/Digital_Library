<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    $book = Book::with('chapters')->findOrFail($id);

    $user = Auth::check() ? Auth::user()->load('readChapters') : null;

    return view('BacaOnline.show', compact('book', 'user'));
}


}

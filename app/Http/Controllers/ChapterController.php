<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function show($id)
    {
        $chapter = Chapter::with('pages')->findOrFail($id);
        
        // Cari chapter sebelumnya dalam buku yang sama
        $previousChapter = Chapter::where('book_id', $chapter->book_id)
            ->where('id', '<', $chapter->id)
            ->orderBy('id', 'desc')
            ->first();
    
        // Cari chapter selanjutnya dalam buku yang sama
        $nextChapter = Chapter::where('book_id', $chapter->book_id)
            ->where('id', '>', $chapter->id)
            ->orderBy('id', 'asc')
            ->first();
    
        // Ambil halaman yang sedang dibaca (jika ada)
        $currentPage = request()->query('page', 1);
    
        return view('BacaOnline.Chapters.show', compact('chapter', 'previousChapter', 'nextChapter', 'currentPage'));
    }
    
    
}

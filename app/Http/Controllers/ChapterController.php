<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\ChapterRead; // Tambahkan model ChapterRead
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
{
    public function show($id)
    {
        $chapter = Chapter::with('pages')->findOrFail($id);
        $userId = Auth::id(); // Ambil ID pengguna yang sedang login

        // Simpan ke database jika belum pernah dibaca
        if ($userId && !ChapterRead::where('user_id', $userId)->where('chapter_id', $id)->exists()) {
            ChapterRead::create([
                'user_id' => $userId,
                'chapter_id' => $id,
            ]);
        }

        // Ambil semua chapter dalam buku yang sama
        $allChapters = Chapter::where('book_id', $chapter->book_id)->orderBy('id')->get();

        // Ambil daftar chapter yang sudah dibaca oleh pengguna
        $readChapters = ChapterRead::where('user_id', $userId)->pluck('chapter_id')->toArray();

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

        return view('BacaOnline.Chapters.show', compact('chapter', 'previousChapter', 'nextChapter', 'currentPage', 'allChapters', 'readChapters'));
    }
}

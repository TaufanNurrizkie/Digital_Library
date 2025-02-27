<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'title', 'content'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }



    public function pages()
    {
        return $this->hasMany(Page::class);
    }

}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'sinopsis'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChapterRead extends Model
{
    protected $fillable = ['user_id', 'chapter_id'];
}

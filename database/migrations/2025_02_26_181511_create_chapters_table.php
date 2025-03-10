<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->integer('chapter_number');
            $table->string('title')->nullable();
            $table->date('release_date')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('chapters');
    }
};




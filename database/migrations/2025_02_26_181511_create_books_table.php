<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('cover_img')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['ongoing', 'completed'])->default('ongoing');
            $table->enum('type', ['comic', 'novel', 'manga', 'manhwa', 'manhua', 'knowledge']);
            $table->string('genre'); // Bisa menyimpan beberapa genre dengan format JSON
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('books');
    }
};


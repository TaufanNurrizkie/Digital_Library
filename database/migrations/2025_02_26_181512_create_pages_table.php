<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapter_id')->constrained('chapters')->onDelete('cascade');
            $table->integer('page_number');
            $table->string('image_url'); // Lokasi penyimpanan gambar halaman
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('pages');
    }
};


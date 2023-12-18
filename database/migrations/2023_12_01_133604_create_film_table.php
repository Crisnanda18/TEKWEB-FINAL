<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('film', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('sinopsis');
        $table->integer('tahun');
        $table->string('poster');
        $table->string('sutradara');
        $table->string('video_link');
        $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade')->onUpdate('cascade')->nullable();
        $table->foreignId('genre_id')->constrained('genre')->onDelete('cascade')->onUpdate('cascade')->nullable(); // add this line
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};

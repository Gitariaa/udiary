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
        Schema::create('poems', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul diary
            $table->longText('content'); // Isi diary
            $table->string('theme');
            $table->unsignedBigInteger('user_id'); // ID user yang membuat diary
            $table->foreign('user_id')->references('id')->on('users'); // Relasi ke tabel users
            $table->unsignedBigInteger('edited_by')->nullable(); // User yang terakhir mengedit
            $table->foreign('edited_by')->references('id')->on('users'); // Relasi ke tabel users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poems');
    }
};

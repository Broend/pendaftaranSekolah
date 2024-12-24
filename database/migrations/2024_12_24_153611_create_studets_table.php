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
        Schema::create('studets', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100);
            $table->string('nomorHp', length: 13);
            $table->string('email', length: 150)->unique();
            $table->string('asalSekolah', length: 100);
            $table->string('jurusan', length: 100);
            $table->string('tanggalLahir');
            $table->string('alamat', length: 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studets');
    }
};

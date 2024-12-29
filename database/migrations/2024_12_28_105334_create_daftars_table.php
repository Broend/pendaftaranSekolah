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
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('jurusan', length: 50);
            $table->string('angakatan', length: 50);
            $table->string('nis', length: 20);
            $table->string('alamat', length: 150);
            $table->string('nomorhp', length: 13);
            $table->string('jenis_kelamin', length: 13);
            $table->date('tanggal_lahir');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};

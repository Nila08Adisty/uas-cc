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
        Schema::create('tb_pengembalian', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->string('id_buku');
            $table->string('id_petugas');
            $table->string('tanggal_kembali');
            $table->string('denda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengembalian');
    }
};

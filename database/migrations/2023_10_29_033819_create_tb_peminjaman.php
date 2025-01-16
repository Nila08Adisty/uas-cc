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
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->integer('id_buku');
            $table->date('tanggal');
            $table->string('nama');
            $table->string('telepon');
            $table->date('tanggal_pinjam');
            $table->decimal('jumlah');
            $table->string('status_pinjam');
            $table->date('tanggal_kembali');
            $table->string('denda');
            $table->string('id_user');
            $table->bigInteger('stok');
            $table->decimal('sisa_stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peminjaman');
    }
};

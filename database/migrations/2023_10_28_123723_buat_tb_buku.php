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
    { {
            Schema::create('tb_buku', function (Blueprint $table) {
                $table->id('id_buku');
                $table->string('judul_buku');
                $table->string('jenis_buku');
                $table->string('pengarang');
                $table->string('penerbit');
                $table->string('tahun_penerbit');
                $table->integer('id_kategori');
                $table->bigInteger('stok');
                $table->string('gambar')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tb_buku');
    }
};

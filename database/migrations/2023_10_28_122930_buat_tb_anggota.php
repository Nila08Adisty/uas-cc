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
        {
            Schema::create('tb_anggota', function (Blueprint $table) {
                $table->id('id_anggota');
                $table->integer('id_kategori');
                $table->string('nama_anggota');
                $table->string('alamat');
                $table->string('no_telp');
                $table->string('jenis_kelamin');
                $table->string('tempat_tgl_lahir');
                $table->timestamps();
           });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_anggota');
    }
};

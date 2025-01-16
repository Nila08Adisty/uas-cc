<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_buku')->insert([
            'judul_buku' => 'Rumah Kaca',
            'jenis_buku' => 'Fiksi',
            'pengarang' => 'Dwipa',
            'penerbit' => 'gfju',
            'tahun_penerbit' => '2001',
            'id_kategori' => '1',
            'stok' => '10',
        ]);
        DB::table('tb_buku')->insert([
            'judul_buku' => 'Rumah Gurita',
            'jenis_buku' => 'Horror',
            'pengarang' => 'Dwipa',
            'penerbit' => 'yhokl',
            'tahun_penerbit' => '2013',
            'id_kategori' => '2',
            'stok' => '15',
        ]);
        DB::table('tb_buku')->insert([
            'judul_buku' => 'Rumah Kaca',
            'jenis_buku' => 'Fiksi',
            'pengarang' => 'Dwipa',
            'penerbit' => 'gfju',
            'tahun_penerbit' => '2001',
            'id_kategori' => '3',
            'stok' => '20',
        ]);
        DB::table('tb_buku')->insert([
            'judul_buku' => 'Jasa Pariwisata',
            'jenis_buku' => 'Explore',
            'pengarang' => 'Dwipa',
            'penerbit' => 'adgv',
            'tahun_penerbit' => '2018',
            'id_kategori' => '4',
            'stok' => '25',
        ]);
        DB::table('tb_buku')->insert([
            'judul_buku' => 'Mental Health',
            'jenis_buku' => 'Kesehatan',
            'pengarang' => 'Dwipa',
            'penerbit' => 'gtruig',
            'tahun_penerbit' => '2022',
            'id_kategori' => '5',
            'stok' => '30',
        ]);
        DB::table('tb_buku')->insert([
            'judul_buku' => 'Cara Menjaga Kesehatan',
            'jenis_buku' => 'Kesehatan',
            'pengarang' => 'Dwipa',
            'penerbit' => 'egds',
            'tahun_penerbit' => '2023',
            'id_kategori' => '6',
            'stok' => '35',
        ]);
    }
}

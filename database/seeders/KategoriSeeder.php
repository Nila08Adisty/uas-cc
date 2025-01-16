<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Karya Umum',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Filsafat',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Ilmu Sosial',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Bahasa',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Ilmu Murni',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Pengetahuan Praktis',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Kesenian dan Hiburan',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Kesusastraan',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Sastra',
        ]);
        DB::table('tb_kategori')->insert([
            'nama_kategori' => 'Sejarah',
        ]);
    }
}

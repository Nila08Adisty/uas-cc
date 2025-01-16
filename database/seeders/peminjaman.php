<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class peminjaman extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_peminjaman')->insert([
            'id_buku' => '1',
            'tanggal' => Carbon::parse('18-07-2023')->toDateString(),
            'nama' => 'Karya Umum',
            'telepon' => '081915948457',
            'tanggal_pinjam' => Carbon::parse('19-07-2023')->toDateString(),
            'jumlah' => '1',
            'status_pinjam' => 'Tersedia',
            'tanggal_kembali' => Carbon::parse('28-07-2023')->toDateString(),
            'denda' => 'Rp. 25.000',
            'id_user' => '1',
            'stok' => '10',
            'sisa_stok' => '100',
        ]);
    }
}

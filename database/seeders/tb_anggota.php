<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class tb_anggota extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_anggota')->insert([
            'id_anggota' => '001',
            'nama_anggota' => 'Administrator',
            'alamat' => 'JL. KAMBOJA',
            'no_telp' => '145689',
            'jenis_kelamin' => 'Laki laki',
            'tempat_tgl_lahir' => 'AMERIKA, 14 Januari 2000',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '002',
            'nama_anggota' => 'Dwipa',
            'alamat' => 'JL. BATUYANG',
            'no_telp' => '4623876',
            'jenis_kelamin' => 'Perempuan',
            'tempat_tgl_lahir' => 'KOREA, 20 July 2001',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '003',
            'nama_anggota' => 'Vera',
            'alamat' => 'JL. MELATI',
            'no_telp' => '731256',
            'jenis_kelamin' => 'Perempuan',
            'tempat_tgl_lahir' => 'AUSTRALIA, 01 MEI 2016',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '004',
            'nama_anggota' => 'Dinda',
            'alamat' => 'JL. MATAHARI NO. 3',
            'no_telp' => '237465',
            'jenis_kelamin' => 'Perempuan',
            'tempat_tgl_lahir' => 'LONDON, 11 AGUSTUS 2017',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '005',
            'nama_anggota' => 'Sagar',
            'alamat' => 'JL. BANGAU GG II',
            'no_telp' => '762532',
            'jenis_kelamin' => 'Laki laki',
            'tempat_tgl_lahir' => 'INDIA, 05 JUNI 2004',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '006',
            'nama_anggota' => 'Amar',
            'alamat' => 'JL. SUKAWATI',
            'no_telp' => '4761362',
            'jenis_kelamin' => 'Laki laki',
            'tempat_tgl_lahir' => 'INDIA, 09 NOVEMBER 1995',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '007',
            'nama_anggota' => 'Admin',
            'alamat' => 'JL. MONANG MANING',
            'no_telp' => '4567951',
            'jenis_kelamin' => 'Perempuan',
            'tempat_tgl_lahir' => 'DENPASAR, 19 MARET 1990',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '008',
            'nama_anggota' => 'Mini',
            'alamat' => 'JL. JEPUN PUTIH IV',
            'no_telp' => '327956',
            'jenis_kelamin' => 'Laki laki',
            'tempat_tgl_lahir' => 'BADUNG, 07 APRIL 1982',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '009',
            'nama_anggota' => 'Adam',
            'alamat' => 'JL. JEMPIRING',
            'no_telp' => '465231',
            'jenis_kelamin' => 'Laki laki',
            'tempat_tgl_lahir' => 'SWISS, 24 FEBRUARI 1999',
        ]);
        DB::table('tb_anggota')->insert([
            'id_anggota' => '010',
            'nama_anggota' => 'LANI',
            'alamat' => 'JL. ASRAMA TNI',
            'no_telp' => '417953',
            'jenis_kelamin' => 'Perempuan',
            'tempat_tgl_lahir' => 'SEOUL, 23 DESEMBER 2003',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_user')->insert([
            'nama_user' => 'Dwipa :)',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'telp' => '01234567',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
        ]);
        DB::table('tb_user')->insert([
            'nama_user' => 'user 1',
            'username' => 'mang01',
            'password' => Hash::make('buku'),
            'telp' => '012345678',
            'level' => 'user',
            'email' => 'mang@gmail.com',
        ]);
        DB::table('tb_user')->insert([
            'nama_user' => 'user 2',
            'username' => 'mang02',
            'password' => Hash::make('admin'),
            'telp' => '0123456789',
            'level' => 'user',
            'email' => 'mang01@gmail.com',
        ]);
        DB::table('tb_user')->insert([
            'nama_user' => 'user 3',
            'username' => 'mang03',
            'password' => Hash::make('admin'),
            'telp' => '012345678915',
            'level' => 'user',
            'email' => 'mang02@gmail.com',
        ]);
        DB::table('tb_user')->insert([
            'nama_user' => 'user 4',
            'username' => 'mang04',
            'password' => Hash::make('admin'),
            'telp' => '01234567891521',
            'level' => 'user',
            'email' => 'mngpurnamii04@gmail.com',
        ]);
    }
}

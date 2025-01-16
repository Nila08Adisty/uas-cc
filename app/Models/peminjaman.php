<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id_pinjam';

    protected $fillable = ['id_buku', 'tanggal', 'jumlah', 'status_pinjam', 'nama', 'telepon', 'tanggal_pinjam', 'tanggal_kembali', 'denda', 'stok', 'sisa_stok'];
}

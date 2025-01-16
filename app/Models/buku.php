<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = ['judul_buku', 'id_kategori', 'jenis_buku', 'pengarang', 'penerbit', 'tahun_penerbit', 'stok', 'gambar'];

    public function getImage()
    {
        if ($this->gambar && file_exists(public_path('images/buku/' . $this->gambar)))
            return asset('images/buku/' . $this->gambar);
        else
            return asset('images/no_image.png');
    }
}

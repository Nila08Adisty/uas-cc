<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page1()
    {
        return view('page.page1');
    }
    public function page2()
    {
        return view('page.page2');
    }
    public function page3()
    {
        return view('page.page3');
    }

    public function home()
    {
        $title = 'Hi!';

        $jumlah_user = User::count();
        $jumlah_buku = buku::count();
        $jumlah_pinjam = peminjaman::count();
        $total_pinjam = peminjaman::sum('jumlah');

        $peminjamans = peminjaman::selectRaw('tanggal_pinjam, SUM(jumlah) AS jumlah')->groupBy('tanggal_pinjam')->limit(50)->get();
        $data = [];
        $categories = [];
        foreach ($peminjamans as $peminjaman) {
            $data[] = $peminjaman->jumlah * 1;
            $categories[] = $peminjaman->tanggal_pinjam;
        }

        return view('home', compact('title', 'jumlah_user', 'jumlah_buku', 'jumlah_pinjam', 'total_pinjam', 'data', 'categories'));
    }
}

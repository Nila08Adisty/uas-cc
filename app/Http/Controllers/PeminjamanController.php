<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Data Peminjaman';
        $q = $request->query('q');
        $peminjamans = peminjaman::where('nama', 'like', '%' . $q . '%')
            ->leftjoin('tb_buku', 'tb_buku.id_buku', 'tb_peminjaman.id_buku')
            ->leftJoin('tb_user', 'tb_user.id_user', 'tb_peminjaman.id_user')
            ->paginate(10)
            ->withQueryString();
        $no = $peminjamans->firstItem();
        // dd($kamars);
        return view('peminjaman.index', compact('title', 'peminjamans', 'q', 'no'));
    }
    public function create()
    {
        $title = 'Tambah Data Pinjam';
        $bukus = buku::orderBy('judul_buku')->get();
        return view('Peminjaman.create', compact('title', 'bukus'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'id_buku' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'tanggal_pinjam' => 'required',
            'jumlah' => 'required',
            'status_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required',
            'stok' => 'required',
            'sisa_stok' => 'required',
        ]);
        $peminjaman = new peminjaman($request->all());
        $peminjaman->id_user = Auth::id();
        $peminjaman->save();
        return redirect()->route('peminjaman.index')->with(['message' => 'Data Berhasil Ditambah!']);
    }

    public function destroy(peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with(['message' => 'Data Terhapus']);
    }
    public function edit(peminjaman $peminjaman)
    {
        $title = 'Ubah Reservasi';
        $bukus = buku::orderBy('judul_buku')->get();
        return view('peminjaman.edit', compact('title', 'bukus', 'peminjaman'));
    }
    public function update(Request $request, peminjaman $peminjaman)
    {
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with(['message' => 'Data Diubah']);
    }
}

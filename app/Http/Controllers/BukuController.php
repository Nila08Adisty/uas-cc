<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use App\Models\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Buku';
        $q = $request->query('q');
        $bukus = buku::where('judul_buku', 'like', '%' . $q . '%')
            ->leftjoin('tb_kategori', 'tb_kategori.id_kategori', 'tb_buku.id_kategori')
            ->paginate(10)
            ->withQueryString();
        $no = $bukus->firstItem();
        return view('buku.index', compact('title', 'bukus', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Buku';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('buku.create', compact('title', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'id_kategori' => 'required',
            'jenis_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_penerbit' => 'required',
        ]);
        $buku = new buku($request->all());

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $filename = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('images/buku', $filename);
            $buku->gambar = $filename;
        }

        $buku->save();
        return redirect()->route('buku.index')->with(['message' => 'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        $title = 'Ubah Data Buku';
        $kategoris = kategori::orderBy('nama_kategori')->get();
        return view('buku.edit', compact('title', 'buku', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        $buku->update($request->all());
        return redirect()->route('buku.index')->with(['message' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with(['message' => 'Data Berhasil Dihapus']);
    }
}

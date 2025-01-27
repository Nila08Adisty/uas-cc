<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Kategori';
        $q = $request->query('q');
        $kategoris = Kategori::where('nama_kategori', 'like', '%' . $q . '%')
            // ->leftjoin('tb_kategori', 'tb_kategori.id_kategori', 'tb_buku.id_kategori')
            ->paginate(10)
            ->withQueryString();
        $no = $kategoris->firstItem();
        return view('kategori.index', compact('title', 'kategoris', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('kategori.create', compact('title', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);
        $kategori = new Kategori($request->all());
        $kategori->save();
        return redirect()->route('kategori.index')->with(['message' => 'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        $title = 'Ubah Data Kategori';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('kategori.edit', compact('title', 'kategori', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with(['message' => 'Data Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with(['message' => 'Data Terhapus']);
    }
}

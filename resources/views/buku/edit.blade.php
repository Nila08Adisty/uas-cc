@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-info">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('buku.update', $buku) }}">

                @csrf
                @method('put')

                <div class="mb-3">
                    <label>Judul Buku</label>
                    <input class="form-control" type="text" name="judul_buku"
                        value="{{ old('judul_buku', $buku->judul_buku) }}" />
                </div>
                <div class="mb-3">
                    <label>Kategori Buku</label>
                    <select class="form-select" name="id_kategori">

                        @foreach ($kategoris as $kategori)
                            @if (old('id_kategori', $buku->id_kategori) == $kategori->id_kategori)
                                <option value="{{ $kategori->id_kategori }}" selected>{{ $kategori->nama_kategori }}
                                </option>
                            @else
                                <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                            @endif
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label>Jenis Buku</label>
                    <input class="form-control" type="text" name="jenis_buku"
                        value="{{ old('jenis_buku', $buku->jenis_buku) }}" />
                </div>

                <div class="mb-3">
                    <label>Pengarang</label>
                    <input class="form-control" type="text" name="pengarang"
                        value="{{ old('pengarang', $buku->pengarang) }}" />
                </div>

                <div class="mb-3">
                    <label>Penerbit</label>
                    <input class="form-control" type="text" name="penerbit"
                        value="{{ old('penerbit', $buku->penerbit) }}" />
                </div>
                <div class="mb-3">
                    <label>Tahun Penerbit</label>
                    <input class="form-control" type="text" name="tahun_penerbit"
                        value="{{ old('tahun_penerbit', $buku->tahun_penerbit) }}" />
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input class="form-control" type="number" name="stok" value="{{ old('stok', $buku->stok) }}" />
                </div>
                <div class="mb-3">
                    <label>Gambar</label>
                    <input class="form-control" type="file" name="gambar" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('buku.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

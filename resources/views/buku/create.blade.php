@section('content')
    @extends('layout.app')
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
            <form method="POST" action="{{ route('buku.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Nama Buku</label>
                    <input class="form-control" type="text" name="judul_buku" value="{{ old('judul_buku') }}" />
                </div>
                <div class="mb-3">
                    <label>Kategori Buku</label>
                    <select class="form-select" name="id_kategori">
                        @foreach ($kategoris as $kategori)
                            @if (old('id_kategori') == $kategori->id_kategori)
                                <option value="{{ $kategori->id_kategori }} selected> {{ $kategori->nama_kategori }}">
                                </option>
                            @else
                                <option value="{{ $kategori->id_kategori }}"> {{ $kategori->nama_kategori }}</option>
                            @endif
                            <form method="POST" action="{{ route('buku.store') }}"></form>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Jenis Buku</label>
                    <input class="form-control" type="text" name="jenis_buku" value="{{ old('jenis_buku') }}" />
                </div>
                <div class="mb-3">
                    <label>pengarang</label>
                    <input class="form-control" type="text" name="pengarang" value="{{ old('pengarang') }}" />
                </div>
                <div class="mb-3">
                    <label>penerbit</label>
                    <input class="form-control" type="text" name="penerbit" value="{{ old('penerbit') }}" />
                </div>
                <div class="mb-3">
                    <label>Tahun Penerbit</label>
                    <input class="form-control" type="text" name="tahun_penerbit" value="{{ old('tahun_penerbit') }}" />
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input class="form-control" type="number" name="stok" value="{{ old('stok') }}" />
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
    @endsection

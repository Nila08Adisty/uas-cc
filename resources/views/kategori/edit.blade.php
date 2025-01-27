@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('kategori.update', $kategori) }}">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label>Kategori Buku</label>
                    <input class="form-control" type="text" name="nama_kategori"
                        value="{{ old('nama_kategori', $kategori->nama_kategori) }}" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    <a class="btn btn-danger" href="{{ route('buku.index') }}"><i class="fa-solid fa-arrow-left"></i>
                        Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

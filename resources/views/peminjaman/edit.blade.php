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
            <form method="POST" action="{{ route('peminjaman.update', $peminjaman) }}">

                @csrf
                @method('put')
                <div class="mb-3">
                    <label>Tanggal</label>
                    <input class="form-control" type="date" name="tanggal"
                        value="{{ old('tanggal', $peminjaman->tanggal, date('Y-m-d')) }}" />
                </div>
                <div class="mb-3">
                    <label>Judul Buku</label>
                    <select class="form-select" name="id_buku" onchange="hitung()">
                        <option value="">Pilih Judul</option>
                        @foreach ($bukus as $buku)
                            @if (old('id_kamar', $peminjaman->id_buku) == $buku->id_buku)
                                <option value="{{ $buku->id_buku }}" data-stok="{{ $buku->stok }}" selected>
                                    {{ $buku->judul_buku }}
                                </option>
                            @else
                                <option value="{{ $buku->id_buku }}" data-stok="{{ $buku->stok }}">{{ $buku->judul_buku }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama"
                        value="{{ old('nama', $peminjaman->nama) }}" />
                </div>
                <div class="mb-3">
                    <label>Telepon</label>
                    <input class="form-control" type="text" name="telepon"
                        value="{{ old('telepon', $peminjaman->telepon) }}" />
                </div>
                <div class="mb-3">
                    <label>Jumlah</label>
                    <input class="form-control" type="text" name="jumlah"
                        value="{{ old('jumlah', $peminjaman->jumlah) }}" onkeyup="hitung()" />
                </div>
                <div class="mb-3">
                    <label>Denda</label>
                    <input class="form-control" type="text" name="denda"
                        value="{{ old('denda', $peminjaman->denda) }}" />
                </div>
                <div class="mb-3">
                    <label>Status Pinjam</label>
                    <input class="form-control" type="text" name="status_pinjam"
                        value="{{ old('status_pinjam', $peminjaman->status_pinjam) }}" />
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input class="form-control" type="number" name="stok" value="{{ old('stok', $peminjaman->stok) }}"
                        readonly />
                </div>
                <div class="mb-3">
                    <label>Sisa stok</label>
                    <input class="form-control" type="number" name="sisa_stok"
                        value="{{ old('sisa_stok', $peminjaman->sisa_stok) }}" readonly />
                </div>
                <div class="mb-3">
                    <label>Tanggal Pinjam</label>
                    <input class="form-control" type="date" name="tanggal_pinjam"
                        value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam, date('Y-m-d')) }}" />
                </div>
                <div class="mb-3">
                    <label>Tanggal Check Out</label>
                    <input class="form-control" type="date" name="tanggal_kembali"
                        value="{{ old('tanggal_kembali', $peminjaman->tanggal_kembali, date('Y-m-d')) }}" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary"> Simpan</button>
                    <a class="btn btn-danger" href="{{ route('peminjaman.index') }}">
                        Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        function hitung() {
            let stok = $('select[name="id_buku"]').find(':selected').data('stok')
            let jumlah = $('input[name="jumlah"]').val()
            sisa_stok = parseInt(stok) - parseInt(jumlah)
            $('input[name="stok"]').val(stok);
            $('input[name="sisa_stok"]').val(sisa_stok);
        }
    </script>
@endsection

@extends('layout.app')
@section('content')
    @if (session()->has('message'))
        <p class="alert alert-info">{{ session('message') }}</p>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" name="q" value="{{ $q }}" placeholder="Pencarian...">
                </div>
                <div class="col">
                    <button class="btn btn-success"><i class="fa-solid fa-arrows-rotate"></i> Refresh</button>
                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('peminjaman.create') }}"><i class="fa-solid fa-plus"></i>
                        Tambah</a>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped m-e">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Petugas</th>
                        <th>Buku</th>
                        <th>Nama</th>
                        <th>telepon</th>
                        <th>jumlah</th>
                        <th>denda</th>
                        <th>Status Pinjam</th>
                        <th>tanggal pinjam</th>
                        <th>tanggal kembali</th>
                        <th>sisa Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php //$no = 1;
                ?>
                @foreach ($peminjamans as $peminjaman)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $peminjaman->nama_user }}</td>
                        <td>{{ $peminjaman->judul_buku }}</td>
                        <td>{{ $peminjaman->nama }}</td>
                        <td>{{ $peminjaman->telepon }}</td>
                        <td>{{ number_format($peminjaman->jumlah) }}</td>
                        <td>{{ number_format($peminjaman->denda) }}</td>
                        <td>{{ $peminjaman->status_pinjam }}</td>
                        <td>{{ date('d M Y', strtotime($peminjaman->tanggal_pinjam)) }}</td>
                        <td>{{ date('d M Y', strtotime($peminjaman->tanggal_kembali)) }}</td>
                        <td>{{ number_format($peminjaman->sisa_stok) }}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('peminjaman.edit', $peminjaman) }}"><i
                                    class="fa fa-edit"></i></a>
                            <form method="POST" class="d-inline" action="{{ route('peminjaman.destroy', $peminjaman) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Hapus?')"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        @if ($peminjamans->hasPages())
            <div class="card-footer">
                {{ $peminjamans->links() }}
            </div>
        @endif
    </div>
@endsection

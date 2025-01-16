@extends('layout.app')
@section('content')
    @if (session()->has('message'))
        <p class="alert alert-info">{{ session('message') }}</p>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <form class="row row-cols-auto g-1">
                <div class="col">
                    <input class="form-control" placeholder="Pencarian..." />
                </div>
                <div class="col">
                    <button class="btn btn-primary">Refresh</button>
                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('user.create') }}">Tambah</a>
                </div>
            </form>
        </div>

        <body>
            <div class="container">
                <div class="card mb-3">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped m-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Telpon</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user->nama_user }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telp }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user) }}" class="btn btn-sm btn-warning"><i
                                                class="fa fa-edit"></i></a>
                                        <form method="POST" class="d-inline" action="{{ route('user.destroy', $user) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm ('Yakin mau hapus?')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
        </body>

        </html>
    @endsection

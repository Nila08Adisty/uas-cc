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
            <form method="POST" action="{{ route('user.update', $user) }}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label>Nama User</label>
                    <input class="form-control" type="text" name="nama_user"
                        value="{{ old('nama_user', $user->nama_user) }}" />
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username"
                        value="{{ old('username', $user->username) }}" />
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input class="form-control" type="text" name="password" />
                    <p class="form-text">Kosongkan jika tidak ingin mengubah password</p>
                </div>
                <div class="mb-3">
                    <label>Telp</label>
                    <input class="form-control" type="text" name="telp" value="{{ old('telp', $user->telp) }}" />
                </div>
                <div class="mb-3">
                    <label><b>Level</b></label>
                    <select class="form-select" name="level">
                        @foreach ($levels as $level)
                            @if (old('level', $user->level) == $level)
                                <option value="{{ $level }}" selected> {{ $level }} </option>
                            @else
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" value="{{ old('email', $user->email) }}" />
                </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <a class="btn btn-danger" href="{{ route('user.index') }}"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
@endsection

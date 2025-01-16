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
            <form method="POST" action="{{ route('user.store') }}">
                @csrf
                <div class="mb-3">
                    <label>Nama User</label>
                    <input class="form-control" type="text" name="nama_user" value="{{ old('nama_user') }}" />
                </div>
                <div class="mb-3">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" value="{{ old('username') }}" />
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input class="form-control" type="text" name="password" value="{{ old('password') }}" />
                </div>
                <div class="mb-3">
                    <label>Telp</label>
                    <input class="form-control" type="text" name="telp" value="{{ old('telp') }}" />
                </div>
                <div class="mb-3">
                    <label><b>Level</b></label>
                    <select class="form-select" name="level">
                        @foreach ($levels as $level)
                            @if (old('level') == $level)
                                <option value="{{ $level }}" selected> {{ $level }} </option>
                            @else
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" value="{{ old('email') }}" />
                </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <a class="btn btn-danger" href="{{ route('user.index') }}"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
@endsection

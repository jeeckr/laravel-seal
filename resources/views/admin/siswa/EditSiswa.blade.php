@extends('admin.app')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Siswa</h6>
    </div>
    <div class="card-body">

        @if ($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
        @endif

        <div class="container">
            <form action="{{ route('siswaUpdate', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_kelas_jurusan">Kelas</label>
                    <select class="form-control" id="id_kelas_jurusan" name="id_kelas_jurusan">
                        <option value="{{ $siswa->id_kelas_jurusan }}">{{ $kelsis->kelas->nama_kelas }} {{ $kelsis->jurusan->nama_jurusan }}</option>
                        @foreach($keljur as $data)
                        <option value="{{ $data->id }}">{{ $data->kelas->nama_kelas }} {{ $data->jurusan->nama_jurusan }}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{ $siswa->nisn }}">
                </div>
                <div class="form-group">
                    <label for="nama_depan">Nama Depan</label>
                    <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="{{ $siswa->nama_depan }}">
                </div>
                <div class="form-group">
                    <label for="nama_belakang">Nama Belakang</label>
                    <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{ $siswa->nama_belakang }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $siswa->alamat }}">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $siswa->telepon }}">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jk" name="jk" value="{{ $siswa->jk }}">
                </div>
                <div class="form-group">
                    <label for="image">Foto Profil</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ $siswa->image }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $siswa->email }}">
                </div>
                <div class="form-group">
                    <label for="passsword">password</label>
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                    <a href="{{ route('siswa') }}">
                        <button type="button" class="btn btn-warning" name="tambah">Kembali</button>
                    </a>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
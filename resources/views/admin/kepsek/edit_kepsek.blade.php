@extends('admin.app')

@section('content')

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Kepala Sekolah</h6>
    </div>

    <div class="card-body">

        @if ($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{ $error }}</div>
        @endforeach
        @endif

        <div class="container">
            <form action="{{ route('kepsekUpdate', $kepsek->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')

                <div class="form-row mb-3">
                    <div class="col-md-6">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $kepsek->nip }}">
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" class="form-control" name="nama_depan" value="{{ $kepsek->nama_depan }}">
                    </div>
                    <div class="col">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang" value="{{ $kepsek->nama_belakang }}">
                    </div>
                </div>
                <div class=" form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $kepsek->alamat }}">
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk" value="laki-laki" checked>
                                <label class="form-check-label" for="jk">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="image">Foto Profil</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $kepsek->email }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="">
                    </div>
                </div>

                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary mr-1" name="simpan">Simpan</button>

                    <a href="{{ route('kepsek') }}" class="btn btn-primary ml-1">Kembali</a>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
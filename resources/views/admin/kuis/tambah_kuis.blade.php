@extends('admin.app')

@section('style_css')

<style>
    .btn-tambah {
        float: right;
    }
</style>

@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kuis</h6>
    </div>
    <div class="card-body">

        <form action="{{ route('kuisStore') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <label for="id_mapel">Mata Pelajaran</label>
                    <select class="form-control" id="id_mapel" name="id_mapel">

                        @foreach ($mapel as $data)

                        <option value="{{ $data->id }}">{{ $data->nama_mapel }} </option>

                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Jumlah Soal</label>
                    <input type="text" class="form-control" name="jumlah_soal">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="waktu">Waktu</label>
                    <input type="text" class="form-control" name="waktu">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-tambah">Tambah</button>
                </div>
                <div class="col">
                    <a href="{{ route('kuis') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </form>


    </div>
</div>

@endsection
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
        <h6 class="m-0 font-weight-bold text-primary">Tambah Soal</h6>
    </div>
    <div class="card-body">

        <form action="{{ route('soalStore') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <label for="id_kuis">Judul Kuis</label>
                    <select class="form-control" id="id_kuis" name="id_kuis">

                        @foreach ($kuis as $data)

                        <option value="{{ $data->id }}">{{ $data->judul }} </option>

                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Soal</label>
                    <input type="text" class="form-control" name="soal">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Pilihan A</label>
                    <input type="text" class="form-control" name="pilihan_a">
                </div>
                <div class="col">
                    <label for="">Pilihan B</label>
                    <input type="text" class="form-control" name="pilihan_b">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Pilihan C</label>
                    <input type="text" class="form-control" name="pilihan_c">
                </div>
                <div class="col">
                    <label for="">Pilihan D</label>
                    <input type="text" class="form-control" name="pilihan_d">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Kunci</label>
                    <input type="text" class="form-control" name="kunci">
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
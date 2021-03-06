@extends('admin.app')

@section('style_css')

<style>
    .card-body {
        height: 30rem !important;
    }
</style>

@endsection

@section('content')

<div class="row">

    <!-- Area Chart -->
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Mapel</h6>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">

                    <div class="container">
                        <form action="{{ route('mapelStore') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="id_guru">Guru</label>
                                    <select class=" form-control" id="id_guru" name="id_guru">
                                        <option value="">-- Pilih Guru --</option>
                                        @foreach ($guru as $data)

                                        <option value="{{ $data->id }}">{{ $data->nama_depan }} {{ $data->nama_belakang }} </option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="id_kelas_jurusan">Kelas</label>
                                    <select class=" form-control" id="id_kelas_jurusan" name="id_kelas_jurusan">
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($keljur as $data)

                                        <option value="{{ $data->id }}">{{ $data->kelas->nama_kelas }} {{ $data->jurusan->nama_jurusan }} </option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="nama_mapel">Mata Pelajaran</label>
                                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('mapel') }}" class="btn btn-warning">Kembali</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>


</div>


@endsection
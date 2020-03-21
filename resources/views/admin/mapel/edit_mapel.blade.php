@extends('admin.app')

@section('style_css')

<style>
    .body-edit-mapel {
        height: 31rem !important;
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Mapel</h6>
            </div>

            <!-- Card Body -->
            <div class="card-body body-edit-mapel">
                <div class="chart-area">

                    <div class="container">
                        <form action="{{ route('mapelUpdate', $mapel->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-row mb-3">
                                <div class="col-md-6">
                                    <label for="id_guru">Guru</label>
                                    <select class="form-control" id="id_guru" name="id_guru">
                                        <option value=" {{ $mapel->id_guru }}">{{ $mapel->guru->nama_depan }} {{ $mapel->guru->nama_belakang }} </option>
                                        @foreach ($guru as $data)

                                        <option value=" {{ $data->id }}">{{ $data->nama_depan }} {{ $data->nama_belakang }} </option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_kelas_jurusan">Kelas</label>
                                <select class="form-control" id="id_kelas_jurusan" name="id_kelas_jurusan">
                                    <option value="{{ $mapel->id_kelas_jurusan }}">{{ $kelmap->kelas->nama_kelas }} {{ $kelmap->jurusan->nama_jurusan }}</option>

                                    @foreach($keljur as $data)
                                    <option value="{{ $data->id }}">{{ $data->kelas->nama_kelas }} {{ $data->jurusan->nama_jurusan }}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama_mapel">Mata Pelajaran</label>
                                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" value="{{ $mapel->nama_mapel }}">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="3">{{ $mapel->deskripsi }}</textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
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
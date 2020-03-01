@extends('admin.app')

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
                                    <label for="id_mapel">Guru</label>
                                    <select class="form-control" id="id_guru" name="id_guru">

                                        @foreach ($guru as $data)

                                        <option value="{{ $data->id }}">{{ $data->nama_depan }} {{ $data->nama_belakang }} </option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_mapel">Mata Pelajaran</label>
                                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
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
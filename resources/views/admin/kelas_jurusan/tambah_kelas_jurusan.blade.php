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
                        <form action="{{ route('store_kelas_jurusan') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="id_kelas">Kelas</label>
                                    <select class=" form-control" id="id_kelas" name="id_kelas">

                                        @foreach ($kelas as $data)

                                        <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="id_jurusan">Jurusan</label>
                                    <select class=" form-control" id="id_jurusan" name="id_jurusan">

                                        @foreach ($jurusan as $data)

                                        <option value="{{ $data->id }}">{{ $data->nama_jurusan }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('kelas_jurusan') }}" class="btn btn-warning">Kembali</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>


</div>


@endsection
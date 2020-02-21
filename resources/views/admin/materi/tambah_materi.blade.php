@extends('admin.app')

@section('style_css')

<style>
    .card-body {
        height: 25rem !important;
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
                <h6 class="m-0 font-weight-bold text-primary">Tambah Materi</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <form action="{{ route('materiStore') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="id_mapel">Mata Pelajaran</label>
                            <select class="form-control" id="id_mapel" name="id_mapel">
                                @foreach ($mapel as $data)

                                <option value="{{ $data->id_mapel }}"> {{ $data->nama_mapel }} </option>

                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bab">BAB</label>
                            <input type="text" class="form-control" id="bab" name="bab">
                        </div>

                        <div class="form-group">
                            <label for="isi_materi">Isi</label>
                            <textarea class="form-control" id="isi_materi" name="isi_materi" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


</div>

<?php var_dump($_POST); ?>
@endsection
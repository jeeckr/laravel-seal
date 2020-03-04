@extends('admin.app')

@section('style_css')

<style>
    .chart-area {
        height: auto !important;
    }
</style>

@endsection

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<div class="row">

    <!-- Area Chart -->
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail Materi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Jumlah Soal</th>
                                    <th>Waktu</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 0 ?>
                                @foreach($kuis as $data)
                                <?php $no++ ?>
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->jumlah_soal }}</td>
                                    <td>{{ $data->waktu }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('kuisHapus', $data->id) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                    </div>

                    <a href="{{ route('kuisTambah') }}">
                        <button class="btn btn-primary mt-2">Tambah Kuis</button>
                    </a>

                    <a href="{{ route('mapel') }}">
                        <button class="btn btn-primary mt-2">Kembali</button>
                    </a>

                </div>
            </div>

        </div>

    </div>

</div>



@endsection
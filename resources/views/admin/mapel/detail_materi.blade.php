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

                    <div class="info-materi mb-2">
                        <table>
                            <tr>
                                <td>
                                    Mata Pelajaran
                                </td>
                                <td>:</td>
                                <td>{{ $mapel->nama_mapel }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>
                                <tr>
                                    <th>BAB</th>
                                    <th>Judul</th>
                                    <th>Materi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($materi as $data)

                                <tr>
                                    <td> {{ $data->bab }}</td>
                                    <td> {{ $data->judul }}</td>
                                    <td> {{ $data->isi_materi }}</td>
                                    <td>
                                        <a href="{{ route('materiEdit', $data->id) }}" class="btn btn-warning ">
                                            Edit
                                        </a>
                                        <a href="{{ route('materiHapus', $data->id) }}" class="btn btn-danger ">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                    </div>

                    <a href="{{ route('materiTambah') }}">
                        <button class="btn btn-primary mt-2">Tambah Materi</button>
                    </a>

                    <a href="{{ route('mapel') }}">
                        <button class="btn btn-primary mt-2">Kembali</button>
                    </a>

                </div>
            </div>

            <div class="row justify-content-center">
                {{ $materi->links() }}
            </div>
        </div>

    </div>

</div>



@endsection
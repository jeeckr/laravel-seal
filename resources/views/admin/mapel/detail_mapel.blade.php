@extends('admin.app')

@section('style_css')

<style>
    .chart-area {
        height: auto !important;
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
                                    <th>Materi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($materi as $data)

                                <tr>
                                    <td> {{ $data->bab }}</td>
                                    <td> {{ $data->isi_materi }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-circle">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
                {{ $materi->links() }}
            </div>
        </div>

    </div>

</div>



@endsection
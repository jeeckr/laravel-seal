@extends('admin.app')

@section('style_css')

<style>
    .btn-all {
        width: 2.5rem !important;
    }
</style>

@endsection

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>

                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 0; ?>
                    @foreach($mapel as $data)
                    <?php $no++; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->nama_mapel }}</td>
                        <td>
                            <a href="{{ route('detailMateri', $data['id']) }}">
                                <button class="btn btn-primary ">Materi</button>
                            </a>
                            <a href="{{ route('mapelEdit', $data->id) }}" class="btn btn-warning btn-all">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('mapelHapus', $data->id) }}" class="btn btn-danger btn-all ">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            <a href="{{ route('mapelTambah') }}">
                <button class="btn btn-primary mb-3">Tambah Mapel</button>
            </a>

        </div>
    </div>
</div>
@endsection
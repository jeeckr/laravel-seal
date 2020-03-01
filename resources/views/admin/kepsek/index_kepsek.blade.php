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

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kepala Sekolah</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($kepsek as $data)
                    <tr>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->nama_depan }}</td>
                        <td>{{ $data->nama_belakang }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->telepon }}</td>
                        <td>{{ $data->jk }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-all">
                                <i class="fas fa-info"></i>
                            </a>
                            <a href="{{ route('kepsekEdit', $data->id) }}" class="btn btn-warning btn-all">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('kepsekHapus', $data->id) }}" class="btn btn-danger btn-all">
                                <i class="fas fa-trash"></i> 
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            <a href="{{ route('kepsekTambah') }}" class="btn btn-primary">Tambah</a>

        </div>
    </div>
</div>


@endsection
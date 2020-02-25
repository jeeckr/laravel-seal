@extends('admin.app')

@section('style_css')

<style>

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
    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NISN</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Jenis Kelamin</th>
            <th>Opsi</th>
          </tr>
        </thead>

        <tbody>
          @foreach($siswa as $data)
          <tr>
            <td>{{ $data->nisn }}</td>
            <td>{{ $data->nama_depan }}</td>
            <td>{{ $data->nama_belakang }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->telepon }}</td>
            <td>{{ $data->jk }}</td>
            <td>
              <a href="#" class="btn btn-info btn-circle">
                <i class="fas fa-info-circle"></i>
              </a>
              <a href="{{ route('siswaEdit', $data->id) }}" class="btn btn-warning btn-circle">
                <i class="fas fa-exclamation-triangle"></i>
              </a>
              <a href="{{ route('siswaHapus', $data->id) }}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>

      </table>

      <a href="{{ route('siswaTambah') }}" class="btn btn-primary mb-2">
        <span class="icon text-white-50">
        </span>
        <span class="text">Tambah</span>
      </a>

    </div>
  </div>
</div>


@endsection
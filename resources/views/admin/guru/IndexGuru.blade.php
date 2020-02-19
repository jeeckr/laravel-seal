@extends('admin.app')

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

  <p>{{ $message }}</p>

</div>

@endif

<a href="{{ route('guruTambah') }}" class="btn btn-primary btn-icon-split mb-4">
  <span class="icon text-white-50">
    <i class="fas fa-flag"></i>
  </span>
  <span class="text">Tambah</span>
</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>JK</th>
            <th>Email</th>
            <th>Opsi</th>
          </tr>
        </thead>

        <tbody>
          
          @foreach($guru as $data)
            <tr>
              <td>{{ $data->nip }}</td>
              <td>{{ $data->nama }}</td>
              <td>{{ $data->alamat }}</td>
              <td>{{ $data->telepon }}</td>
              <td>{{ $data->jk }}</td>
              <td>{{ $data->email }}</td>
              <td>
                  <a href="#" class="btn btn-info btn-circle">
                    <i class="fas fa-info-circle"></i>
                  </a>
                  <a href="{{ route('guruEdit', $data['id']) }}" class="btn btn-warning btn-circle">
                    <i class="fas fa-exclamation-triangle"></i>
                  </a>
                  <a href="{{ route('guruHapus',$data['id']) }}" class="btn btn-danger btn-circle">
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


@endsection
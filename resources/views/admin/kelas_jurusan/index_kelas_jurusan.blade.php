@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kelas</th>
                        <th>Jurusan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 0; ?>
                    @foreach($keljur as $data)
                    <?php $no++; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->kelas->nama_kelas}}</td>
                        <td>{{ $data->jurusan->nama_jurusan}}</td>
                        <td>
                            <a href="{{ route('detailMapel', $data->id) }}">
                                <button class="btn btn-primary">Mapel</button>
                            </a>
                            <a href="{{ route('detailSiswa', $data->id) }}">
                                <button class="btn btn-warning">Siswa</button>
                            </a>

                        </td>
                    </tr>

                    @endforeach
                </tbody>

                <a href="{{ route('tambah_kelas_jurusan') }}" class="btn btn-primary">Tambah</a>

            </table>
        </div>
    </div>
</div>
@endsection
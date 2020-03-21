@extends('admin.app')

@section('content')

<div class="card-body">

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 0; ?>
                @foreach($siswa as $data)
                <?php $no++; ?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->nisn }}</td>
                    <td>{{ $data->nama_depan}} {{ $data->nama_belakang}}</td>

                </tr>

                @endforeach
            </tbody>

        </table>
    </div>
    <a href="{{ route('kelas_jurusan') }}">
        <button class="btn btn-primary mt-2">Kembali</button>
    </a>
</div>


@endsection
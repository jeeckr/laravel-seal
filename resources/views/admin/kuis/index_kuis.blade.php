@extends('admin.app')

@section('style_css')

@endsection

@section('content')

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
                        <th>Judul</th>
                        <th>Jumlah Soal</th>
                        <th>Waktu</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 0; ?>
                    @foreach($kuis as $data)
                    <?php $no++; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->jumlah_soal }}</td>
                        <td>{{ $data->waktu }}</td>
                        <td>
                            <a href="{{ route('soalDetail', $data->id) }}" class="btn btn-primary">Soal</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            <a href="{{ route('kuisTambah') }}">
                <button class="btn btn-primary mb-3">Tambah Kuis</button>
            </a>

        </div>
    </div>
</div>

@endsection
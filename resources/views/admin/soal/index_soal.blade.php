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
                        <th>Soal</th>
                        <th>Pilihan A</th>
                        <th>Pilihan B</th>
                        <th>Pilihan C</th>
                        <th>Pilihan D</th>
                        <th>Kunci</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 0; ?>
                    @foreach($soal as $data)
                    <?php $no++; ?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->soal }}</td>
                        <td>{{ $data->pilihan_a }}</td>
                        <td>{{ $data->pilihan_b }}</td>
                        <td>{{ $data->pilihan_c }}</td>
                        <td>{{ $data->pilihan_d }}</td>
                        <td>{{ $data->kunci }}</td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

            <a href="{{ route('soalTambah', $kuis->id) }}">
                <button class="btn btn-primary mb-3">Tambah Soal</button>
            </a>

        </div>
    </div>
</div>

@endsection
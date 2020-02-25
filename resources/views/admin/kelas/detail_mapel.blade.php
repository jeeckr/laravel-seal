@extends('admin.app')

@section('content')

<div class="card-body">

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
            </thead>

            <tbody>
                <?php $no = 0; ?>
                @foreach($mapel as $data)
                <?php $no++; ?>

                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->nama_mapel }}</td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>
    <a href="{{ route('kelas') }}">
        <button class="btn btn-primary mt-2">Kembali</button>
    </a>
</div>


@endsection
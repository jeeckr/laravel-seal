@extends('admin.app')

@section('content')

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <!-- <th>BAB</th>
                    <th>Materi</th> -->
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
                    <!-- <td>{{ $data->bab}}</td>
                    <td>{{ $data->isi_materi}}</td> -->
                    <td>

                        <a href="{{ route('mapelDetail', $data['id']) }}" class="btn btn-info btn-circle">
                            <i class="fas fa-info-circle"></i>
                        </a>
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

@endsection
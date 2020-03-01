@extends('admin.app')

@section('style_css')

<style>
    .card-body {
        height: 25rem !important;
    }
</style>

@endsection

@section('content')

<div class="row">

    <!-- Area Chart -->
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Materi</h6>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <form action="{{ route('materiUpdate', $materi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_mapel">Mata Pelajaran</label>
                            <select class="form-control" id="id_mapel" name="id_mapel">

                                <option value="{{$materi->id_mapel}}"> {{ $mapel->nama_mapel}}</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bab">BAB</label>
                            <input type="text" class="form-control" id="bab" name="bab" value="{{ $materi->bab }}">
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul Materi</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $materi->judul }}">
                        </div>

                        <div class="form-group">
                            <label for="isi_materi">ISI</label>
                            <textarea class="form-control" id="isi_materi" name="isi_materi" rows="3">{{ $materi->isi_materi }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


</div>


@endsection
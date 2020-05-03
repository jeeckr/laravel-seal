@extends('template.dashboardTemplate.guru.app')

@section('style_css')

<style>
    .navbar-bg {
        background-color: #0491d0 !important;
    }

    .section {
        margin-top: 1rem !important;
    }

    .card-profil {
        margin-bottom: 15px !important;
    }

    .nav-home {
        width: 14rem !important;
    }

    .alert-success {
        width: 100% !important;
    }

    .photo-profil {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-left: 1rem !important;
    }

    .btn-simpan {
        float: right;
    }

    .btn-kembali {
        float: left;
    }

    .btn-primary {
        background-color: #0491d0 !important;
    }

    .edit-header {
        background-color: #0491d0 !important;
    }

    .edit-header h4 {
        color: white !important;
    }
</style>

@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-3">

                </div>

                <div class="col-md-6">
                    <div class="card">

                        @if ($errors->any())
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                        @endforeach
                        @endif
                        <div class="card-header edit-header">
                            <h4>Edit Soal</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('updateSoalGuru', $soal->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Soal</label>
                                    <input type="text" class="form-control" name="soal" value="{{ $soal->soal }}">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan A</label>
                                    <input type="text" class="form-control" name="pilihan_a" value="{{ $soal->pilihan_a }}">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan B</label>
                                    <input type="text" class="form-control" name="pilihan_b" value="{{ $soal->pilihan_b }}">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan C</label>
                                    <input type="text" class="form-control" name="pilihan_c" value="{{ $soal->pilihan_c }}">
                                </div>
                                <div class="form-group">
                                    <label>Pilihan D</label>
                                    <input type="text" class="form-control" name="pilihan_d" value="{{ $soal->pilihan_d }}">
                                </div>
                                <div class="form-group">
                                    <label>Kunci</label>
                                    <input type="text" class="form-control" name="kunci" value="{{ $soal->kunci }}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary btn-simpan" name="simpan">Simpan</button>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('homeGuru') }}" class="btn btn-warning btn-kembali">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>

@endsection
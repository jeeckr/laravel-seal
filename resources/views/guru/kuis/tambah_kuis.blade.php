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

    .btn-primary {
        background-color: #0491d0 !important;
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
                        <div class="card-body">
                            <form action="{{ route('storeKuisGuru') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" name="id_mapel" value="{{ $mapel->id }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Judul" name="judul">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Soal</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Jumlah Soal" name="jumlah_soal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Waktu</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Waktu" name="waktu">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary" name="tambah" id="tambah">Tambah</button>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('homeGuru') }}" class="btn btn-warning">Kembali</a>
                                            </div>
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
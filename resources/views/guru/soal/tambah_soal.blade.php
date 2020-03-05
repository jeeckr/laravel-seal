@extends('template.dashboardTemplate.guru.app')

@section('style_css')

<style>
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
                    <form action="{{ route('storeSoalGuru') }}" id="form-input" name="form-input" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <input type="hidden" class="form-control" name="id_kuis" value="{{$kuis->id}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Soal</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Soal" name="soal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pilihan A</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pilihan A" name="pilihan_a">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pilihan B</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pilihan B" name="pilihan_b">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pilihan C</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pilihan C" name="pilihan_c">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pilihan D</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pilihan D" name="pilihan_d">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kunci</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Kunci" name="kunci">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary" name="tambah" id="tambah">Tambah</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('indexSoalGuru', $kuis->id) }}" class="btn btn-primary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
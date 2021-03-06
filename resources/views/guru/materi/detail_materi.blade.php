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

    .btn-kembali {
        float: right;
    }

    h4 {
        color: #0491d0 !important;
    }

    .isi {
        width: 100%;
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

                            <div class="card-header">
                                <h4>Detail Materi</h4>
                            </div>
                            <div class="card-body">
                                <!-- Bab {{ $materi->bab }}
                                Judul : {{$materi->judul}} <br> -->
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="isi">
                                            {!!$materi->isi_materi!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('homeGuru') }}" class="btn btn-warning btn-kembali">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
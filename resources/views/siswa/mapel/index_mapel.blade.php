@extends('template.dashboardTemplate.siswa.App')

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

    .photo-profil {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-left: 1rem !important;
    }

    .modul-card {
        padding: 10px !important;
        background-color: #e8ebf2;
    }

    .modul-card .modul-title {
        padding-left: 1rem;
        margin-bottom: 0.5rem;
        font-size: 16px;
        color: black;
    }

    .list-modul {
        max-width: 100% !important;
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }

    .card-header {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .ket-modul {
        border-top: none !important;
        border-left: 2px solid #6777ef !important;
        height: 45px !important;
        padding-left: 10px !important;
        padding-top: 7px !important;
    }

    .ket-modul a {
        color: black;
    }
</style>

@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-md-3">
                    <div class="card card-profil">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <img class="mr-3 rounded-circle photo-profil" src="{{ $siswa->showImage() }}" alt="avatar">
                                </div>

                                <div class="col-md-8">
                                    <div class="media-body">
                                        <h6 class="media-title">{{ $siswa->nama_depan }} {{ $siswa->nama_belakang }}</h6>
                                        <div class="text-small text-muted">{{ $siswa->nisn }}
                                            <div class="bullet"></div> <span class="text-primary">Siswa</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row justify-content-center">
                                <a href="{{ route('profilSiswa', $siswa->id) }}">
                                    <div class="badge badge-pill badge-primary">View Profil</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <div class="header">
                                <h5>Manajemen Kelas</h5>
                            </div>

                            <hr>

                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item nav-home">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Materi</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="mater" aria-selected="false">Test</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Nilai</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Text</h4>
                        </div>
                        <div class="card-body">

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                        <div class="row">
                                            <div class="container">
                                                <div class="header mb-3">
                                                    Mata Pelajaran : {{ $mapel->nama_mapel }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card modul-card">
                                            @foreach($materi as $data)

                                            <div class="modul-title">
                                                Bab {{ $data->bab }}
                                            </div>
                                            <div class="list-modul">
                                                <div class="card card-primary ket-modul">
                                                    {{ $data->isi_materi}}
                                                </div>

                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                        text

                                    </div>
                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">

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
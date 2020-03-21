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
        padding: 1 !important;
    }

    .modul-card .btn-lihat {
        float: right;
        margin-right: 2rem;
        width: 5rem;
    }

    .modul-card .modul-title {
        padding-left: 1rem;
        margin-bottom: 0.5rem;
        font-size: 16px;
        color: black;
    }

    .list-modul {
        max-width: 100% !important;
        margin: 5px !important;
        padding-left: 1rem !important;
        padding-right: 1rem !important;
        margin-bottom: 5px !important;
    }

    .card-header {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .card .ket-modul {
        border-top: none !important;
        border-left: 2px solid #6777ef !important;
        height: 45px !important;
        padding-left: 10px !important;
        padding-top: 9px !important;
        margin-bottom: 0 !important;
    }

    .ket-modul a {
        color: black;
    }

    .breadcrumb {
        background-color: unset !important;
    }

    .card-home {
        box-shadow: 7px 10px 10px rgba(0, 0, 0, 0.03) !important;
        padding-top: 25px !important;
    }

    .card-header-mapel {
        background-color: #6777ef !important;
        color: white;
        min-height: 20px !important;
        padding-top: 5px;
    }

    .card-header-mapel p {
        font-size: 20px !important;
        margin-top: 13px;
    }

    .table-kuis thead th {
        color: white !important;
    }

    .btn-belajar {
        float: right;
    }
</style>

@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-md-3">

                    @include('template.dashboardTemplate.siswa.sidebar_profil_siswa')

                    <div class="card">
                        <div class="card-body">

                            <div class="header text-center">
                                <h5>Manajemen Kelas</h5>
                            </div>

                            <hr>

                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item nav-home">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="mater" aria-selected="false">Modul</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Kuis</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homeSiswa') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kelas</li>
                        </ol>
                    </nav>
                    <div class="card">
                        <div class="card-body">

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">

                                        <div class="card card-home">
                                            <div class="card-header card-header-mapel">
                                                <p> {{ $mapel->nama_mapel }}</p>
                                            </div>
                                            <div class="card-body mapel-deskripsi">

                                                {{ $mapel->deskripsi }}

                                            </div>
                                            <div class="card-footer">
                                                <a href="{{ route('mulaiBelajar', $mapel->id) }}">
                                                    <button class="btn btn-primary btn-belajar">Mulai Belajar</button>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                        <div class="card-header">
                                            <h4>{{ $mapel->nama_mapel }}</h4>
                                        </div>

                                        <div class="card modul-card">
                                            @foreach($materi as $data)

                                            <div class="list-modul">
                                                <div class="card card-primary ket-modul">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            Bab {{ $data->bab }}. {{ $data->judul}}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="{{ route('indexMateriSiswa', $data->id) }}" class="badge badge-warning btn-lihat">Lihat</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                        <div class="card-header header-kuis">
                                            <h4>Kuis</h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive text-center">
                                                <table class="table table-striped table-md table-kuis">
                                                    <thead class="bg-primary">
                                                        <tr>
                                                            <th>Judul Kuis</th>
                                                            <th>Mata pelajaran</th>
                                                            <th>Deadline</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    @foreach($kuis as $data)
                                                    <tr>
                                                        <td>{{ $data->judul}}</td>
                                                        <td>{{ $data->mapel->nama_mapel}}</td>
                                                        <td>2017-01-09</td>
                                                        <td>
                                                            @if($data->status_siswa == 1)
                                                            <div class="badge badge-warning">Selesai</div>
                                                            <script>
                                                                document.getElementById("btn-kerjakan").disabled = true;
                                                            </script>
                                                            @else
                                                            <div class="badge badge-warning">Belum Selesai</div>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('nilai', $data->id) }}"><button class="btn btn-warning">Nilai</button></a>
                                                            <a href="{{ route('kuisSiswa', $data->id) }}"><button class="btn btn-secondary" id="btn-kerjakan">Kerjakan</button></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>

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

<script>
    function disableButton() {
        document.getElementById("btn-kerjakan").disabled = true;
    }
</script>

@endsection
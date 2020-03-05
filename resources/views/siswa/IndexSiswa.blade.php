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

    .alert-success {
        width: 100% !important;
    }

    .photo-profil {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-left: 1rem !important;
    }

    /* Calendar */
    #myEvent {
        font-size: 0.5rem !important;
    }

    #myEvent .fc-left {
        display: none !important;
    }

    #myEvent .fc-right {
        display: none !important;
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
                            <div class="header text-center">
                                <h5>Menu</h5>
                            </div>

                            <hr>

                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item nav-home">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Kelas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <div class="card">

                        <div class="card-body">

                            @if ($message = Session::get('success'))

                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>

                            @endif

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">

                                    </div>

                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">

                                    </div>

                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">

                                        <div class="card-header">
                                            <h4>Kelas</h4>
                                        </div>
                                        <div class="table-responsive text-center">
                                            <table class="table table-striped table-md table-mapel">
                                                <thead class="">
                                                    <tr>
                                                        <th>Mata pelajaran</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                @foreach($mapel as $data)
                                                <tr>

                                                    <td>{{ $data->nama_mapel}}</td>
                                                    <td>
                                                        <a href="{{ route('mapelSiswa', $data->id) }}"> <span class="badge badge-info">Lihat Materi</span></a>
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

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="fc-overflow">
                                        <div id="myEvent"></div>
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
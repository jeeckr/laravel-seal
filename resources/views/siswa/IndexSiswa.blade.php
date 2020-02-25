@extends('template.dashboardTemplate.siswa.App')

@section('style_css')

<style>
    .section {
        margin-top: 1rem !important;
    }
</style>

@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="mr-3 rounded-circle" width="50" src="../stisla/img/avatar/avatar-4.png" alt="avatar">

                                </div>
                                <div class="col-md-8">
                                    <div class="media-body">
                                        <h6 class="media-title">{{ $siswa->nama_depan }} {{ $siswa->nama_belakang }}</h6>
                                        <div class="text-small text-muted">{{ $siswa->nisn }}
                                            <div class="bullet"></div> <span class="text-primary">Aktif</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <a href="{{ route('profilSiswa') }}">
                                    <div class="badge badge-pill badge-primary">Edit Profil</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="header">
                                <h5>Menu</h5>
                            </div>

                            <hr>

                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Kelas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body">

                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">

                                        @if ($message = Session::get('success'))

                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>

                                        @endif

                                    </div>
                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                                        Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget scelerisque tellus pharetra a.
                                    </div>
                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">

                                        @foreach($mapel as $data)
                                        <ul>
                                            <li><a href="{{ route('mapelSiswa', $data->id) }}">{{ $data->nama_mapel}}</a></li>
                                        </ul>

                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    test
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
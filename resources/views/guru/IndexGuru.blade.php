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

    .card-calendar {
        word-wrap: unset !important;
    }

    /* Table Materi */

    .table-materi thead th {
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

                    @include('template.dashboardTemplate.guru.sidebar_profil_guru')

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
                                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Mata Pelajaran</a>
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
                                        {{$guru->id}}
                                        {{$mapel->id}}
                                    </div>

                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">

                                        <div class="card-body p-0">
                                            <div class="table-responsive text-center">
                                                <table class="table table-striped table-md table-materi">
                                                    <thead class="bg-primary">
                                                        <tr>
                                                            <th>Bab</th>
                                                            <th>Judul</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    @foreach($materi as $data)
                                                    <tr>
                                                        <td>{{ $data->bab}}</td>
                                                        <td>{{ $data->judul}}</td>
                                                        <td>
                                                            <a href="">
                                                                <div class="badge badge-warning">
                                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('hapusMateriGuru', $data->id) }}">
                                                                <div class="badge badge-danger">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('detailMateriGuru', $data->id) }}">
                                                                <div class="badge badge-info">
                                                                    <i class="fa fa-info" aria-hidden="true"></i>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">

                                        <div class="card-header">
                                            <h4>Kelas</h4>
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
                            <div class="card card-calendar">
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
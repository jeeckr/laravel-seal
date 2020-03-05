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
                                <h5>Manajemen Kuis</h5>
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

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-9">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('homeGuru') }}">
                                    Home
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page">kuis</li>
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

                                    <!-- Home -->
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                        <div class="card-header">
                                            <h4>Kuis</h4>
                                        </div>
                                        <div class="card-body">
                                            <a href="{{ route('tambahSoalGuru', $kuis->id) }}" class="btn btn-primary mb-2 btn-tambah" id="tambah-soal" name="tambah-soal">Tambah Soal</a>

                                            <div class="table-responsive text-center">
                                                <table class="table table-striped table-md table-materi">
                                                    <thead class="bg-primary">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Soal</th>
                                                            <th>A</th>
                                                            <th>B</th>
                                                            <th>C</th>
                                                            <th>D</th>
                                                            <th>Kunci</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <?php $no = 0 ?>
                                                    @foreach($soal as $data)
                                                    <?php $no++ ?>
                                                    <tr>
                                                        <td>{{ $no }}</td>
                                                        <td>{{ $data->soal }}</td>
                                                        <td>{{ $data->pilihan_a }}</td>
                                                        <td>{{ $data->pilihan_b }}</td>
                                                        <td>{{ $data->pilihan_c }}</td>
                                                        <td>{{ $data->pilihan_d }}</td>
                                                        <td>{{ $data->kunci }}</td>
                                                        <td>
                                                            <a href="{{ route('editMateriGuru', $data->id) }}">
                                                                <div class="badge badge-warning">
                                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('hapusMateriGuru', $data->id) }}">
                                                                <div class="badge badge-danger">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mata Pelajaran -->
                                    <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">


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

</script>

@endsection
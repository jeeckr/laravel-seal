@extends('template.dashboardTemplate.kepsek.app')

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
</style>

@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-md-3">

                    @include('template.dashboardTemplate.kepsek.sidebar_profil_kepsek')

                    <!-- Menu -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="header text-center">
                                <h5>Menu</h5>
                            </div>

                            <hr>

                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <!-- <li class="nav-item nav-home">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li> -->
                                    <li class="nav-item nav-home">
                                        <a class="nav-link active" id="guru-tab4" data-toggle="tab" href="#guru4" role="tab" aria-controls="guru" aria-selected="false">Guru</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="siswa-tab4" data-toggle="tab" href="#siswa4" role="tab" aria-controls="siswa" aria-selected="false">Siswa</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Menu -->

                    <!-- Calendar -->
                    <div class="card card-calendar">
                        <div class="card-body">
                            <div class="fc-overflow">
                                <div id="myEvent"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End Calendar -->

                </div>

                <div class="col-md-9">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>

                    <div class="card">

                        <div class="card-body">

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="tab-content no-padding" id="myTab2Content">

                                    <!-- Home -->
                                    <!-- <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Mata Pelajaran</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Pie Chart</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <canvas id="myChart4"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> -->

                                    <!-- Guru -->

                                    <div class="tab-pane fade " id="guru4" role="tabpanel" aria-labelledby="siswa-tab4">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Data Guru</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped text-center" id="table-1">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>NIP</th>
                                                                <th>Nama</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 0 ?>
                                                            @foreach($guru as $data)
                                                            <?php $no++ ?>
                                                            <tr>
                                                                <td>{{ $no }}</td>
                                                                <td>{{ $data->nip }}</td>
                                                                <td>{{ $data->nama_depan }} {{ $data->nama_belakang }} </td>
                                                                <td>
                                                                    <a href="" class="btn btn-warning">Edit</a>
                                                                    <a href="" class="btn btn-secondary">Detail</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Guru -->

                                    <!-- Siswa -->

                                    <div class="tab-pane fade " id="siswa4" role="tabpanel" aria-labelledby="siswa-tab4">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Data Siswa</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped text-center" id="table-1">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>NISN</th>
                                                                <th>Nama</th>
                                                                <th>Kelas</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td>1</td>
                                                                <td>18050974021</td>
                                                                <td>Sandy Putra</td>
                                                                <td>X Rekayasa Perangkat Lunak</td>
                                                                <td>
                                                                    <a href="" class="btn btn-warning">Edit</a>
                                                                    <a href="" class="btn btn-secondary">Detail</a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Siswa -->

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
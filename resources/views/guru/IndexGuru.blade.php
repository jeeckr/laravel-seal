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

    .badge.badge-primary {
        background-color: #0491d0 !important;
    }

    .nav-pills .nav-item .nav-link.active {
        background-color: #0491d0 !important;
    }

    h4 {
        color: #0491d0 !important;
    }

    .btn-primary {
        background-color: #0491d0 !important;
    }

    .bg-primary {
        color: white;
        background-color: #0491d0 !important;
    }

    .breadcrumb {
        background-color: #f4f6f9 !important;
    }

    .page-item.active .page-link {
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

                    @include('template.dashboardTemplate.guru.sidebar_profil_guru')

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
                                        <a class="nav-link active" id="modul-tab4" data-toggle="tab" href="#modul4" role="tab" aria-controls="modul" aria-selected="false">Materi</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Kuis</a>
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
                                                        <table>
                                                            <tr>
                                                                <td>Mata Pelajaran</td>
                                                                <td>&nbsp :</td>
                                                                <td>&nbsp {{ $mapel->nama_mapel }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kelas</td>
                                                                <td>&nbsp :</td>
                                                                <td>&nbsp {{ $keljur->kelas->nama_kelas}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kurikulum</td>
                                                                <td>&nbsp :</td>
                                                                <td>&nbsp Kurikulum 2013</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tahun Ajaran</td>
                                                                <td>&nbsp :</td>
                                                                <td>&nbsp 2020/2021</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div> -->

                                    <!-- Modul -->

                                    <div class="tab-pane fade show active" id="modul4" role="tabpanel" aria-labelledby="modul-tab4">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Data Materi</h4>
                                            </div>
                                            <div class="card-body">
                                                <!-- <div class="row mb-3 justify-content-center">
                                                    <div class="col-md-8">
                                                        <canvas id="pieChart"></canvas>
                                                    </div>
                                                </div> -->
                                                <a href="{{ route('tambahKuisGuru') }}" class="btn btn-primary mb-3"> Tambah Materi</a>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table table-sm text-center">
                                                            <thead class="bg-primary" style="color:white;">
                                                                <tr>
                                                                    <th scope="col">Bab</th>
                                                                    <th scope="col">Judul</th>

                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($materi as $data)
                                                                <tr>
                                                                    <td>{{ $data->bab }}</td>
                                                                    <td>{{ $data->judul }}</td>
                                                                    <td>
                                                                        <a href="{{ route('editMateriGuru', $data->id) }}">
                                                                            <div class="badge badge-warning">Edit</div>
                                                                        </a>
                                                                        <a href="{{ route('detailMateriGuru', $data->id) }}">
                                                                            <div class="badge badge-secondary">Detail</div>
                                                                        </a>
                                                                        <a href="{{ route('hapusMateriGuru', $data->id) }}">
                                                                            <div class="badge badge-danger">Hapus</div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End Siswa -->

                                    <!-- Kuis -->
                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">

                                        <!-- Table Kuis -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Data Kuis</h4>
                                            </div>
                                            <div class="card-body">
                                                <a href="{{ route('tambahKuisGuru') }}" class="btn btn-primary mb-3"> Tambah Kuis</a>

                                                <div class="table-responsive">
                                                    <table class="table table-striped text-center" id="table-1">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>Judul</th>
                                                                <th>Jumlah Soal</th>
                                                                <th>Waktu</th>
                                                                <th>Status Kuis</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 0 ?>
                                                            @foreach($kuis as $data)
                                                            <?php $no++ ?>
                                                            <tr>
                                                                <td>
                                                                    {{ $no }}
                                                                </td>
                                                                <td>{{ $data->judul }}</td>
                                                                <td>{{ $data->jumlah_soal }} Butir</td>
                                                                <td>{{ $data->waktu }} Menit</td>
                                                                <td>
                                                                    @if($data->status_kuis == 1)
                                                                    <?php echo "Aktif" ?>

                                                                    @else
                                                                    <?php echo "Tidak Aktif" ?>

                                                                    @endif
                                                                </td>
                                                                <td><a href="{{ route('indexSoalGuru', $data->id) }}" class="btn btn-warning">Detail</a></td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Table -->

                                    </div>
                                    <!-- End Kuis -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<!-- Pie Chart -->
<script>
    var siswa = "{{ count($siswa) }}";
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: ["10 RPL", "10 TKJ", "10 MM"],
            datasets: [{
                data: [40, 50, 100],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
            }]
        },
        options: {
            responsive: true
        }
    });
</script>

@endsection
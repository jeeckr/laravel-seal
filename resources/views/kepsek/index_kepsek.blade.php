                            @extends('template.dashboardTemplate.kepsek.app')

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

    .bg-primary {
        color: white;
        background-color: #0491d0 !important;
    }

    .nav-pills .nav-item .nav-link.active {
        background-color: #0491d0 !important;
    }

    .badge.badge-primary {
        background-color: #0491d0 !important;
    }

    h4 {
        color: #0491d0 !important;
    }

    .btn-primary {
        background-color: #0491d0 !important;
    }

    .breadcrumb {
        background-color: #f4f6f9 !important;
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
                                    <li class="nav-item nav-home">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Guru</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="siswa-tab4" data-toggle="tab" href="#siswa4" role="tab" aria-controls="siswa" aria-selected="false">Kelas</a>
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
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
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
                                                                <th>Mata Pelajaran</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php $no = 1 ?>
                                                            @foreach($mapel as $data)
                                                            <php $no++ ?>
                                                                <tr>
                                                                    <td>{{ $no }}</td>
                                                                    <td>{{ $data->guru->nip }}</td>
                                                                    <td>{{ $data->guru->nama_depan }} {{ $data->guru->nama_belakang }}</td>
                                                                    <td>{{ $data->nama_mapel }}</td>
                                                                    <td>
                                                                        <!-- <a href="" class="btn btn-warning">Edit</a> -->
                                                                                <a href="{{ route('detailGuru', $data->id)}}" class="btn btn-secondary">Detail</a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Siswa -->

                                    <div class="tab-pane fade " id="siswa4" role="tabpanel" aria-labelledby="siswa-tab4">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Data Kelas</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped text-center" id="table-1">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    No
                                                                </th>
                                                                <th>Kelas</th>
                                                                <th>Jurusan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 1 ?>
                                                            @foreach($keljur as $data)
                                                            <php $no++ ?>
                                                                <tr>
                                                                    <td>{{ $no}}</td>
                                                                    <td>{{ $data->kelas->nama_kelas }}</td>
                                                                    <td>{{ $data->jurusan->nama_jurusan }}</td>

                                                                    <td>
                                                                        <a href="{{ route('detailSiswa', $data->id)}}" class="btn btn-secondary">Detail</a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
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

</div>
</section>
</div>

@endsection
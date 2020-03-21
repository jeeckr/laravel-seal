<?php $__env->startSection('style_css'); ?>

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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-md-3">

                    <?php echo $__env->make('template.dashboardTemplate.guru.sidebar_profil_guru', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item nav-home">
                                        <a class="nav-link" id="siswa-tab4" data-toggle="tab" href="#siswa4" role="tab" aria-controls="siswa" aria-selected="false">Siswa</a>
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
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">

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
                                                                <td>&nbsp <?php echo e($mapel->nama_mapel); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kelas</td>
                                                                <td>&nbsp :</td>
                                                                <td>&nbsp <?php echo e($keljur->kelas->nama_kelas); ?></td>
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



                                    </div>

                                    <!-- Siswa -->

                                    <div class="tab-pane fade " id="siswa4" role="tabpanel" aria-labelledby="siswa-tab4">

                                        <!-- <div class="card">
                                            <div class="card-header">
                                                <h4>Data Siswa</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row mb-3 justify-content-center">
                                                    <div class="col-md-8">
                                                        <canvas id="pieChart"></canvas>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table table-sm text-center">
                                                            <thead class="bg-primary" style="color:white;">
                                                                <tr>
                                                                    <th scope="col">Kelas</th>
                                                                    <th scope="col">Jurusan</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Rekayasa Perangkat Lunak</td>
                                                                    <td>
                                                                        <a href="">
                                                                            <div class="badge badge-primary">Detail</div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Teknik Komputer dan Jaringan </td>
                                                                    <td>
                                                                        <a href="">
                                                                            <div class="badge badge-primary">Detail</div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Multimedia</td>
                                                                    <td>
                                                                        <a href="">
                                                                            <div class="badge badge-primary">Detail</div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
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
                                                <a href="<?php echo e(route('tambahKuisGuru')); ?>" class="btn btn-primary mb-3"> Tambah Kuis</a>

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
                                                            <?php $__currentLoopData = $kuis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php $no++ ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo e($no); ?>

                                                                </td>
                                                                <td><?php echo e($data->judul); ?></td>
                                                                <td><?php echo e($data->jumlah_soal); ?> Butir</td>
                                                                <td><?php echo e($data->waktu); ?> Menit</td>
                                                                <td>
                                                                    <?php if($data->status_kuis == 1): ?>
                                                                    <?php echo "Aktif" ?>

                                                                    <?php else: ?>
                                                                    <?php echo "Tidak Aktif" ?>

                                                                    <?php endif; ?>
                                                                </td>
                                                                <td><a href="<?php echo e(route('indexSoalGuru', $data->id)); ?>" class="btn btn-warning">Detail</a></td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    var siswa = "<?php echo e(count($siswa)); ?>";
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.dashboardTemplate.guru.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/guru/IndexGuru.blade.php ENDPATH**/ ?>
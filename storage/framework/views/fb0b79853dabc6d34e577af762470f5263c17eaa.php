<?php $__env->startSection('style_css'); ?>

<style>
    body {
        background: black;
    }

    .card-profil {
        /* width: 18rem !important; */
        text-align: center;

    }

    .img-profil {
        width: 4rem;
        height: 4rem;
    }

    .nama-profil {
        /* margin-left: -4rem !important;
        padding-top: 1rem !important;
        padding-bottom: 1rem !important; */
    }

    /* Navbar */

    .bg-custom-2 {
        /* background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%); */
        background: linear-gradient(to right, #396afc, #2948ff);
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light mb-3 mt-3 card-profil">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/assets/img/profil.jpg" class="rounded-circle img-profil" class="mx-auto d-block">
                                </div>
                                <div class="col-md-9">
                                    <p class="card-text nama-profil">Nama Siswa</p>
                                    <p class="card-text nama-profil">NISN</p>
                                </div>
                            </div>

                            <hr>

                            <a href="">Lihat Profil</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-8">

            <div class="card text-center mt-3">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.dashboardTemplate.siswa.App', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/siswa/IndexSiswa.blade.php ENDPATH**/ ?>
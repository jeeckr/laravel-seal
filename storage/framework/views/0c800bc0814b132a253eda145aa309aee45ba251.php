<?php $__env->startSection('style_css'); ?>

<style>
    .chart-area {
        height: auto !important;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

    <!-- Area Chart -->
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail Materi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">

                    <div class="info-materi mb-2">
                        <table>
                            <tr>
                                <td>
                                    Mata Pelajaran
                                </td>
                                <td>:</td>
                                <td><?php echo e($mapel->nama_mapel); ?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>
                                <tr>
                                    <th>BAB</th>
                                    <th>Materi</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $__currentLoopData = $materi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td> <?php echo e($data->bab); ?></td>
                                    <td> <?php echo e($data->isi_materi); ?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-circle">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <a href="<?php echo e(route('materiHapus', $data->id)); ?>" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>
                    </div>

                    <a href="<?php echo e(route('mapel')); ?>">
                        <button class="btn btn-primary mb-3">Kembali</button>
                    </a>

                </div>
            </div>

            <div class="row justify-content-center">
                <?php echo e($materi->links()); ?>

            </div>
        </div>

    </div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/mapel/detail_mapel.blade.php ENDPATH**/ ?>
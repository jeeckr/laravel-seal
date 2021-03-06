<?php $__env->startSection('style_css'); ?>

<style>
    .btn-all {
        width: 2.5rem !important;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">

    <p><?php echo e($message); ?></p>

</div>

<?php endif; ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>

                        <th>Opsi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 0; ?>
                    <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $no++; ?>
                    <tr>
                        <td><?php echo e($no); ?></td>
                        <td><?php echo e($data->nama_mapel); ?></td>
                        <td>
                            <a href="<?php echo e(route('detailMateri', $data['id'])); ?>">
                                <button class="btn btn-primary ">Materi</button>
                            </a>
                            <a href="<?php echo e(route('detailKuis', $data->id)); ?>">
                                <button class="btn btn-primary ">Kuis</button>
                            </a>
                            <a href="<?php echo e(route('mapelEdit', $data->id)); ?>" class="btn btn-warning btn-all">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?php echo e(route('mapelHapus', $data->id)); ?>" class="btn btn-danger btn-all ">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>

            <a href="<?php echo e(route('mapelTambah')); ?>">
                <button class="btn btn-primary mb-3">Tambah Mapel</button>
            </a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/mapel/index_mapel.blade.php ENDPATH**/ ?>
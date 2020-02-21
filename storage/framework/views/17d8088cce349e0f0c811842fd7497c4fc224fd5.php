<?php $__env->startSection('content'); ?>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <!-- <th>BAB</th>
                    <th>Materi</th> -->
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
                    <!-- <td><?php echo e($data->bab); ?></td>
                    <td><?php echo e($data->isi_materi); ?></td> -->
                    <td>

                        <a href="<?php echo e(route('mapelDetail', $data['id'])); ?>" class="btn btn-info btn-circle">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="#" class="btn btn-warning btn-circle">
                            <i class="fas fa-exclamation-triangle"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/mapel/index_mapel.blade.php ENDPATH**/ ?>
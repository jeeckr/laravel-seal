<?php $__env->startSection('style_css'); ?>

<style>
    .card-body {
        height: 25rem !important;
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
                <h6 class="m-0 font-weight-bold text-primary">Tambah Materi</h6>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <form action="<?php echo e(route('materiStore')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="id_mapel">Mata Pelajaran</label>
                            <select class="form-control" id="id_mapel" name="id_mapel">

                                <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_mapel); ?> </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>


                        <div class="form-group">
                            <label for="bab">BAB</label>
                            <input type="text" class="form-control" id="bab" name="bab">
                        </div>

                        <div class="form-group">
                            <label for="isi_materi">ISI</label>
                            <textarea class="form-control" id="isi_materi" name="isi_materi" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/materi/tambah_materi.blade.php ENDPATH**/ ?>
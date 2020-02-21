<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('success')): ?>

<div class="alert alert-success">

  <p><?php echo e($message); ?></p>

</div>

<?php endif; ?>

<a href="<?php echo e(route('siswaTambah')); ?>" class="btn btn-primary btn-icon-split mb-4">
  <span class="icon text-white-50">
    <i class="fas fa-flag"></i>
  </span>
  <span class="text">Tambah</span>
</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>JK</th>
            <th>Email</th>
            <th>Opsi</th>
          </tr>
        </thead>

        <tbody>
          <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($data->nis); ?></td>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e($data->alamat); ?></td>
            <td><?php echo e($data->telepon); ?></td>
            <td><?php echo e($data->jk); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td>
                <a href="#" class="btn btn-info btn-circle">
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
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/siswa/IndexSiswa.blade.php ENDPATH**/ ?>
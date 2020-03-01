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

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NISN</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Jenis Kelamin</th>
            <th>Opsi</th>
          </tr>
        </thead>

        <tbody>
          <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($data->nisn); ?></td>
            <td><?php echo e($data->nama_depan); ?></td>
            <td><?php echo e($data->nama_belakang); ?></td>
            <td><?php echo e($data->alamat); ?></td>
            <td><?php echo e($data->telepon); ?></td>
            <td><?php echo e($data->jk); ?></td>
            <td>
              <a href="#" class="btn btn-info btn-all">
                <i class="fas fa-info"></i>
              </a>
              <a href="<?php echo e(route('siswaEdit', $data->id)); ?>" class="btn btn-warning btn-all">
                <i class="fas fa-edit"></i>
              </a>
              <a href="<?php echo e(route('siswaHapus', $data->id)); ?>" class="btn btn-danger btn-all">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

      </table>

      <a href="<?php echo e(route('siswaTambah')); ?>" class="btn btn-primary mb-2">
        <span class="icon text-white-50">
        </span>
        <span class="text">Tambah Siswa </span>
      </a>

    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/siswa/IndexSiswa.blade.php ENDPATH**/ ?>
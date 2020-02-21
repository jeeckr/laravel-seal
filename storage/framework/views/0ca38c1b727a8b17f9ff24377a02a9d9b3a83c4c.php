<?php $__env->startSection('content'); ?>

<?php if($message = Session::get('success')): ?>

    <div class="alert alert-success">

        <p><?php echo e($message); ?></p>

    </div>

<?php endif; ?>

<a href="<?php echo e(route('anggotaTambah')); ?>">
	<button type="button" class="btn btn-primary mb-4">Tambah</button>
</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
	 	
    <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    	<tr>
	      <th scope="row"><?= $i++ ?></th>
	      <td><?php echo e($a->name); ?></td>
	      <td><?php echo e($a->username); ?></td>
	      <td><?php echo e($a->email); ?></td>
	      <td>
	      	<button type="button" class="btn btn-primary">Edit</button>
	      	<button type="button" class="btn btn-danger">Hapus</button>
	      </td>
	    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
	
<?php echo $anggota->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/anggota/IndexAnggota.blade.php ENDPATH**/ ?>
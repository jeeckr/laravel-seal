<?php $__env->startSection('content'); ?>

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Edit Guru</h6>
	</div>
	<div class="card-body">

		<?php if($errors->any()): ?>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="alert alert-danger" role="alert"><?php echo e($error); ?></div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>

		<div class="container">
			<form action="<?php echo e(route('guruUpdate', $guru->id)); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>

				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" class="form-control" id="nip" name="nip" value="<?php echo e($guru->nip); ?>">
				</div>
				<div class="form-group">
					<label for="nama_depan">Nama Depan</label>
					<input type="text" class="form-control" id="nama_depan" name="nama_depan" value="<?php echo e($guru->nama_depan); ?>">
				</div>
				<div class="form-group">
					<label for="nama_belakang">Nama Belakang</label>
					<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="<?php echo e($guru->nama_belakang); ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo e($guru->alamat); ?>">
				</div>
				<div class="form-group">
					<label for="telepon">Telepon</label>
					<input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo e($guru->telepon); ?>">
				</div>
				<div class="form-group">
					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo e($guru->tempat_lahir); ?>">
				</div>
				<div class="form-group">
					<label for="jk">Jenis Kelamin</label>
					<input type="text" class="form-control" id="jk" name="jk" value="<?php echo e($guru->jk); ?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="<?php echo e($guru->email); ?>">
				</div>
				<div class="form-group">
					<label for="passsword">password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
					<a href="<?php echo e(route('guru')); ?>">
						<button type="button" class="btn btn-warning" name="tambah">Kembali</button>
					</a>
				</div>
			</form>
		</div>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/guru/EditGuru.blade.php ENDPATH**/ ?>
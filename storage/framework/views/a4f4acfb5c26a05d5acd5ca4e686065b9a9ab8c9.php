<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-danger" role="alert"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<div class="container">
	<form action="<?php echo e(route('siswaStore')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<div class="form-group">
			<label for="id_kelas_jurusan">Kelas</label>
			<select class="form-control" id="id_kelas_jurusan" name="id_kelas_jurusan">
				<?php $__currentLoopData = $keljur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($data->id); ?>"><?php echo e($data->kelas->nama_kelas); ?> <?php echo e($data->jurusan->nama_jurusan); ?></option>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
		<div class="form-group">
			<label for="nisn">NISN</label>
			<input type="text" class="form-control" id="nisn" name="nisn">

		</div>
		<div class="form-group">
			<label for="nama_depan">Nama Depan</label>
			<input type="text" class="form-control" id="nama_depan" name="nama_depan">

		</div>
		<div class="form-group">
			<label for="nama_belakang">Nama Belakang</label>
			<input type="text" class="form-control" id="nama_belakang" name="nama_belakang">

		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat">

		</div>
		<div class="form-group">
			<label for="telepon">Telepon</label>
			<input type="text" class="form-control" id="telepon" name="telepon">

		</div>
		<div class="form-group">
			<label for="tempat_lahir">Tempat Lahir</label>
			<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">

		</div>
		<div class="form-group">
			<label for="image">Foto Profil</label>
			<input type="file" class="form-control" id="image" name="image">

		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">

		</div>
		<div class="form-group">
			<label for="passsword">password</label>
			<input type="password" class="form-control" id="password" name="password">

		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
		</div>
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/siswa/TambahSiswa.blade.php ENDPATH**/ ?>
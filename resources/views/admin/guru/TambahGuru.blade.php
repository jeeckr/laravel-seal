@extends('admin.app')

@section('content')

<div class="container">
	<form action="{{ route('guruStore') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="nip">NIP</label>
			<input type="text" class="form-control" id="nip" name="nip">
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
			<label for="jk">Jenis Kelamin</label>
			<input type="text" class="form-control" id="jk" name="jk">
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

@endsection
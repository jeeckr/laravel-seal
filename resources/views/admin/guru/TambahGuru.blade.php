@extends('admin.app')

@section('content')

<div class="container">
	<form action="{{ route('guruStore') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="nip">NIP</label>
			<input type="text" class="form-control" id="nip" name="nip">
			@error('nip')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama">
			@error('nama')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="text" class="form-control" id="alamat" name="alamat">
			@error('alamat')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="telepon">Telepon</label>
			<input type="text" class="form-control" id="telepon" name="telepon">
			@error('telepon')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="jk">Jenis Kelamin</label>
			<input type="text" class="form-control" id="jk" name="jk">
			@error('jk')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">
			@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="passsword">password</label>
			<input type="password" class="form-control" id="password" name="password">
			@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
		</div>
	</form>
</div>

@endsection
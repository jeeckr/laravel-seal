@extends('admin.app')

@section('content')

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Edit Guru</h6>
	</div>
	<div class="card-body">

		@if ($errors->any())
		@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">{{ $error }}</div>
		@endforeach
		@endif

		<div class="container">
			<form action="{{ route('guruUpdate', $guru->id) }}" method="POST">
				@csrf
				@method('PUT')

				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" class="form-control" id="nip" name="nip" value="{{ $guru->nip }}">
				</div>
				<div class="form-group">
					<label for="nama_depan">Nama Depan</label>
					<input type="text" class="form-control" id="nama_depan" name="nama_depan" value="{{ $guru->nama_depan }}">
				</div>
				<div class="form-group">
					<label for="nama_belakang">Nama Belakang</label>
					<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{ $guru->nama_belakang }}">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" id="alamat" name="alamat" value="{{ $guru->alamat }}">
				</div>
				<div class="form-group">
					<label for="telepon">Telepon</label>
					<input type="text" class="form-control" id="telepon" name="telepon" value="{{ $guru->telepon }}">
				</div>
				<div class="form-group">
					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $guru->tempat_lahir }}">
				</div>
				<div class="form-group">
					<label for="jk">Jenis Kelamin</label>
					<input type="text" class="form-control" id="jk" name="jk" value="{{ $guru->jk }}">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="{{ $guru->email }}">
				</div>
				<div class="form-group">
					<label for="passsword">password</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
					<a href="{{ route('guru') }}">
						<button type="button" class="btn btn-warning" name="tambah">Kembali</button>
					</a>
				</div>
			</form>
		</div>

	</div>
</div>

@endsection
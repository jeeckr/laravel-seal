@extends('template.dashboardTemplate.siswa.App')

@section('style_css')

<style>
    .section {
        margin-top: 1rem !important;
    }
</style>

@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">


            <div class="card">
                <div class="card-header">
                    <h4>Profil Siswa</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Nilai</a>
                        </li>

                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">

                            <div class="card">
                                <form action="{{ route('updateProfilSiswa', $siswa->id) }}" method="post" enctype="multipart/form-data" class="needs-validation">
                                    @csrf
                                    @method('PUT')

                                    <div class="card-header">
                                        <h4>Informasi Akun</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>NISN</label>
                                                <input type="text" class="form-control" value="{{ $siswa->nisn }}" name="nip" disabled>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nama Depan</label>
                                                <input type="text" class="form-control" name="nama_depan" value="{{ $siswa->nama_depan }}">
                                                <div class="invalid-feedback">
                                                    Please fill in the first name
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nama Belakang</label>
                                                <input type="text" class="form-control" name="nama_belakang" value="{{ $siswa->nama_belakang}}">
                                                <div class="invalid-feedback">
                                                    Please fill in the last name
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Alamat</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control codeeditor" name="alamat">{{ $siswa->alamat }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Telepon</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control phone-number" name="telepon" value="{{ $siswa->telepon }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Tanggal Lahir</label>
                                                <input type="text" class="form-control" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" value="{{ $siswa->email}}" disabled>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please fill in the email
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Password Strength</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-lock"></i>
                                                        </div>
                                                    </div>
                                                    <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                                </div>
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a class="btn btn-warning" href="{{ route('homeSiswa') }}">
                                                Kembali
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                        Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur, eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget scelerisque tellus pharetra a.
                    </div>
                    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                        Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices. Proin bibendum bibendum augue ut luctus.
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>

@endsection
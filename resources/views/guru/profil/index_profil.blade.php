@extends('template.dashboardTemplate.guru.app')

@section('style_css')

<style>
    .section {
        margin-top: 1rem !important;
    }

    .navbar-bg {
        background-color: #0491d0 !important;
    }

    h4 {
        color: #0491d0 !important;
    }

    .btn-primary {
        background-color: #0491d0 !important;
    }
</style>

@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">

            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Profil Guru</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Profil</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Nilai</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li> -->
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">

                            <div class="card">
                                <form action="{{ route('updateProfilGuru', $guru->id) }}" enctype="multipart/form-data" method="post" class="needs-validation">
                                    @csrf
                                    @method('PUT')

                                    <div class="card-header">
                                        <h4>Informasi Akun</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>NIP</label>
                                                <input type="text" class="form-control" value="{{ $guru->nip }}" name="nip" disabled>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nama Depan</label>
                                                <input type="text" class="form-control" name="nama_depan" value="{{ $guru->nama_depan }}">
                                                <div class="invalid-feedback">
                                                    Please fill in the first name
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Nama Belakang</label>
                                                <input type="text" class="form-control" name="nama_belakang" value="{{ $guru->nama_belakang}}">
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
                                                    <textarea class="form-control codeeditor" name="alamat">{{ $guru->alamat }}</textarea>
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
                                                    <input type="text" class="form-control phone-number" name="telepon" value="{{ $guru->telepon }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" value="{{ $guru->tempat_lahir }}">
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>Tanggal Lahir</label>
                                                <input type="text" class="form-control" name="tanggal_lahir" value="{{ $guru->tanggal_lahir }}">
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
                                                    <input type="email" class="form-control" name="email" value="{{ $guru->email}}" disabled>
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
                                            <a class="btn btn-warning" href="{{ route('homeGuru') }}">
                                                Kembali
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</section>
</div>

@endsection
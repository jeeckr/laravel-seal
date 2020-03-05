@extends('template.dashboardTemplate.guru.app')

@section('style_css')

<style>
    .section {
        margin-top: 1rem !important;
    }

    .card-profil {
        margin-bottom: 15px !important;
    }

    .nav-home {
        width: 14rem !important;
    }

    .alert-success {
        width: 100% !important;
    }

    .photo-profil {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-left: 1rem !important;
    }

    .btn-simpan {
        float: right;
    }

    .btn-kembali {
        float: left;
    }
</style>

@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-profil">
                        <div class="card-body">
                            <div class="row">

                                <div class="card-header">
                                    <h4>Informasi</h4>
                                </div>
                                <div class="card-bory">
                                    <p>{{ $mapel->nama_mapel }}</p>
                                    Jumlah Materi :
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">{{ $error }}</div>
                            @endforeach
                            @endif
                            <div class="card-header">
                                <h4>Edit Materi</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('updateMateriGuru', $materi->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Bab</label>
                                        <input type="text" class="form-control" name="bab" value="{{ $materi->bab }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" name="judul" value="{{ $materi->judul }}">
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label text-md-left col-12 ">Isi materi</label>
                                        <div class="col-sm-12">
                                            <textarea class="summernote-simple" name="isi_materi">{{ $materi->isi_materi }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary btn-simpan" name="simpan">Simpan</button>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('homeGuru') }}" class="btn btn-primary btn-kembali">Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
<div class="card card-profil">
    <div class="card-body">
        <div class="row">

            <div class="col-md-4">
                <img class="mr-3 rounded-circle photo-profil" src="{{ $kepsek->showImage() }}" alt="avatar">
            </div>

            <div class="col-md-8">
                <div class="media-body">
                    <h6 class="media-title">{{ $kepsek->nama_depan }} {{ $kepsek->nama_belakang }}</h6>
                    <div class="text-small text-muted">{{ $kepsek->nip }}
                        <div class="bullet"></div> <span class="text-primary">Kepala Sekolah</span>
                    </div>
                </div>
            </div>

        </div>

        <hr>

        <div class="row justify-content-center">
            <a href="{{ route('profilKepsek', $kepsek->id) }}">
                <div class="badge badge-pill badge-primary">View Profil</div>
            </a>
        </div>
    </div>
</div>
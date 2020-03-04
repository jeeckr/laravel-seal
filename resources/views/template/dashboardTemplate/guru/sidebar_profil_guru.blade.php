<div class="card card-profil">
    <div class="card-body">
        <div class="row">

            <div class="col-md-4">
                <img class="mr-3 rounded-circle photo-profil" src="{{ $guru->showImage() }}" alt="avatar">
            </div>

            <div class="col-md-8">
                <div class="media-body">
                    <h6 class="media-title">{{ $guru->nama_depan }} {{ $guru->nama_belakang }}</h6>
                    <div class="text-small text-muted">{{ $guru->nip }}
                        <div class="bullet"></div> <span class="text-primary">Guru</span>
                    </div>
                </div>
            </div>

        </div>

        <hr>

        <div class="row justify-content-center">
            <a href="{{ route('profilGuru', $guru->id) }}">
                <div class="badge badge-pill badge-primary">View Profil</div>
            </a>
        </div>
    </div>
</div>
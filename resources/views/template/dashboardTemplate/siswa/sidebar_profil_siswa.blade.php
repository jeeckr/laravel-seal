<div class="card card-profil">
    <div class="card-body">
        <div class="row">

            <div class="col-md-4">
                <img class="mr-3 rounded-circle photo-profil" src="{{ $siswa->showImage() }}" alt="avatar">
            </div>

            <div class="col-md-8">
                <div class="media-body">
                    <h6 class="media-title">{{ $siswa->nama_depan }} {{ $siswa->nama_belakang }}</h6>
                    <div class="text-small text-muted">{{ $siswa->nisn }}
                        <div class="bullet"></div> <span class="text-primary">Siswa</span>
                    </div>
                </div>
            </div>

        </div>

        <hr>

        <div class="row justify-content-center">
            <a href="{{ route('profilSiswa', $siswa->id) }}">
                <div class="badge badge-pill bg-primary">View Profil</div>
            </a>
        </div>
    </div>
</div>
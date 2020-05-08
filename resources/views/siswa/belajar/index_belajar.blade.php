@extends('template.dashboardTemplate.siswa.App')

@section('style_css')

<style>
    .navbar-bg {
        background-color: #0491d0 !important;
    }

    .section {
        margin-top: 1rem !important;
    }

    .card-belajar {
        height: auto !important;
        width: 70%;
    }

    .card-header {
        background-color: #0491d0 !important;
    }

    .card-materi .header-materi h4 {
        color: white !important;
    }
</style>

@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="container">
                <div class="row">
                    <div class="card card-belajar mx-auto">
                        <div class="card-body card-materi">

                            @foreach($materi as $data)
                            <div class="card-header bg-primary header-materi">
                                <h4>Bab. {{ $data->bab }} {{ $data->judul }}</h4>
                            </div>

                            <div class="container mt-2">
                                <p>{!! $data->isi_materi !!}</p>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    {{ $materi->links() }}
                </div>

            </div>

        </div>
    </section>
</div>
@endsection
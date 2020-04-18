@extends('template.dashboardTemplate.siswa.App')

@section('style_css')

<style>
    .section {
        margin-top: 1rem !important;
    }

    .card-belajar {
        height: 70vh !important;
        width: 70%;
    }

    .header-soal {
        padding-top: 22px !important;

    }

    .form-soal {
        padding-left: 20px;
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
                        <div class="card-body">
                            <div class="card-header bg-primary header-soal">
                                <h5>Soal no 1</h5>
                            </div>

                            <form action="{{ route('kuisSiswaStore', $soal[0]->id) }}" method="POST" class="form-soal">
                                @csrf
                                <h5 class="mt-4">
                                    {{ $soal[0]->soal }}
                                </h5>

                                <div class="form-group">
                                    <label class="d-block"></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="A">
                                        <label class="form-check-label" for="pilihan">
                                            {{ $soal[0]->pilihan_a }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="B">
                                        <label class="form-check-label" for="pilihan">
                                            {{ $soal[0]->pilihan_b }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="C">
                                        <label class="form-check-label" for="pilihan">
                                            {{ $soal[0]->pilihan_c }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="D">
                                        <label class="form-check-label" for="pilihan">
                                            {{ $soal[0]->pilihan_d }}
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="next" value="{{ $soal->nextPageUrl() }}">

                                <input type="hidden" name="status_siswa" value="1">
                                <input type="hidden" name="id_kuis" value="{{ $soal[0]->id_kuis}}">

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit">Lanjut</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>

@endsection
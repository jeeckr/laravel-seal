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

                            <form action="{{ route('kuisSiswaStore', $soal[0]->id) }}" method="POST">
                                @csrf
                                <h5>
                                    {{ $soal[0]->soal }}
                                </h5>

                                <div class="form-group">
                                    <label class="d-block">Jawaban</label>
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

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit">Selesai</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">

                </div>

            </div>

        </div>
    </section>
</div>

@endsection
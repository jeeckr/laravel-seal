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

                            <form action="{{ route('tugasSiswaStore', $siswa['id']) }}" method="POST">
                                @csrf

                                @foreach($soal as $data)

                                <h5>
                                    {{ $data->soal }}
                                </h5>

                                <div class="form-group">
                                    <label class="d-block">Jawaban</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="A" checked>
                                        <label class="form-check-label" for="pilihan">
                                            {{ $data->pilihan_a }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="B" checked>
                                        <label class="form-check-label" for="pilihan">
                                            {{ $data->pilihan_b }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="C" checked>
                                        <label class="form-check-label" for="pilihan">
                                            {{ $data->pilihan_c }}
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pilihan" id="pilihan" value="D" checked>
                                        <label class="form-check-label" for="pilihan">
                                            {{ $data->pilihan_d }}
                                        </label>
                                    </div>
                                </div>



                                @endforeach

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
@extends('template.dashboardTemplate.siswa.App')

@section('style_css')

<style>
    .section {
        margin-top: 1rem !important;
    }

    .card-belajar {
        height: 90vh !important;
        width: 70%;
    }

    .hasil {
        color: white !important;
    }

    .nilai {
        font-size: 70px;
    }

    .point {
        font-size: 20px;
        color: #6777ef;
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
                            <div class="card-header bg-primary">
                                <h4 class="hasil">Hasil</h4>
                            </div>
                            <div class="card-body">
                                <div class="nilai text-center">
                                    {{ $hasil }}
                                </div>
                                <div class="point text-center">
                                    Point
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4>Review</h4>
                                    <div class="card-header-action">
                                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                                    </div>
                                </div>
                                <div class="collapse show" id="mycard-collapse">
                                    <div class="card-body">

                                        <?php $no = 0 ?>
                                        @foreach($jawaban as $data)
                                        <?php $no++ ?>

                                        <div class="row">
                                            <div class="col-md-2">
                                                {{ $no }}
                                            </div>
                                            <div class="col-md-5">
                                                {{ $data->soal->soal }}
                                            </div>
                                            <div class="col-md-3">
                                                Jawaban Anda : {{ $data->jawaban }}
                                            </div>
                                            <div class="col-md-2">

                                            </div>
                                        </div>

                                        @endforeach


                                    </div>
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
@extends('template.dashboardTemplate.kepsek.app')

@section('style_css')

<style>
    .navbar-bg {
        background-color: #0491d0 !important;
    }

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

    .btn-kembali {
        float: right;
    }

    .btn-primary {
        background-color: #0491d0 !important;
    }

    h4 {
        color: #0491d0 !important;
    }
</style>

@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-3">
                </div>

                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header">
                            <h4>Performa Guru</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart4"></canvas>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
</div>
{{$kuis}}

@endsection

@section('js')
<script src="{{ asset('/assets/js/chart.min.js') }}"></script>
<script>
    var materi = "{{ count($materi) }}";
    var kuis = "{{ count($kuis) }}";
    console.log(kuis);
    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    materi,
                    40,
                    30,
                    100,
                ],
                backgroundColor: [
                    '#63ed7a',
                    '#ffa426',
                    '#fc544b',
                    '#6777ef',
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Materi',
                'Kuis',
                'Red',
                'Blue'
            ],
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
        }
    });
</script>
@endsection
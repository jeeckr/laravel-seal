<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link rel="stylesheet" href="/assets/css/font-awesome.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="/assets/css/styleHome.css">
    <title>Homepage</title>
    <style>
        body {
            overflow-y: hidden;
        }

        .btn-all a {
            width: 14rem !important;
        }

        .btn-login {
            margin: 1rem !important;
            text-align: center;
            padding-right: 20px !important;
            padding-left: 20px !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">E-Learning</a>
        </div>
    </nav>
    <div class="container-fluid gtco-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1> We promise to bring
                        the best <span>solution</span> for
                        your business.
                    </h1>

                    <div class="row justify-content-center btn-all">
                        <a class="btn-login" href="{{ route('loginSiswa') }}">Siswa </a>
                        <a class="btn-login" href="{{ route('loginGuru') }}">Guru </a>
                        <a class="btn-login" href="#">Kepala Sekolah </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card"><img class="card-img-top img-fluid" src="/assets/img/banner-img.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
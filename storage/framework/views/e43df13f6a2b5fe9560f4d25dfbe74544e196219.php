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

        .banner-title {
            margin-top: 3rem;
            margin-bottom: 5rem;
        }

        .btn-all a {
            width: 13rem !important;
            font-size: 15px !important;
            font-weight: bold !important;
        }

        .btn-login {
            margin: 0.5rem !important;
            text-align: center;
            padding-right: 20px !important;
            padding-left: 20px !important;
        }

        h4 {
            margin-left: 5rem;
        }

        .now {
            color: #007bff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand">E-Learning</a>
        </div>
    </nav>
    <div class="container-fluid gtco-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-title text-center">
                        <h3>"Mulailah dari mana kau berada.<br> Gunakan apa yang kau punya.<br> Lakukan apa yang kau bisa."
                        </h3>
                    </div>

                    <h4>Yuk Login <span class="now">Sekarang</span> !</h4>

                    <div class="row justify-content-center btn-all">
                        <a class="btn-login" href="<?php echo e(route('loginSiswa')); ?>">Siswa </a>
                        <a class="btn-login" href="<?php echo e(route('loginGuru')); ?>">Guru </a>
                        <a class="btn-login" href="<?php echo e(route('loginKepsek')); ?>">Kepala Sekolah </a>
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

</html><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/home.blade.php ENDPATH**/ ?>
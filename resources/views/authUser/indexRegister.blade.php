<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/assets2/img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets2/css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="/assets2/css/animate.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="/assets2/css/owl.carousel.min.css">
        <!-- themify CSS -->
        <link rel="stylesheet" href="/assets2/css/themify-icons.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="/assets2/css/flaticon.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="/assets2/css/magnific-popup.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="/assets2/css/slick.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="/assets2/css/style.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow-y: hidden;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .banner_part {
                margin-top: -9rem !important;
            }

        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height"> -->
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="content">
                
                <!-- banner part start-->
                <section class="banner_part">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-xl-6">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                                                              
                                        <a href="{{ route('formRegisterSiswa') }}" class="btn_1">Siswa</a>
                                        <a href="{{ route('formRegisterGuru') }}" class="btn_1">Guru</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- banner part start-->

            </div>
        <!-- </div> -->

         <!-- jquery -->
    <script src="/assets2/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/assets2/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/assets2/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="/assets2/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="/assets2/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="/assets2/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="/assets2/js/owl.carousel.min.js"></script>
    <script src="/assets2/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="/assets2/js/slick.min.js"></script>
    <script src="/assets2/js/jquery.counterup.min.js"></script>
    <script src="/assets2/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="/assets2/js/custom.js"></script>
    </body>
</html>

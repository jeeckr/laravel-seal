<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }}</title>

    <!-- General CSS Files -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="{{ asset('/stisla/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla/modules/fontawesome/css/all.css') }}">

    <!-- Library -->
    <link rel="stylesheet" href="{{ asset('/stisla/css/fullcalendar.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla/css/components.css') }}">

    <style>
        /* .bg-set {
            background: #0e82d6 !important;
            background-color: #0e82d6 !important;
        }

        .bg-primary {
            color: white;
        } */

        .navbar {
            left: 5px !important;
        }

        .navbar-bg {
            height: 70px !important;
            /* background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 44, 121, 1) 0%, rgba(16, 169, 255, 1) 97%) !important; */
        }

        .main-content {
            padding-left: 30px !important;
        }

        .image-navbar {
            height: 30px !important;
            object-fit: cover !important;
        }

        .bg-primary {
            color: white;
        }
    </style>

    @yield('style_css')

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
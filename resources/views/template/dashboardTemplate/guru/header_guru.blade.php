<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }}</title>

    <!-- General CSS Files -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('/stisla/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla/modules/fontawesome/css/all.css') }}">

    <!-- Library -->
    <link rel="stylesheet" href="{{ asset('/stisla/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/select.bootstrap4.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla/css/components.css') }}">

    <style>
        .navbar {
            left: 5px !important;
        }

        .navbar-bg {
            height: 70px !important;
        }

        .main-content {
            padding-left: 30px !important;
        }

        .image-navbar {
            height: 30px !important;
            object-fit: cover !important;
        }
    </style>

    @yield('style_css')

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
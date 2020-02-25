<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .dataTables_length label {
      width: 100% !important;
      padding-bottom: 0 !important;
      padding-top: 25px !important;
    }

    .pagination {
      float: right !important;
    }

    .custom-select-sm {
      width: 30% !important;

    }

    .dataTables_filter label {
      float: right !important;
    }
  </style>

  <?php echo $__env->yieldContent('style_css'); ?>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php echo $__env->make('template.adminTemplate.AdminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column"><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/template/adminTemplate/AdminHeader.blade.php ENDPATH**/ ?>
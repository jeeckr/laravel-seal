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
  <link href="<?php echo e(asset('/assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('/assets/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(asset('/assets/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

  <?php echo $__env->yieldContent('style_css'); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php echo $__env->make('template.adminTemplate.AdminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column"><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/template/adminTemplate/AdminHeader.blade.php ENDPATH**/ ?>
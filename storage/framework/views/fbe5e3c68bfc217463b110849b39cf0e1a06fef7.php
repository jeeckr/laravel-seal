<?php echo $__env->make('template.adminTemplate.AdminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('style_css'); ?>

<!-- Main Content -->
<div id="content">

  <?php echo $__env->make('template.adminTemplate.AdminTopbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <?php echo $__env->yieldContent('content'); ?>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php echo $__env->make('template.adminTemplate.AdminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/admin/app.blade.php ENDPATH**/ ?>
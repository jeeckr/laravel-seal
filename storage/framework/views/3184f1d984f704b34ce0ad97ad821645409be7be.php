<?php echo $__env->make('template.dashboardTemplate.DashboardHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('style_css'); ?>

<?php echo $__env->make('template.dashboardTemplate.siswa.NavbarSiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('template.dashboardTemplate.DashboardFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeeckr/Documents/Laravel/Elearning/resources/views/template/dashboardTemplate/siswa/App.blade.php ENDPATH**/ ?>
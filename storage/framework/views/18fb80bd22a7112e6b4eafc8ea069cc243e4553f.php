
<!-- title start-->
<?php $__env->startSection('title'); ?>
<title>SuperAdmin Dashboard</title>
<?php $__env->stopSection(); ?>
<!-- end title start-->

<!--start wrapper-->
<!-- <div class="wrapper"> -->

<!-- <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

<!--start sidebar-->
<?php echo $__env->make('superadmin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end sidebar-->

<?php $__env->startSection('content'); ?>
<!-- start main -->
<?php echo $__env->make('superadmin.dailyreport', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end main -->

<?php $__env->stopSection(); ?>

<!--end wrapper-->
<!-- </div> -->
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/superadmin/dashboard.blade.php ENDPATH**/ ?>
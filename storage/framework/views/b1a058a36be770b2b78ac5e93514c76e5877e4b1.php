

<!-- title start-->
<?php $__env->startSection('title'); ?>
<title>Admin Dashboard</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--sidebar-->
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--sidebar-->
<p>hello</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
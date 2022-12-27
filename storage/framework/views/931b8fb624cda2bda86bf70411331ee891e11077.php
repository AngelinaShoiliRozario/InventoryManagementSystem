<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="<?php echo e(asset('/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
  <link href="<?php echo e(asset('/assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(asset('/assets/plugins/select2/css/select2-bootstrap4.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/css/bootstrap-extended.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/css/style.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/css/icons.css')); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
  <!-- loader-->
	<link href="<?php echo e(asset('/assets/css/pace.min.css')); ?>" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="<?php echo e(asset('/assets/css/dark-theme.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/css/light-theme.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/css/semi-dark.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('/assets/css/header-colors.css')); ?>" rel="stylesheet" />

  <?php echo $__env->yieldContent('title'); ?>
</head>

<body>
  <!--start wrapper-->
  <div class="wrapper">

    <!--start top header-->
             <!-- <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> --> 
       <!--end top header-->

       <!-- start side bar -->
    <!-- Sidebar blade should be placed avobe the main tag always -->
       <!-- end start side bar -->

       <!--start main content-->
         <?php echo $__env->yieldContent('content'); ?>       
       <!--end page main-->


       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->



  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="<?php echo e(asset('/assets/js/bootstrap.bundle.min.js')); ?>"></script>
  <!--plugins-->
  <script src="<?php echo e(asset('/assets/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/js/pace.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/chartjs/js/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/chartjs/js/Chart.extension.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/js/table-datatable.js')); ?>"></script>
	 
   <script src="<?php echo e(asset('/assets/js/pace.min.js')); ?>"></script>
   <script src="<?php echo e(asset('/assets/plugins/select2/js/select2.min.js')); ?>"></script>
   <script src="<?php echo e(asset('/assets/js/form-select2.js')); ?>"></script>
  <!--app-->
  <script src="<?php echo e(asset('/assets/js/app.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/js/index2.js')); ?>"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>

</body>

</html><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/layouts/master.blade.php ENDPATH**/ ?>
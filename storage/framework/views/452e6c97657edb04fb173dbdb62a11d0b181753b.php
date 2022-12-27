
<title>Waste</title>
<!--sidebar-->
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--sidebar-->
<?php $__env->startSection('content'); ?>
<!--start content-->
<main class="page-content">


    <div>
        <div style="text-align:center;"><h3 style="color:green; font-weight:bold; border-radius: 50px;">View All Waste List</h3></div>
        <hr>
        
    </div>
    <div class="d-flex">
        <div class="card bwaste shadow-none w-100">
            <div class="card-body">
                <div class="responsive-table">
                    <table id="" class="table table-striped table-bwasteed " style="width: 100%;table-layout:fixed;">
                        <thead>
                            <tr>
                                <th>Waste ID</th>
                                <th>Ingredient Name</th>
                                <th>Amount (g)</th>
                                <th>Cost</th>
                                <th>Expired Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $wastes = \App\Waste::orderBy('id','desc')->get();                         
                            $total_waste=0;
                            ?>
                            <?php $__currentLoopData = $wastes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $waste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="col-12">


                                <td> <?php echo e($waste->id); ?> </td>
                                <?php
                        $ingredient = \App\Ingredient::where('id',$waste->ingredient_id)->first();
                                ?>

                                <td> <?php echo e($ingredient->name); ?> </td>
                                <td> <?php echo e($waste->amount); ?> </td>
                                <td> <?php echo e($waste->cost); ?> </td>
                                <td><?php echo e($waste->expire_date); ?></td>
                                <?php 
                                $total_waste=$total_waste + $waste->cost;
                                ?>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
                    <br><br>
                    <div style="text-align:center;"><h2 class="btn btn-success">Monthly Waste= <?php echo e($total_waste); ?> TK</h2></div>

                </div>
            </div>
        </div>
    </div>
</main>
<!--end page main-->
<script>
    const hide = () => {

        let card_body = document.querySelector('.card-body');

        if (card_body.style.display == 'none') {
            card_body.style.display = '';
        } else {
            card_body.style.display = 'none';
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/Waste/wastes.blade.php ENDPATH**/ ?>
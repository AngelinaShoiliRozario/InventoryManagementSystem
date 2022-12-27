<!-- Daily report page -->


<?php $__env->startSection('title'); ?>
<title>Daily Report</title>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<main class="page-content">
    <h4 class="text-center  btn-primary">Monthly Order Accepted Report</h4>


    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="table-responsive">

                <!-- Search button  -->
                       
                

                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr style="display:none;">
                                <th>Details</th>
                                <th>Placed Date</th>
                                <th>Kitchener Name</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $orders = \App\Order::orderBy('id', 'desc')->get();
                            ?>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(Carbon\carbon::now()->format('d-m-y') && $order->status==='accepted'): ?>
                            <tr class="col-12">
                                <?php
                                $details = json_decode($order->details,true);
                                ?>

                                <td>
                                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $ingredientname = \App\Ingredient::where('id',$key)->first()->name;
                                    ?>

                                    <b><?php echo e($ingredientname); ?></b> : <span><?php echo e($value); ?> Gram</span>
                                    <br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>


                                <td><?php echo e($order->placed_date); ?> </td>
                                <?php
                                $user = \App\user::where('id',$order->kitchener_id)->first();
                                ?>
                                <td><?php echo e($user->name); ?> </td>
                                <td>

                                    <span class="btn btn-success"><?php echo e($order->status); ?></span>
                                </td>

                            </tr>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
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

<!--end row-->

<!--end page main-->
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/superadmin/monthlyreport.blade.php ENDPATH**/ ?>
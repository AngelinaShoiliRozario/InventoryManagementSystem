
<?php $__env->startSection('title'); ?>
  <title>Order History</title>
<?php $__env->stopSection(); ?>

<!--sidebar-->
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--sidebar-->

<?php $__env->startSection('content'); ?>

<!--start content-->
<main class="page-content">



    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="responsive-table">
                    <table id="" class="table table-striped table-bordered " style="width: 100%;table-layout:fixed;">
                        <thead>
                            <tr>

                                <th>Order ID</th>
                                <th>Details</th>                            
                                <th>Placed Date</th>
                                <th>Kitchener</th>  
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $orders = \App\Order::where('status',"!=",'pending')->orderBy('id', 'desc')->get();
                          
                            ?>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="col-12">


                                <td> <?php echo e($order->id); ?> </td>
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

                                <td >
                                    <?php if($order->status=='pending'): ?>
                                    <span class="btn btn-warning"><?php echo e(ucfirst(trans($order->status))); ?></span>
                                    <?php elseif($order->status=='accepted'): ?>
                                    <span class="btn btn-success"><?php echo e(ucfirst(trans($order->status))); ?></span>
                                    <?php elseif($order->status=='rejected'): ?>
                                    <span class="btn btn-danger"><?php echo e(ucfirst(trans($order->status))); ?></span>
                                    <?php endif; ?>
                                </td>

                            </tr>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/orderHistory.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
<!--sidebar-->
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--sidebar-->
<!--start content-->
<main class="page-content">



    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <form class="card-body" method="post" action=<?php echo e(url("/accept_order/".$order->id)); ?>>
                <?php echo csrf_field(); ?>
                <div class="responsive-table">
                    <table id="" class="table table-striped table-bordered " style="width: 100%;">
                        <thead>
                            <tr>

                                <th>Ingredient Name</th>
                                <th>Requested Amount (g)</th>
                                <th>In Stock (g)</th>
                                <th>Batch</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $orders =json_decode($order->details,true);

                            ?>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="col-12">

                                <?php
                                $ingredient = \App\Ingredient::where('id',$key)->first();
                                ?>
                                <td> <?php echo e($ingredient->name); ?>

<input type="text" name="ingredient_ids[]" value="<?php echo e($ingredient->id); ?>" style="display:none;">

                                </td>
                                <td>
                                    <input type="text" name="amounts[]" value="<?php echo e($value); ?>" style="display:none;">
                                    <?php echo e($value); ?>

                                </td>

                                <td>
                                    <?php
                                    $stock = \App\Stock::where('ingredient_id',$key)->where('remaining',">","0")->get();
                                    $sum = 0;
                                    foreach($stock as $s){
                                    $sum = $sum + $s->remaining;
                                    }
                                    ?>

                                    <?php if($sum >= $value): ?>
                                    <span><?php echo e($sum); ?> </span>
                                    <?php else: ?>
                                    <span style="color: red;"><?php echo e($sum); ?> </span>
                                    <?php endif; ?>
                                </td>

                                <td style="width: 200px;">
                                    <div class="col-12 col-lg-4">
                                        <?php
                                        $stocks = \App\Stock::where('ingredient_id',$key)->where('remaining',">","0")->get();
                                        ?>

                                        <?php if($ingredient->batchwise_stock_management=='0'): ?>
                                        <select name='stocks[]'>
                                            <?php if($stocks==null): ?>
                                            <option value="0">nodata</option>
                                            <?php else: ?>
                                            <option value="null">Select Batch</option>
                                            <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($stock->id); ?>">B-> <?php echo e($stock->batch_no); ?>: <?php echo e($stock->remaining); ?>g</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <option value="auto">Auto Calculate</option>
                                        </select>
                                        <?php else: ?>
                                        <select name='stocks[]'>
                                            <?php if($stocks==null): ?>
                                            <option value="0">nodata</option>
                                            <?php else: ?>
                                            <option value="null">Select Batch</option>
                                            <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($stock->id); ?>">B-> <?php echo e($stock->batch_no); ?>: <?php echo e($stock->remaining); ?>g [<?php echo e($stock->expire_date); ?>]</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <?php endif; ?>
                                            <option value="auto">Auto Calculate</option>
                                        </select>
                                        <?php endif; ?>
                                    </div>
                                </td>

                                <td>
                                    <?php if($sum >= $value): ?>
                                    <a href=<?php echo e("/admin/place_purchase_request/".$key); ?>><span class="btn btn-secondary">Purchase Request</span></a>
                                    <?php else: ?>
                                    <a href=<?php echo e("/admin/place_purchase_request/".$key); ?>><span class="btn btn-primary">Purchase Request</span></a>
                                    <?php endif; ?>

                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
                </div>
                <div>
                    <a href=<?php echo e("/accept/".$order->id); ?>><button type="submit" class="btn btn-success">Accept</button></a>

                    <a href=<?php echo e("/reject/".$order->id); ?>><span class="btn btn-danger">Reject</span></a>
                </div>
            </form>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/checkAvailibility.blade.php ENDPATH**/ ?>
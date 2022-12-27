
<?php $__env->startSection('title'); ?>
<title>Purchase Stock </title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        
        <div class="ms-auto">
            <div class="btn-group">
                <button onclick="hide()" type="button" class="btn btn-primary">New Purchase Request</button>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card-body" style="display: none;">
        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <div class="card shadow-none bg-light border">
                    <div class="card-body">
                        <form class="row g-3" action="<?php echo e(url('/submit_purchase_request')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="col-12 col-lg-4">

                                <?php
                                $ingredients = \App\Ingredient::all();
                                ?>

                                <label class="form-label">Select Ingredient</label>
                                <select name='ingredient' class="form-select">
                                    <?php if($ingredients==null): ?>
                                    <option value="0">nodata</option>
                                    <?php else: ?>
                                    <option value="null">Select</option>
                                    <?php $__currentLoopData = $ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ingredient->id); ?>"><?php echo e($ingredient->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>

                            </div>
                            <div class="col-12 col-lg-4">
                                <label class="form-label">Total Amount</label>
                                <input name="amount" type="text" class="form-control" placeholder="amount" required>
                            </div>
                            <div class="col-12 col-lg-4">
                                    <?php
                                    $units = \App\Unit::all();

                                    ?>
                                    <label class="form-label">Ingredient Unit</label>
                                    <select class="single-select" name="unit" id="" required>
                                        <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($unit->id); ?>"><?php echo e($unit->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                          


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

    <!--end breadcrumb-->
    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><input class="form-check-input" type="checkbox"></th>


                                <th>Ingredient Name</th>
                                <th>Amount</th>
                                <th>Unit</th>
                                <th>Entry Date</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $requests = \App\PurchaseRequest::all();
                            ?>
                            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>

                                <td>
                                    <?php
                                    $ingredient_name = \App\Ingredient::where('id',$request->ingredient_id)->first()->name;
                                    ?>


                                    <?php echo e($ingredient_name); ?>

                                </td>
                                <td> <?php echo e($request->amount); ?> </td>
                                <td> 
                                <?php
                                    $unit_name = \App\Unit::where('id',$request->unit_id)->first()->name;
                                    ?>
                                    
                                
                                <?php echo e($unit_name); ?> </td>
                                <td> <?php echo e($request->entry_date); ?> </td>
                             
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/purchaseRequest.blade.php ENDPATH**/ ?>
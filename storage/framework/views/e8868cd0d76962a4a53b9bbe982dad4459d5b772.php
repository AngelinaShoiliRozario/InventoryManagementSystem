
<?php $__env->startSection('title'); ?>
<title>Stock</title>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="">
            <div class="btn-group">
                <button type="button" class="btn btn-danger"><b><?php echo e($ingredient->name); ?> Stock</b> </button>
            </div>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button onclick="hide()" type="button" class="btn btn-primary">New Stock</button>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card-body" style="display: none;">
        <div class="row g-3">
            <div class="col-12 col-lg-12">
                <div class="card shadow-none bg-light border">
                    <div class="card-body">
                        <form class="row g-3" action="<?php echo e(url('/submit_stock/' . $ingredient->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="col-12 col-lg-4">
                                <label class="form-label">Total Amount</label>
                                <input name="amount" type="number" class="form-control" placeholder="amount" required>
                            </div>

                            <div class="col-12 col-lg-4">
                                <?php
                                $units = \App\Unit::all();
                                ?>
                                <label class="form-label">Unit</label>
                                <select name='unit_id' class="form-select">
                                    <?php if($units==null): ?>
                                    <option value="0">nodata</option>
                                    <?php else: ?>
                                    <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($unit->id); ?>"><?php echo e($unit->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="col-12 col-lg-4">
                                <label class="form-label">Total Cost</label>
                                <input type="number" name="total_cost" class="form-control" placeholder="Cost" required>
                            </div>

                            <?php if($ingredient->batchwise_stock_management=='1'): ?>
                            <div class="col-12 col-lg-4">
                                <label class="form-label">Manufacture Date</label>
                                <input name="manufacture_date" type="date" class="form-control" placeholder="Manufacture Date" max=<?php echo e(Carbon\Carbon::now()->format('Y-m-d')); ?> required>
                            </div>
                            <?php endif; ?>

                            <?php if($ingredient->batchwise_stock_management=='1'): ?>
                            <div class="col-12 col-lg-4">
                                <label class="form-label">Expire Date</label>
                                <input name="expire_date" type="date" class="form-control" placeholder="Expire Date" min=<?php echo e(Carbon\Carbon::now()->format('Y-m-d')); ?> required>
                            </div>
                            <?php endif; ?>

                            <div class="col-12 col-lg-4">
                                <label class="form-label">Alert Quantity(g)</label>
                                <input name='alert_qty' type="text" class="form-control" placeholder="Alert Quantity" required>
                            </div>

                            <div class="col-12 col-lg-4">
                                <?php
                                $time = Carbon\Carbon::now()->timestamp;
                                ?>
                                <label class="form-label">Batch No</label>
                                <input name='batch_no' type="text" class="form-control" placeholder="Batch No" value="<?php echo e($time); ?>" required>
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
                                <th>Total Amount(g)</th>
                                <th>Remaining(g)</th>
                                <th>Cost Per Unit(TK)</th>
                                <th>Entry Date</th>
                                <?php if($ingredient->batchwise_stock_management): ?>
                                <th>Expire date</th>
                                <?php endif; ?>
                                <th>Batch No</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stocks = \App\Stock::where('ingredient_id',$ingredient->id)->get();
                            ?>
                            <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td> <?php echo e($stock->amount); ?> </td>
                                <td> <?php echo e($stock->remaining); ?> </td>
                                <td><?php echo e($stock->cost_per_unit); ?> </td>
                                <td><?php echo e($stock->entry_date); ?></td>
                                <?php if($ingredient->batchwise_stock_management): ?>
                                <td><?php echo e($stock->expire_date); ?></td>
                                <?php endif; ?>
                                <td><?php echo e($stock->batch_no); ?></td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/ingredient/stocks.blade.php ENDPATH**/ ?>
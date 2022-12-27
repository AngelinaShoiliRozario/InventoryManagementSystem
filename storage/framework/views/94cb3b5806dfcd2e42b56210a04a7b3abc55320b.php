
<?php $__env->startSection('title'); ?>
<title>Ingredients</title>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<!--start content-->
<main class="page-content">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div class="ms-auto">
            <div class="btn-group">
                <button onclick="hide()" type="button" class="btn btn-primary">New Ingredient</button>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->


    <div class="card ">

        <div class="card-body" style="display: none;">
            <div class="row">
                <form class="row g-3" action="<?php echo e(url('/post_ingredient')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-12 col-lg-4">
                        <label class="form-label">Name</label>
                        <input name='name' type="text" class="form-control" placeholder="Ingredient name" required>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label class="form-label">Category</label>
                        <?php
                        $categories = \App\IngredientCategory::all();
                        ?>
                        <select name='category' class="form-select">
                            <?php if($categories !== null): ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <option style="padding:10px;">no data</option>
                            <?php endif; ?>


                        </select>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label class="form-label">Sub Category</label>
                        <?php
                        $categories = \App\IngredientSubCategory::all();
                        ?>
                        <select name='subcategory' class="form-select">
                            <?php if($categories !== null): ?>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <option style="padding:10px;">no data</option>
                            <?php endif; ?>


                        </select>
                    </div>
                    <div class="col-12 col-lg-4">
                        <label class="form-label">Stock Management</label>

                        <select name='stock_management' class="form-select">
                            <option value="0">Primary</option>
                            <option value="1">Batchwise</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>
            </div>
            <!--end row-->
        </div>
    </div>
    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><input class="form-check-input" type="checkbox"></th>
                                <th>ID</th>
                                <th>Item Name</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Stock Management Type</th>
                                <th>In stock(g)</th>
                                <th>Stock Entry</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ingredients = \App\Ingredient::all();
                            ?>
                            <?php $__currentLoopData = $ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td><?php echo e($ingredient->id); ?></td>
                                <td> <?php echo e($ingredient->name); ?> </td>                                                                                        
                                <td>
                                <?php
                                    $category = \App\IngredientCategory::where('id',$ingredient->ingredient_category_id)->first();
                                    
                                 ?>

                                 <p><?php echo e($category->name); ?></p>

                            </td>

                                <td>
                                    <?php
                                    $subcategory = \App\IngredientSubCategory::where('id',$ingredient->ingredient_subcategory_id)->first();
                                    ?>
                                    <p> <?php echo e($subcategory->name); ?></p>
                                </td>
                                <td><?php if($ingredient->batchwise_stock_management=="0"): ?>Primary

                                    <?php else: ?>
                                    Batchwise
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php
                                    $stock = \App\Stock::where('ingredient_id',$ingredient->id)->where('remaining',">","0")->get();
                                    $sum = 0;
                                    foreach($stock as $s){
                                    $sum = $sum + $s->remaining;
                                    }
                                    ?>
                                    <?php echo e($sum); ?>

                                </td>


                                <td><a href="<?php echo e(url('/stock_entry/' . $ingredient->id)); ?>">Stock Entry</a></td>

                              
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
            card_body.style.display = 'block';
        } else {
            card_body.style.display = 'none';
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/ingredient/ingredients.blade.php ENDPATH**/ ?>
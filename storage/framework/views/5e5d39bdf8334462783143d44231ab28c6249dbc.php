
<?php $__env->startSection('title'); ?>
<title>Edit Sub Category</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--sidebar-->
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--sidebar-->
<main class="page-content">
    <div>
        <div class="col-lg-12 ">
            <h6 class="mb-0 text-center text-uppercase">Edit Sub Category</h6>
            <div class="card">

                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" method="post" action="/edit_ingredient_subcategory_post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>                          
                            <div class="col-12">
                            </div>
                            <div class="col-6" style="display: none;">
                                <label class="form-label">ID</label>
                                <input class="form-control" value="<?php echo e($ingredientSubCategory->id); ?>" name="id">
                            </div>
                            <div >
                                    <img src="<?php echo e(asset($ingredientSubCategory->image)); ?>" alt="sub category image"  id="output" width="100">
                                </div>
                            <div class="col-12  col-lg-6">
                                <label class="form-label"><b> Image Upload</b></label>
                                <input name="image" type="file" class="form-control" placeholder="Link" onchange="loadFile(event)">

                            </div>
                            <div class="col-6">
                                <label class="form-label">Name </label>
                                <input type="text" class="form-control" value="<?php echo e($ingredientSubCategory->name); ?>" name="name">
                            </div>
                            <div class="col-6">
                                <label class="form-label">description</label>
                                <input type="text" class="form-control" value="<?php echo e($ingredientSubCategory->description); ?>" name="description">
                            </div>
                            
                            <div class="col-6">
                                <?php 
                                $category = \App\IngredientCategory::all();
                                ?>
                                <label class="form-label"><b>Ingredient Category</b></label>
                                <select class="single-select" name="category" value="null" required>

                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c->id); ?>" <?php if($c->id ===$ingredientSubCategory->ingredient_category_id): ?> selected <?php endif; ?>><?php echo e($c->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                           

                            <div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    
    var loadFile = function(event) {
        console.log(event);
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };


    </script>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/ingredientSubCategory/editIngredientSubCategory.blade.php ENDPATH**/ ?>
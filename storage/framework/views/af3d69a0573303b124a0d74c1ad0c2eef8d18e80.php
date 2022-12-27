
<?php $__env->startSection('title'); ?>
<title>Edit Ingredient Category</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--sidebar-->
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--sidebar-->
<main class="page-content">
    <div>
        <div class="col-lg-12 ">
            <h6 class="mb-0 text-center text-uppercase">Edit Ingredient Category</h6>
            <div class="card">

                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" method="post" action="/edit_ingredient_category_post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <div class="col-12">
                            
                               


                            </div>
                            <div class="col-6" style="display: none;">
                                <label class="form-label">ID</label>
                                <input class="form-control" value="<?php echo e($ingredientCategory->id); ?>" name="id">
                            </div>
                         
                            
                            <div class="col-6">
                                <label class="form-label">Name </label>
                                <input type="text" class="form-control" value="<?php echo e($ingredientCategory->name); ?>" name="name">
                            </div>
                            <div class="col-6">
                                <label class="form-label">description</label>
                                <input type="text" class="form-control" value="<?php echo e($ingredientCategory->description); ?>" name="description">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/admin/ingredientCategory/editIngredientCategory.blade.php ENDPATH**/ ?>
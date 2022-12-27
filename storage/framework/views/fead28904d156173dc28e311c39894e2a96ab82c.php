

<!-- start title -->
<?php $__env->startSection('title'); ?>
<title>User-List</title>
@sendection
<!-- end title -->

<!--sidebar-->
<?php echo $__env->make('superadmin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--sidebar-->

<?php $__env->startSection('content'); ?>
<!--start content-->
<main class="page-content">
    <div class="d-flex">
        <div class="card border shadow-none w-100">
            <div class="card-body">
                <div class="responsive-table">
                    <table id="example2" class="table table-striped table-bordered " style="width: 100%;table-layout:fixed;">
                        <thead>
                            <tr>
                                
                                <th >Image</th>
                                <th >Email</th>
                                <th >Password</th>
                                <th >Phone</th>
                                <th >Gender</th>
                                <th >Address</th>
                                <th >Position</th>                          
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="col-12">

                              
                                <td style="text-align: center;"><img height="150" src="<?php echo e($user->image); ?>" alt=""> <br> <?php echo e($user->name); ?></td>
                                <td > <?php echo e($user->email); ?></td>
                                <td style="color: blue; font-weight:bold;"> <?php echo e($user->password); ?></td>
                                <td><?php echo e($user->phone); ?> </td>
                                <td><?php echo e($user->gender); ?></td>
                                <td><?php echo e($user->address); ?></td>
                                <td style="color: black; font-weight:bold;"><?php echo e($user->user_type); ?></td>                            
                                <td>                                  
                                    <a href="<?php echo e(url('/edituser/'.$user->id)); ?>" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i>
                                    </a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/superadmin/userlist.blade.php ENDPATH**/ ?>
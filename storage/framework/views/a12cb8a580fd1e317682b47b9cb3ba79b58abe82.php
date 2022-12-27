

<?php $__env->startSection('title'); ?>
    <title>Place order</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('kitchen_staff.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--start content-->
    <main class="page-content">


        <div class="row">
            <div>
                <div class="">

                    <div class="card-body">
                        <div>
                            <div class="">
                                <div class="card shadow-none bg-light border">
                                    <div class="card-body">

                                       

                                        <form id="form" action="/post_order" method="post"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>

                                          
                                            <div class="col-12 col-lg-12" >
                                                <?php
                                                    $ingredients = \App\Ingredient::all();
                                                    $units = \App\Unit::all();
                                                ?>
                                                <label class="form-label">Select Ingredient</label>
                                                <select id="comsumption_item" class="single-select"
                                                    onchange="add_consumption_btn(this)">
                                                    <option>Select
                                                    </option>
                                                    <?php $__currentLoopData = $ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($ingredient); ?>"><?php echo e($ingredient->name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                             <div id="add_more" class="row g-3" >

                                             </div>                                       
                                           <br>
                                           <br>
                                             <div class="col-12 ">
                                                <div class="">
                                                    <button style="display: block;margin-right:auto;" class="btn btn-primary"
                                                        type="submit">Place Order</button>
                                                </div>

                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
        </div>
        <!--end row-->

    </main>
    <!--end page main-->
    <script>
const remove = (num) =>{
    let r1= document.getElementById('first'+num);
    r1.remove();
    let r2= document.getElementById('second'+num);
    r2.remove();
    let r3= document.getElementById('third'+num);
    r3.remove();
    let r4= document.getElementById('btn'+num);
    r4.remove();
}


        var loadFile = function(event) {
            console.log(event);
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

      //Unit objects used by js this way
        let units = <?php echo $units; ?>;

        const add_consumption_btn = (selectTag) => {
        //  console.log(selectTag.value);
            let form = document.getElementById('add_more');  //select one div for append
            let item = JSON.parse(selectTag.value);  // array to object conversion sunig parse()
            console.log(item);

            let div1 = document.createElement('div');  //create 1 div tag
            div1.classList.add('col-12');  //create 1 class
            div1.classList.add('col-lg-4');
            div1.setAttribute('id','first'+item.id)  //for remove button
            let label1 = document.createElement('label');
            label1.classList.add('form-label');
            label1.innerText = 'Ingredient Name';
            let input1 = document.createElement('input');
            input1.classList.add('form-control');
            input1.setAttribute('value', item.name);
            input1.setAttribute('type', 'text');

            let input = document.createElement('input');
            input.setAttribute('name', 'ingredient[]'); //[2,3,4,5]
            input.setAttribute('value', item.id);
            input.setAttribute('type', 'text');
            input.style.display = 'none';

            div1.append(label1);
            div1.append(input1);
            div1.append(input);
            console.log(div1);

            // form append
            form.append(div1);


            let div2 = document.createElement('div');
            div2.classList.add('col-12');
            div2.classList.add('col-lg-3');
            div2.setAttribute('id','second'+item.id)
            let label2 = document.createElement('label');
            label2.classList.add('form-label');
            label2.innerText = 'Consumption';
            let input2 = document.createElement('input');
            input2.classList.add('form-control');
            input2.setAttribute('placeholder', 'Qunatity');
            input2.setAttribute('type', 'text');
            input2.setAttribute('name', 'consumption[]');
            div2.append(label2);
            div2.append(input2);
            console.log(div2);

            // form append
            form.append(div2);


            let div3 = document.createElement('div');
            div3.classList.add('col-12');
            div3.classList.add('col-lg-3');
            div3.setAttribute('id','third'+item.id)
            let label3 = document.createElement('label');
            label3.classList.add('form-label');
            label3.innerText = 'Unit';  //lever er inner text
            let select = document.createElement('select');
            select.classList.add('form-select');
            select.setAttribute('name', 'unit[]');
            units.forEach((unit) => {
                let option = document.createElement('option');
                option.innerText = unit.name.toUpperCase();
                option.setAttribute('value', unit.id);
                select.append(option);
            });
            div3.append(label3);
            div3.append(select);
            console.log(div3);

            // form append
            form.append(div3);
 //Create div 4

            let div4 = document.createElement('div');
            div4.classList.add('col-12');
            div4.classList.add('col-lg-2');
            let tag = document.createElement('div');
            let label = document.createElement('label');
            tag.innerText = 'Remove';
            tag.classList.add('btn');
            tag.classList.add('btn-danger');
            tag.style.marginTop ="30px";
            div4.append(label);
            div4.append(tag);
            div4.setAttribute('id','btn'+item.id);
           div4.setAttribute('onclick',"remove("+item.id+")");

            // form append
            form.append(div4);

        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\InventoryManagementSystem\resources\views/kitchen_staff/placeOrder.blade.php ENDPATH**/ ?>
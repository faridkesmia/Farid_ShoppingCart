

<?php $__env->startSection('content'); ?>
    <div class="container">
         <br>
            <br>
        <div class="row">
           
            <div class="col-12 alert alert-primary">
                <h3>Add A new Product to your Store</h3>
            </div>
        </div>

            


        <div class="row">
            <div class="col-12 ">
                <?php if($allCategory->isEmpty()): ?> 
                    <div class="alert alert-info py-5">There are NO Categories yet in your store so, please make one befor adding any product, <a class="" href="/add_Category"> Click: Add New ONE >>></a></div>
                <?php else: ?>

                    <div class="table-responcive">
                            <form action="<?php echo e(route('add_product_process')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scop="col">Product Name</th>
                                            <th scop="col">Image</th>
                                            <th scop="col">Price</th>
                                            <th scop="col">Description</th>
                                            <th scop="col">Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="name" placeholder="your Product" class="form-control" required></td>
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger my-3"><?php echo e($message); ?></span>    
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <td><input type="file" name="image" class="form-control"></td>
                                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <td><input type="number" name="price" min="1" class="form-control" value="1"></td>
                                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <td><input type="text" name="description" class="form-control"></td>
                                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger my-3"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <td><select name="categories_id" id="" class="form-control">
                                                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> 
                                            </td>
                                                
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr><td colspan="4"><button type="submit" class="btn btn-primary">Validing</button></td></tr>
                                    </tfoot>
                                </table>
                            </form>
                    </div>
                <?php endif; ?>
           
            </div>
        </div>
            
        <?php if(session('status')): ?>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert alert-success">
                        <strong><?php echo e(session('status')); ?></strong>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/Add_Product_Form.blade.php ENDPATH**/ ?>
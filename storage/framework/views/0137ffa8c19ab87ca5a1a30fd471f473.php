

<?php $__env->startSection('content'); ?>
    <div class="container">
         <br>
            <br>
        <div class="row">
           
            <div class="col-12 alert alert-info">
                <h3>Add A new Category to your Store</h3>
            </div>
        </div>

            


        <div class="row">
            <div class="col-12 ">
               <div class="table-responcive">
                    <form action="<?php echo e(route('registration-process')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scop="col">Category Name</th>
                                    <th scop="col">Category Image</th>
                                    <th scop="col">Category Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="name" placeholder="Category name" class="form-control" required></td>
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
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr><td colspan="4"><button type="submit" class="btn btn-primary">Validing</button></td></tr>
                            </tfoot>
                        </table>
                    </form>
               </div>
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
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/Add_Category_Form.blade.php ENDPATH**/ ?>
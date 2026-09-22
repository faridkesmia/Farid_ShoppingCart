

<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="margin-top:200px;margin-bottom:3000px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1  class="cart-title">The Future Shop - Enjoyableness of Shoppings in our Arcades</h1>
                    <p>This is Our First Project in Laraval Technology and php language </p>
                    <a href="AllCategories"><h3>Please, feel free to enter your shops</h3></a>
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
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/home.blade.php ENDPATH**/ ?>
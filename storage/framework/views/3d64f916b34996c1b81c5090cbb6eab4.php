

<?php $__env->startSection('content'); ?>
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
            <div class="card-body text-center">
                <h1 class="text-success">Payment Successful</h1>
                <p>Your Payment has been successfully proceeded!</p>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Back To Shop</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/success-paid.blade.php ENDPATH**/ ?>
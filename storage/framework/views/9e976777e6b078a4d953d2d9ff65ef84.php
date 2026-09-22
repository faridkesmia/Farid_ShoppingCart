

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row py-5">

        <?php if($allCategory->isEmpty()): ?> 
            <div class="alert alert-info py-5 text-center" >There are NO Categories yet in your store so Please <a class="" href="/add_Category">Add New Category</a></div>
        <?php else: ?>
            <div class="alert alert-info py-2 text-center" ><h1>Caregories </h1></div>

            <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col col-md-3 py-3">
                    <div class="card shadow">
                        <h5 class="text-center mt-3 md-3">
                            <?php echo e($item['name']); ?>

                            <a href="/products/<?php echo e($item['id']); ?>">
                                <img src="<?php echo e(asset('assets/images/') . '/'. $item['image']); ?>" class="rounded img-fluid  cart-img-top" alt="">
                                <h6><?php echo e($item['description']); ?></h6>
                            </a>
                        </h5>
                    </div>
                    <div class="cart-body">
                        
                    </div>
                </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/Categories_page.blade.php ENDPATH**/ ?>
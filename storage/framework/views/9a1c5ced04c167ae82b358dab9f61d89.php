

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row text-center">
        <?php if($products->isEmpty()): ?> 
                <div class="alert alert-info py-5">There are NO Products yet in your store so Please <a class="" href="/add_Product">Add New ONE</a></div>
        <?php else: ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6 my-3">
                    <form action="<?php echo e(route('add_to_cart_process')); ?>" method="POST">
                        <?php echo csrf_field(); ?> 
                        <div class="card shadow">
                            <div>
                                <img src="<?php echo e('/assets/images/' .  $product['image']); ?>" alt="" class="img-fluid  cart-img-top" height="512" width="512">
                            </div>
                        
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($product['name']); ?></h5>
                                <p class="card-text"><?php echo e($product['description']); ?></p>
                                <h5> 
                                    <small><s class="text-secondary">$<?php echo e($product['price'] + 10); ?></s></small>
                                    <span class="price">>$<?php echo e($product['price']); ?></span>
                                </h5>
                                <button type="submit" class="btn btn-warning my-3"><img src="<?php echo e(asset('svgs/shopping-cart.svg')); ?>"  id="icon" > Add To Cart</button>
                                <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
                            </div>
                        </div>
                    </form>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
     <?php if(session('success')): ?>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert alert-success">
                        <strong><?php echo e(session('success')); ?></strong>
                    </div>
                </div>
            </div>
        <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/Products_page.blade.php ENDPATH**/ ?>
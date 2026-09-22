

<?php $__env->startSection('content'); ?>
<div class="row my-5">
    <div class="col-md-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class="md-4">
                     <img src="<?php echo e(asset('svgs/shopping-basket.svg')); ?>" class="mx-3"  width="40" height="40" />Your Shopping Card
                </h2>
                <?php if(empty($cart)): ?>
                    <div class="text-center alert alert-info">Your Cart is Empty</div>
                    <a href="/AllCategories" class="btn btn-primary">Go Back To Shop</a>
                <?php else: ?> 
                    <div class="table-responcive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td scop="col">Product</td>
                                    <td scop="col">Quantity</td>
                                    <td scop="col">Price</td>
                                    <td scop="col">Sub Total</td>
                                    <td scop="col"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><img src="<?php echo e(asset('assets/images/' . $item['image'] )); ?>" alt="" width="60" height="60" class="rounded">&nbsp;&nbsp;<?php echo e($item['name']); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('update_qty')); ?>" method="POST" class="d-flex gap-2">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field("PUT"); ?>
                                                <input type="number" min="1" value="<?php echo e($item['qty']); ?>" class="form-control w-auto" name="qty">
                                                <button type="submit" class="btn btn-warning">UpDate Cart</button>
                                                <input type="hidden" name="product_id" value="<?php echo e($item['id']); ?>">
                                            </form>
                                        </td>
                                        <td>$ <?php echo e($item['price']); ?></td>
                                        <td>$ <?php echo e($item['price'] * $item['qty']); ?></td>

                                        <td>
                                            <form action="<?php echo e(route('delete_item')); ?>" method="POST" class="d-flex gap-2">
                                                <?php echo csrf_field(); ?> 
                                                <?php echo method_field("DELETE"); ?>
                                                <button type="submit" class="btn btn-danger btn-sm"><img src="<?php echo e(asset('svgs/delete-cross-svgrepo-com.svg')); ?>" id="icon"/></button>
                                                <input type="hidden" name="product_id" value="<?php echo e($item['id']); ?>">
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-end fw-bold fs-5">Total :</td>
                                    <td class="text-danger">$ <?php echo e(session()->get('CartItemTotal')); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <form action="<?php echo e(route('Clear_Cart')); ?>" method="POST" class="d-flex gap-2">
                            <?php echo csrf_field(); ?> 
                            <?php echo method_field("DELETE"); ?>
                            <button class="btn btn-danger" type="submit"><img src="<?php echo e(asset('svgs/trash-alt.svg')); ?>" id="icon"/> Clear Cart</button>
                        </form>
                        <a href="<?php echo e(route('order.pay')); ?>" class="btn btn-success">Proccess To Payment</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
        <?php if(session('success')): ?>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="alert alert-info">
                        <strong><?php echo e(session('success')); ?></strong>
                    </div>
                </div>
            </div>
        <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/cart.blade.php ENDPATH**/ ?>
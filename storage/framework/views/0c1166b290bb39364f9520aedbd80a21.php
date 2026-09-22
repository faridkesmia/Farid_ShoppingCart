<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    
    
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="/home"><img src="<?php echo e(asset('svgs/basket.svg')); ?>"  id="icon" />&nbsp; Shopping Cart
          
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <?php 
                    $cnt = 0; $Total = 0;
                    if (session()->has('cart')) {
                        $cnt = count(session()->get('cart')); $Total = session()->get('CartItemTotal');
                    }
                ?>
              <a class="nav-link active" aria-current="page" href="/cart">
                <h5 class="px-5 cart">
						        <img src="<?php echo e(asset('svgs/shopping-basket.svg')); ?>"  id="icon" />
                     In Your Cart <?php echo e($cnt); ?> items 🛒 Total : 
                      
						<span id="cart_count" class="text-warning bg-light">$ <?php echo e($Total); ?></span>
               


					</h5>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/AllCategories">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php if(Auth::check() && Auth::user()->role ==  'admin' ): ?> 
                 Hi <?php echo e(Auth::user()->name); ?> 
              </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="/add_Category">Add New Category</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="/add_Product">Add New Product</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider"><!-- _____________________________________-->
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?php echo e(Route('logout')); ?>">Log Out</a>
                      </li>
                
                  <?php elseif(Auth::check() && Auth::user()->role ==  'user' ): ?>
                    Hi  <?php echo e(Auth::user()->name); ?> 
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <li>
                        <a class="dropdown-item" href="#">....</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider"><!-- _____________________________________-->
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?php echo e(Route('logout')); ?>">Log Out</a>
                      </li>
                  <?php else: ?>
                   Hi guest
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                  
                      <li>
                        <a class="dropdown-item" href="<?php echo e(Route('Show_RegisterForm')); ?>">Register</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="<?php echo e(Route('login')); ?>">Login</a>
                      </li>
                  <?php endif; ?>
              </ul>
            </li>
          
        </div>
      </div>
    </nav>
   

<!-- ================================Star Content From heer ================= -->



                            <?php echo $__env->yieldContent('content'); ?>



<!-- ================================End Content  heer ===================== -->
	<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery-3.2.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
  </body>
</html>
<?php /**PATH E:\CoursLaraver\My_Project\resources\views/base_page.blade.php ENDPATH**/ ?>
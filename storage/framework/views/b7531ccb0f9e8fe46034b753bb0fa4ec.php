
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row my-5">
		<div class="col-12 col-lg-6">
			<h3>Register</h3>
			<p>Register today for better experience.</p>
			<form action="<?php echo e(route('Register.Proccess')); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label" for="name">Name</label>
					<div class="col-lg-9">
						<input type="name" placeholder="Your Name" class="form-control" name="name"  value="<?php echo e(old('name')); ?>"/>
						<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span role="alert" class="text-danger"><?php echo e($message); ?></span>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<br/>
					</div>
				</div>
				
				<div class="form-group row">
					<label class="col-lg-3 col-form-label" for="email">Email</label>
					<div class="col-lg-9">
						<input type="email" placeholder="Email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"/>
						<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span role="alert" class="text-danger"><?php echo e($message); ?></span>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>						
						<br/>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-3 col-form-label" for="password">	Password</label>
					<div class="col-lg-9">
						<input type="password" placeholder="Password" class="form-control" name="password"/>
						<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span role="alert" class="text-danger"><?php echo e($message); ?></span>
						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
				</div>
				<div class="form-group row my-3">
					<label class="col-lg-3 col-form-label" for="password_confirmation">Confirm pass</label>
					<div class="col-lg-9">
						<input type="password" placeholder="Password" class="form-control" name="password_confirmation" name="password_confirmation"/>
					</div>
				</div>
				
				<div class="form-group row justify-content-end">
					<div class="col-lg-9">
						<button class="btn btn-md btn-secondary" type="submit">Register</button>
					</div>
				</div>
			</form>															
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\CoursLaraver\My_Project\resources\views/Register_user.blade.php ENDPATH**/ ?>
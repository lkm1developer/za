<?php $__env->startSection('content'); ?>
<div class="container">
<div id="container_full">
				<div class="container">
					<div class="login-form">
							<h2>Login</h2>
							<form method="post" action ="<?php echo e(route('login')); ?>" class="login">
							<?php echo e(csrf_field()); ?>

							
                            
							
							
								<p class="form-row form-row-wide <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
									<label for="username">Email address <span class="required">*</span></label>
									<input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

									<?php if($errors->has('email')): ?>
										<span class="help-block">
											<strong><?php echo e($errors->first('email')); ?></strong>
										</span>
									<?php endif; ?>
									
								</p>
								
								
								
								<p class="form-row form-row-wide <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
									<label for="password">Password <span class="required">*</span></label>
									<input class="input-text" type="password" name="password" id="password" />
									<?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
									<?php endif; ?>
								</p>
								
								
								<p class="form-row">
									<input type="submit" class="button" name="login" value="Login" />
									<label for="rememberme" class="inline">
										<input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me	
									</label>
								</p>
								<p class="lost_password">
								 <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
									
								</p>
							</form>
					</div>
				</div>
			</div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('front.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
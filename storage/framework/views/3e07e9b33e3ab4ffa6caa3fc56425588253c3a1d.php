<?php $__env->startSection('content'); ?>

	<div class="container">	
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 datebook-padding-less pull-right">

		<div class="datebook-content">

			
<div class="panel panel-default datebook-no-border">
	<div class="panel-body">
				
<h1>Login to your account</h1>

<hr>

<div class="datebook-login-form-container">

	
	<form name="loginform" id="loginform" method="post" action ="<?php echo e(route('login')); ?>" class="login" class="form-horizontal">
							<?php echo e(csrf_field()); ?>

	

		<input name="testcookie" value="1" type="hidden">

		
		<div class=" row form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
									<div class="col-sm-3">
									<label for="user_login" class=" control-label">Email or Username</label>
									</div>
									<div class="col-sm-6">
										<input name="email" id="user_login" value="" class="form-control" type="email" value="<?php echo e(old('email')); ?>" required autofocus>
									</div>
									<?php if($errors->has('email')): ?>
										<span class="help-block">
											<strong><?php echo e($errors->first('email')); ?></strong>
										</span>
									<?php endif; ?>
									
		</div>
		
		<div class="row form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
									<div class="col-sm-3">
									<label for="user_pass" class=" control-label">Password</label>
									</div>
									<div class="col-sm-6">
										<input name="pwd" id="user_pass" value="" class="form-control" type="password" value="" required autofocus>
									</div>
									<?php if($errors->has('password')): ?>
										<span class="help-block">
											<strong><?php echo e($errors->first('password')); ?></strong>
										</span>
									<?php endif; ?>
									
		</div>
		
		
		
		
		
		
		

		

		<div class="form-group">
			<label class="col-sm-3 control-label"> </label>
			<div class="col-sm-6">
			
				<input name="submit" value="Login" class="btn btn-primary btn-lg" type="submit">
				<a href="<?php echo e(route('password.request')); ?>" class="pull-right">Forgot?</a> 
			</div>
		</div>

	</form>
</div>

</div>
</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 datebook-padding-less pull-left">
		<div class="datebook-leftsidebar">

			
<div class="panel panel-default datebook-no-border">
				<div class="panel-body text-center">
				
	<h2>Create profile</h2>

	<p>Join our community.</p>
	
	<p>Make new friends.</p>
	
	<p>Create your account with us! The registration is simple and it takes just few minutes!</p>
	
	<hr>
	
	<div class="text-center">

		<a href="<?php echo e(url('/')); ?>/register/" class="btn btn-primary">	Register</a>

	</div>

</div>
</div>

		</div>
	</div>
</div>
<!-- /content --></div>

<!-- footer -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('front.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
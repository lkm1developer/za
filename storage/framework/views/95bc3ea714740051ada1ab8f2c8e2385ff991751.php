

<?php $__env->startSection('content'); ?>
   
			<!-- Main content -->
			<div id="main-content">
				<div class="container">
						<div class="row">
						

						<!-- Start Loop Posts -->
							<div class="col-md-9 col-lg-9 col-sm-12">
							<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-md-6 col-lg-6 col-sm-12 blogloopa">
								<div id="" class="">
									<div class="post-standard post-meta-type">
										<figure>
											<img href="<?php echo e(url('posts/' . $post->slug)); ?>"src="<?php echo e($post->image); ?>" alt="">
										</figure>
									</div>
									
									<article>  
										<h3><a title="" href="<?php echo e(url('posts/' . $post->slug)); ?>"><?php echo e($post->title); ?> </a></h3>
										<ul class="blog-meta">
											
											<li><i class="fa fa-folder-open"></i> <a href="#" rel="category tag">Uncategorized</a></li>
											
										</ul>        
										<div class="except-post">
											<p><?php echo e($post->excerpt); ?>  </p>
										</div>
										<a title="READ MORE" class="blog-read ts-button" href="<?php echo e(url('posts/' . $post->slug)); ?>">read more</a>															  
										<div class="group-share pull-right">
										
											<i class="fa fa-comments-o"></i><a href="#">3 Comments</a>
										</div>    
									</article>
								</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
					<?php echo $__env->make('front/comments/sidebar', ['sidebar' => $sidebar,'sidebar' => $sidebar,], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		</div>
		</div>
		</div>
		<!-- End / content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('front.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
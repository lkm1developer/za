<?php $__env->startSection('content'); ?>


<!-- Main content -->
		<div class="ts-article main-content">
			<div class="container">
				<div class="row">									
					<div class="page-ct col-md-9 col-lg-9 col-sm-12">
						<div class="blog-single">
							 <div class="blog-item">
								<div class="post-standard post-meta-type">
									<figure>
										<img src="<?php echo e($post->image); ?>" alt="">
									</figure>
								</div>
								<div class="date-post">
									<span class="date"><?php echo e($post->created_at->formatLocalized('%d')); ?></span>
									<span class="month"><?php echo e($post->created_at->formatLocalized('%mm')); ?></span>
								</div>
								<article>
								
								
								
									<h3><a href="#" title="<?php echo e($post->title); ?>"><?php echo e($post->title); ?></a></h3>
									<ul class="blog-meta">
									
										<li><i class="fa fa-user"></i><a href="#"><?php echo e($post->user->name); ?></a> </li>
										<?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
											<li><i class="fa fa-folder-open"></i> <a href="<?php echo e(route('category', [$category->slug])); ?>" rel="category tag"><?php echo e($category->title); ?></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
										<li><i class="fa fa-comments-o"></i><a href="#"><?php echo e($post->valid_comments_count); ?> Comments</a></li>
									</ul>                               
									<div class="blog-content">
									<?php echo $post->body; ?>	
										
									</div>
									<!--End Blog Content-->
									<!--Blog Share-->
									<div class="group-share pull-right">
										<span>Share this</span>
										<a target="_blank" href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
										<a target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
										<a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
										<a target="_blank" href="https://pinterest.com"><i class="fa fa-pinterest"></i></a>
									</div>                                
								<!--Blog Share-->
								</article>
								<!-- Comment -->
								//
								

									<!-- commentlist -->
									<?php if($post->valid_comments_count): ?>
										<?php
											$level = 0;
										?>
										
											<?php echo $__env->make('front/comments/comments', ['comments' => $post->parentComments], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
										
										<?php if($post->parent_comments_count > config('app.numberParentComments')): ?>
											<p id="morebutton" class="text-center">
												<a id="nextcomments" href="<?php echo e(route('posts.comments', [$post->id, 1])); ?>" class="button"><?php echo app('translator')->getFromJson('More comments'); ?></a>
											</p>
												<p id="moreicon" class="text-center hide">
												<span class="fa fa-spinner fa-pulse fa-3x fa-fw"></span>
											</p>
										<?php endif; ?>
									<?php endif; ?>
								//
								
								                      
								</div>
						</div>
					</div>

					  <!-- Start right sidebar -->
						<?php echo $__env->make('front/comments/sidebar', ['sidebar' => $sidebar,'sidebar' => $sidebar,], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<!-- End right sidebar -->
				</div>
			</div>
		</div>
		<!-- End / content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('front.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
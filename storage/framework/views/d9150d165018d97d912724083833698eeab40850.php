		<!-- End Loop Posts -->

		<!-- Start right sidebar -->
		<aside id="sidebar-right" class="sidebar-right col-sm-12 col-md-3 col-xs-12">
			<div  id="search-2" class="module">
				<div class="blog-search">
					<form role="search" method="get" class="search-form" action="<?php echo e(route('posts.search')); ?>">
						<input type="search" class="search-field" placeholder="<?php echo app('translator')->getFromJson('Type Your Keywords'); ?>"  name="search" autocomplete="off" required>
						<span><button type="submit" id="submit_btn" class="search-submit"><i class="fa fa-search"></i></button></span>
					</form>
					
					
					
					
					
					
					
					
					
				</div>
			</div>		
			<div  id="recent-posts-2" class="module widget_recent_entries">		
				<h3 class="sidebar_title">Recent Posts</h3>		
				<ul>
				<?php $__currentLoopData = $sidebar['resent_post']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
					<li><a title="" href="<?php echo e(url('posts/' . $post->slug)); ?>"><?php echo e($post->title); ?> </a></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				</ul>
			</div>
			<div  id="recent-comments-2" class="module recent_comments">
				<h3 class="sidebar_title">Recent Comments</h3>
				<ul>
				<?php $__currentLoopData = $sidebar['resent_comment']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
					<li><a title="" href="<?php echo e(url('posts/' . $comment->post_id)); ?>"><?php echo e($comment->body); ?> </a></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
					
				</ul>
			</div>
			<div  id="archives-2" class="module">
			<h3 class="sidebar_title">Archives</h3>		
				<ul>
					<li class="cat-item"><a href='#'>January 2015</a></li>
				</ul>
			</div>
			<div  id="categories-2" class="module widget_categories"><h3 class="sidebar_title">Categories</h3>		
			<ul>
			<?php $__currentLoopData = $sidebar['cat']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="cat-item cat-item-2"><a href="<?php echo e(route('category', [$category->slug ])); ?>"><?php echo e($category->title); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
			</ul>
			</div>
			
			
			<div  id="meta-3" class="module widget_meta">
				<h3 class="sidebar_title">Tag</h3>			
				<ul>
				<?php $__currentLoopData = $sidebar['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="cat-item cat-item-2"><a href="<?php echo e(url('posts/tag/' . $tag->id)); ?>"><?php echo e($tag->tag); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
					
								
				</ul>
			</div>                       
		</aside>
												<!-- End right sidebar -->
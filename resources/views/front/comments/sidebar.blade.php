		<!-- End Loop Posts -->

		<!-- Start right sidebar -->
		<aside id="sidebar-right" class="sidebar-right col-sm-12 col-md-3 col-xs-12">
			<div  id="search-2" class="module">
				<div class="blog-search">
					<form role="search" method="get" class="search-form" action="{{ route('posts.search') }}">
						<input type="search" class="search-field" placeholder="@lang('Type Your Keywords')"  name="search" autocomplete="off" required>
						<span><button type="submit" id="submit_btn" class="search-submit"><i class="fa fa-search"></i></button></span>
					</form>
					
					
					
					
					
					
					
					
					
				</div>
			</div>		
			<div  id="recent-posts-2" class="module widget_recent_entries">		
				<h3 class="sidebar_title">Recent Posts</h3>		
				<ul>
				@foreach ($sidebar['resent_post'] as $post)
				
					<li><a title="" href="{{ url('posts/' . $post->slug) }}">{{ $post->title }} </a></li>
				@endforeach	
				</ul>
			</div>
			<div  id="recent-comments-2" class="module recent_comments">
				<h3 class="sidebar_title">Recent Comments</h3>
				<ul>
				@foreach ($sidebar['resent_comment'] as $comment)
				
					<li><a title="" href="{{ url('posts/' . $comment->post_id) }}">{{ $comment->body }} </a></li>
				@endforeach		
					
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
			@foreach ($sidebar['cat'] as $category)
							<li class="cat-item cat-item-2"><a href="{{ route('category', [$category->slug ]) }}">{{ $category->title }}</a></li>
						@endforeach
				
				
			</ul>
			</div>
			
			
			<div  id="meta-3" class="module widget_meta">
				<h3 class="sidebar_title">Tag</h3>			
				<ul>
				@foreach ($sidebar['tags'] as $tag)
							<li class="cat-item cat-item-2"><a href="{{ url('posts/tag/' . $tag->id) }}">{{ $tag->tag }}</a></li>
						@endforeach
				
					
								
				</ul>
			</div>                       
		</aside>
												<!-- End right sidebar -->
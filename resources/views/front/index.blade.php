@extends('front.header')

@section('content')
   
			<!-- Main content -->
			<div id="main-content">
				<div class="container">
						<div class="row">
						

						<!-- Start Loop Posts -->
							<div class="col-md-9 col-lg-9 col-sm-12">
							@foreach ($posts as $post)
								<div class="col-md-6 col-lg-6 col-sm-12 blogloopa">
								<div id="" class="">
									<div class="post-standard post-meta-type">
										<figure>
											<img href="{{ url('posts/' . $post->slug) }}"src="{{ $post->image }}" alt="">
										</figure>
									</div>
									
									<article>  
										<h3><a title="" href="{{ url('posts/' . $post->slug) }}">{{ $post->title }} </a></h3>
										<ul class="blog-meta">
											
											<li><i class="fa fa-folder-open"></i> <a href="#" rel="category tag">Uncategorized</a></li>
											
										</ul>        
										<div class="except-post">
											<p>{{ $post->excerpt }}  </p>
										</div>
										<a title="READ MORE" class="blog-read ts-button" href="{{ url('posts/' . $post->slug) }}">read more</a>															  
										<div class="group-share pull-right">
										
											<i class="fa fa-comments-o"></i><a href="#">3 Comments</a>
										</div>    
									</article>
								</div>
								</div>
								@endforeach
								</div>
					@include('front/comments/sidebar', ['sidebar' => $sidebar,'sidebar' => $sidebar,])

		</div>
		</div>
		</div>
		<!-- End / content -->
@endsection

@include('front.footer')
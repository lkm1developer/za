@extends('front.header')
@section('content')


<!-- Main content -->
		<div class="ts-article main-content">
			<div class="container">
				<div class="row">									
					<div class="page-ct col-md-9 col-lg-9 col-sm-12">
						<div class="blog-single">
							 <div class="blog-item">
								<div class="post-standard post-meta-type">
									<figure>
										<img src="{{ $post->image }}" alt="">
									</figure>
								</div>
								<div class="date-post">
									<span class="date">{{$post->created_at->formatLocalized('%d')}}</span>
									<span class="month">{{$post->created_at->formatLocalized('%mm')}}</span>
								</div>
								<article>
								
								
								
									<h3><a href="#" title="{{$post->title}}">{{$post->title}}</a></h3>
									<ul class="blog-meta">
									
										
										@foreach ($post->categories as $category)
											
											<li><i class="fa fa-folder-open"></i> <a href="{{ route('category', [$category->slug]) }}" rel="category tag">{{ $category->title }}</a></li>
										@endforeach
										
										<li><i class="fa fa-comments-o"></i><a href="#">{{ $post->valid_comments_count }} Comments</a></li>
									</ul>                               
									<div class="blog-content">
									{!! $post->body !!}	
										
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
									@if ($post->valid_comments_count)
										@php
											$level = 0;
										@endphp
										
											@include('front/comments/comments', ['comments' => $post->parentComments])
										
										@if ($post->parent_comments_count > config('app.numberParentComments'))
											<p id="morebutton" class="text-center">
												<a id="nextcomments" href="{{ route('posts.comments', [$post->id, 1]) }}" class="button">@lang('More comments')</a>
											</p>
												<p id="moreicon" class="text-center hide">
												<span class="fa fa-spinner fa-pulse fa-3x fa-fw"></span>
											</p>
										@endif
									@endif
								//
								
								                      
								</div>
						</div>
					</div>

					  <!-- Start right sidebar -->
						@include('front/comments/sidebar', ['sidebar' => $sidebar,'sidebar' => $sidebar,])
						<!-- End right sidebar -->
				</div>
			</div>
		</div>
		<!-- End / content -->
@endsection

@include('front.footer')
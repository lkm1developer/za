<!-- Comment -->
								<div id="comment-post" class="comment-post">
									
									<!-- List Comment -->
									
									<!--Comment Item-->
									<div class="media comment-item" id="comment-8">
										<!--Avatar-->
										<a class="pull-left" href="#">
											<!-- <img class="media-object" src="images/blog/img-9.jpg" alt=""> -->
											<img alt='' src='{{ Gravatar::get($comment->user->email) }}' class='avatar avatar-100 photo' height='100' width='100' />           
										</a>
										<!--End Avatar-->
										<!--Content-->
										<div class="media-body">
											<h5 class="media-heading">{{ $comment->user->name }}</h5>
											<div class="meta-comment">
												<span class="media-date">{{ ucfirst (utf8_encode ($comment->created_at->formatLocalized('%A %d %B %Y'))) }}</span>
											<a id="reply-create{{$comment->id}}"class='reply' href='#' ><i class=" fa fa-mail-reply"></i> Reply</a>    


                                        @if(Auth::check() && $level < config('app.commentsNestedLevel'))
												<span class="sep">/</span><a id="reply-create{!! $comment->id !!}" class="reply" href="#">@lang('Reply')</a>
												<form id="reply-form{{ $comment->id }}" method="post" action="{{ route('posts.comments.comments.store', [$post->id, $comment->id]) }}" class="reply-form hide">
													{{ csrf_field() }}
													<div class="form-field">
														<strong class="red"></strong>
														<textarea name="message{{ $comment->id }}" id="message{{ $comment->id }}" placeholder="@lang('Your Reply')" class="full-width" required></textarea>
													</div>
													<button id="reply-escape{{ $comment->id }}" class="btnescapereply">@lang('Escape')</button>
													<button type="submit" class="submit button-primary">@lang('Submit')</button>
												</form>
											@endif
											</div>
											<div class="comment-text">
												<p>{{ $comment->body }}</p>
											</div>
										</div>
										@if(Auth::check() && Auth::user()->name == $comment->user->name)
											<a href="#" class="deletecomment"><span class="fa fa-fw fa-trash fa-lg  pull-right" title="@lang('Delete comment')"></span></a>
											<form action="{{ route('front.comments.destroy', [$comment->id]) }}" method="POST" class="hide">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
											</form>
											<a id="comment-edit{!! $comment->id !!}" href="#" class="editcomment"><span class="fa fa-fw fa-pencil fa-lg pull-right" title="@lang('Edit comment')"></span></a>
										@endif
										
									</div>
									<!--End Comment Item-->
									
										


									

									<!-- List Comment -->
								</div>
								@unless ($comment->isLeaf())
									@php
										$level++;
									@endphp
									<div  class="children">
										@include('front/comments/comments', ['comments' => $comment->getImmediateDescendants()])
									</div>
								@endunless
								<!-- Comment -->
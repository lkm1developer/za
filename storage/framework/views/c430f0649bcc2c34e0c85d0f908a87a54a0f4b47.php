<!-- Comment -->
								<div id="comment-post" class="comment-post">
									
									<!-- List Comment -->
									
									<!--Comment Item-->
									<div class="media comment-item" id="comment-8">
										<!--Avatar-->
										<a class="pull-left" href="#">
											<!-- <img class="media-object" src="images/blog/img-9.jpg" alt=""> -->
											<img alt='' src='<?php echo e(Gravatar::get($comment->user->email)); ?>' class='avatar avatar-100 photo' height='100' width='100' />           
										</a>
										<!--End Avatar-->
										<!--Content-->
										<div class="media-body">
											<h5 class="media-heading"><?php echo e($comment->user->name); ?></h5>
											<div class="meta-comment">
												<span class="media-date"><?php echo e(ucfirst (utf8_encode ($comment->created_at->formatLocalized('%A %d %B %Y')))); ?></span>
											<a id="reply-create<?php echo e($comment->id); ?>"class='reply' href='#' ><i class=" fa fa-mail-reply"></i> Reply</a>    


                                        <?php if(Auth::check() && $level < config('app.commentsNestedLevel')): ?>
												<span class="sep">/</span><a id="reply-create<?php echo $comment->id; ?>" class="reply" href="#"><?php echo app('translator')->getFromJson('Reply'); ?></a>
												<form id="reply-form<?php echo e($comment->id); ?>" method="post" action="<?php echo e(route('posts.comments.comments.store', [$post->id, $comment->id])); ?>" class="reply-form hide">
													<?php echo e(csrf_field()); ?>

													<div class="form-field">
														<strong class="red"></strong>
														<textarea name="message<?php echo e($comment->id); ?>" id="message<?php echo e($comment->id); ?>" placeholder="<?php echo app('translator')->getFromJson('Your Reply'); ?>" class="full-width" required></textarea>
													</div>
													<button id="reply-escape<?php echo e($comment->id); ?>" class="btnescapereply"><?php echo app('translator')->getFromJson('Escape'); ?></button>
													<button type="submit" class="submit button-primary"><?php echo app('translator')->getFromJson('Submit'); ?></button>
												</form>
											<?php endif; ?>
											</div>
											<div class="comment-text">
												<p><?php echo e($comment->body); ?></p>
											</div>
										</div>
										<?php if(Auth::check() && Auth::user()->name == $comment->user->name): ?>
											<a href="#" class="deletecomment"><span class="fa fa-fw fa-trash fa-lg  pull-right" title="<?php echo app('translator')->getFromJson('Delete comment'); ?>"></span></a>
											<form action="<?php echo e(route('front.comments.destroy', [$comment->id])); ?>" method="POST" class="hide">
												<?php echo e(csrf_field()); ?>

												<?php echo e(method_field('DELETE')); ?>

											</form>
											<a id="comment-edit<?php echo $comment->id; ?>" href="#" class="editcomment"><span class="fa fa-fw fa-pencil fa-lg pull-right" title="<?php echo app('translator')->getFromJson('Edit comment'); ?>"></span></a>
										<?php endif; ?>
										
									</div>
									<!--End Comment Item-->
									
										


									

									<!-- List Comment -->
								</div>
								<?php if (! ($comment->isLeaf())): ?>
									<?php
										$level++;
									?>
									<div  class="children">
										<?php echo $__env->make('front/comments/comments', ['comments' => $comment->getImmediateDescendants()], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
									</div>
								<?php endif; ?>
								<!-- Comment -->
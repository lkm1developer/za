@extends('front.header')

@section('content')
<!-- content -->			
		<div id="container_full">
		
		<?php echo $page[0]['body'];?>
		
		</div>

	<!-- End / content -->

		<!-- Start Bottom contact -->
		<div class="ts-section-top-footer">    
				<div class="ts-top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 ts-contact-email-info contact-info">
								<span><i class="fa fa-envelope-o"></i></span>
								<a href="mailto:support@alaska.com">Email us</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 ts-contact-phone-info contact-info">
								<span><i class="fa fa-phone"></i></span>
								<p>1-1800-123-6789</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 ts-contact-livechat-info contact-info">
								<span><i class="fa fa-comment-o"></i></span>
								<a href="javascript:$zopim.livechat.window.show()">Live chat with us</a>
							</div>                   
						</div>                            
					</div>
				</div>
												
		</div>
		<!-- End Bottom contact -->	



@endsection
@include('front.footer')

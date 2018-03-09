@extends('front.header')

@section('content')
<link rel='stylesheet' id='ts-ecommerce-css'  href="{{ asset('css/ecommerce.css') }}" type='text/css' media='screen' />	
		<section id="banner">
            <div class="banner parallax-section">
            <div class="overlay"></div>
                <div class="banner-content text-center">
                    <h1>Checkout</h1>
                    <p></p>
					<div class="breadcrumbs"><a href="">Home</a> <i>/</i> <i>Checkout</i></div>
				</div>
            </div>
    </section>
    <!-- End Banner -->
	
    <!-- Start main content -->
    <div id="container_full">
        <div class="container">
            <div class="ecommerce">
				<div class="ecommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>
				<form name="checkout" method="post" class="checkout ecommerce-checkout" action="{{$ret['redirect_url']}}" enctype="multipart/form-data">{{ csrf_field() }}
				
				@foreach ($ret['parameters'] as $para)
					<input type="hidden" name="{{$para['key']}}"value="{{$para['value']}}"/>	
				@endforeach	
						
						
							
							
							<div id="payment" class="ecommerce-checkout-payment">
															
								<div class="form-row place-order">
																
									<input type="submit" class="button alt" name="ecommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order" />	
								</div>
								<div class="clear"></div>
							</div>
						
					</form>
				</div>
			</div>
		</div>
 		<!-- End / main content -->

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
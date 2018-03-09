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
				<form name="checkout" method="post" class="checkout ecommerce-checkout" action="{{URL::to('/')}}/plan/makeorder" enctype="multipart/form-data">{{ csrf_field() }}
					<input type="hidden" name="planid"value="{{$planid}}"/>	
					<input type="hidden" name="currency"value="USD"/>	

						
						<h3 id="order_review_heading">Your order</h3>
						<div id="order_review" class="ecommerce-checkout-review-order">
							<table class="shop_table ecommerce-checkout-review-order-table">
								<thead>
									<tr>
										<th class="product-name">Product</th>
										<th class="product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td class="product-name">
											Flying Ninja<strong class="product-quantity">&times; 1</strong>													
										</td>
										<td class="product-total">
											<span class="amount">&pound;12.00</span>						
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr class="cart-subtotal">
										<th>Cart Subtotal</th>
										<td><span class="amount">&pound;12.00</span></td>
									</tr>
									<tr class="shipping">
										<th>Shipping and Handling</th>
										<td>											
											Free Shipping<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping" class="shipping_method" />
										</td>
									</tr>
									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="amount">&pound;12.00</span></strong> </td>
									</tr>
								</tfoot>
							</table>
							Period
							<input type="number" name="periods" value=""> In Months
							<div id="payment" class="ecommerce-checkout-payment">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"  checked='checked' data-order_button_text="" />
										<label for="payment_method_bacs">
											Direct Bank Transfer 	
										</label>
										<div class="payment_box payment_method_bacs" >
											<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won&#8217;t be shipped until the funds have cleared in our account.</p>
										</div>
									</li>
									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="WorldPay"  data-order_button_text="" />
										<label for="payment_method_cheque">
											Credit/Debit card	
										</label>
									</li>
									<li class="payment_method_paypal">
										<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="PayPalDP"  data-order_button_text="Proceed to PayPal" />
										<label for="payment_method_paypal">
											PayPal <img src="images/AM_mc_vs_ms_ae_UK.png" alt="PayPal Acceptance Mark" />
											<a href="#" class="about_paypal" >What is PayPal?</a>	
											</label>
									</li>
								</ul>								
								<div class="form-row place-order">
									<noscript>
										Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.<br/>
										<input type="submit" class="button alt" name="ecommerce_checkout_update_totals" value="Update totals" />
									</noscript>								
									<input type="submit" class="button alt" name="ecommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order" />	
								</div>
								<div class="clear"></div>
							</div>
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
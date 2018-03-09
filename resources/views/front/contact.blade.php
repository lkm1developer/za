@extends('front.header')
@section('content')
<section id="banner">
				<div class="banner ts-contact-banner parallax-section">
					<div class="overlay"></div>
					<div class="banner-content text-center">
						<h1>Contact us</h1>
						<p>Start your project with us. We’d love to work with you</p>
						<div class="breadcrumbs"><a  href="#">Home</a> <i>/</i> <i>Contact us</i></div>
					</div>
				</div>
			</section>
			<!-- End Banner -->
<div id="container_full">				
				<div  class="ts-contact-support parallax-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="ts-wrapper">
									<div class="ts-contact-hotline text-center">
										<div class="table-cell">
											<span class="ts-contact-icon" ><i class="fa fa-support"></i></span>
											<div class="ts-contact-info">
												<h4>Support</h4>				
												<h3>(888) 755-7585</h3>		
												<a href="mailto:support@alaska.com">support@alaska.com</a>		
											</div>
										</div>
									</div>
								</div> 
							</div> 

							<div class="col-sm-4">
								<div class="ts-wrapper">
									<div class="ts-contact-hotline text-center">
										<div class="table-cell">
											<span class="ts-contact-icon"><i class="fa fa-phone"></i></span>
											<div class="ts-contact-info">
												<h4>Billing</h4>				
												<h3>(888) 755-7585</h3>		
												<a href="mailto:billing@alaska.com">billing@alaska.com</a>		
											</div>
										</div>
									</div>
								</div> 
							</div> 

							<div class="col-sm-4">
								<div class="ts-wrapper">
									<div class="ts-contact-hotline text-center">
										<div class="table-cell">
											<span class="ts-contact-icon"><i class="fa fa-wechat"></i></span>
											<div class="ts-contact-info">
												<h4>Live chat with us</h4>				
												<h3>(888) 755-7585</h3>		
												<a href="#">Click to chat</a>		
											</div>
										</div>
									</div>
								</div> 
							</div> 
						</div>
					</div>
				</div>
		
				<div  class="ts-contact-form parallax-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-9">
								<div class="ts-wrapper">
									<div class="ts-section-title  text-left">
										<h3>Get in touch with us!</h3>
									</div>
									 @if (session('ok'))
										 
										@component('front.components.alert')
											@slot('type')
												success
											@endslot
											{!! session('ok') !!}
										@endcomponent
									@endif
									<div class="ts-wrapper">
										<p>Appropriately grow multifunctional infomediaries vis-a-vis highly efficient leadership. Professionally supply user-centric imperatives for parallel web-readiness. Competently orchestrate excellent markets through professional experiences.</p>
									</div> 
								
									<div class="screen-reader-response"></div>
									<form class="wpcf7-form" method="post" action="{{ route('contacts.store') }}" >
										 {{ csrf_field() }}
										 <div class="row">
										  @if ($errors->has('name'))
												@component('front.components.error')
													{{ $errors->first('name') }}
												@endcomponent
											@endif 
											<div class="col-sm-6 col-xs-12">
												<span class="name"><input type="text" name="name" required="true" value="" size="40"  placeholder="Name*" /></span><br />
												<span class=" subject"><input type="text" name="subject" value="" size="40"  placeholder="Subject" /></span>
											</div>
											<div class="col-sm-6 col-xs-12">
											@if ($errors->has('email'))
												@component('front.components.error')
													{{ $errors->first('email') }}
												@endcomponent
											@endif 
												<span class=" email"><input type="email" name="email" value="" size="40" required="true" placeholder="Email*" /></span><br />
												<span class=" telephone"><input type="text" name="telephone" value="" size="40"   placeholder="Telephone" /></span>
											</div>
										</div>
										<p>
										@if ($errors->has('message'))
											@component('front.components.error')
												{{ $errors->first('message') }}
											@endcomponent
										@endif 
											<span class=" comment"><textarea name="message" cols="40" rows="10"   required="true" placeholder="Comment"></textarea></span><br />
											<input type="submit" value="Submit" />
										</p>
										<div id="ts-message"></div>
									</form>
								</div> 
							</div> 

							<div class="col-sm-3">
								<div class="ts-wrapper">
									<div class="ts-section-title text-left">
										<h3>Information</h3>
									</div>
									<div class="ts-contact-infomation left ts-contact-sidebar1">
										<h4>Head Office</h4>				
										<p>30 South Park Avenue, CA 94108 San Francisco USA</p>		
										<span>Email</span>: <a href="mailto:http://support@alaska.com">support@alaska.com</a><br />
										<span>Phone</span>: (888) 755-7585<br />
										<span>Fax</span>: (888) 755-7585<br />	
									</div>


									<div class="ts-contact-infomation left ts-contact-sidebar1">
										<h4>Second Office</h4>				
										<p>30 South Park Avenue, CA 94108 San Francisco USA</p>		
										<span>Email</span>: <a href="mailto:http://support@alaska.com">support@alaska.com</a><br />
										<span>Phone</span>: (888) 755-7585<br />
										<span>Fax</span>: (888) 755-7585<br />	
									</div>
								</div> 
							</div> 
						</div>
					</div>
				</div>
				
				<div  class="ts-contact-padding parallax-section">
		</div>
		</div>





      
@endsection

@include('front.footer')
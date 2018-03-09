
     @section('footer')

<footer>
	<div id="datebook-footer">
		<div class="datebook-footer-above">
			<div class="container">

				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="dropup">
							<div class="navbar-user-panel">
								<div class="navbar-default">
									<div class="navbar-header">

										<button data-target="#footer-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

									</div>

									<div id="footer-navbar-collapse" class="navbar-collapse collapse">

										<ul id="menu-footer" class="datebook-footer-menu nav navbar-nav"><li id="menu-item-408" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-408"><a target="_blank" href="{{ url('/') }}/?action=demoadmin">Demo Admin</a></li>
<li id="menu-item-352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-352"><a href="{{ url('/') }}/">Home</a></li>
<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266"><a href="{{ url('/') }}/blog/">Blog</a></li>
<li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="{{ url('/') }}/terms/">Terms and Conditions</a></li>
<li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="{{ url('/') }}/contact/">Contact Us</a></li>
</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="datebook-footer">
			<div class="container">
				<div class="row">

					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

						
<ul class="list-inline datebook-footer-pages">
						
			
		
			<li><a href="{{ url('/') }}/register/">Register</a></li>
			
		
			<li><a href="{{ url('/') }}/login/">Login</a></li>
			
		

</ul>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

						
					</div>

				</div>

				<div class="row">

					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">

						
<p class="datebook-footer-copyright">

2018 © DateBook 2.0.1 - Dating WordPress Theme. All rights reserved.
</p>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

						
			<div class="btn-group bootstrap-select form-control"><select id="datebook-language" class="selectpicker form-control" name="datebook_language" tabindex="-98">

				
					<option value="en_US" selected="selected">English</option>

				
			</select></div>

			
					</div>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- /footer -->

</div>

<script type="text/javascript" src="{{ asset('/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/icheck.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/lightbox.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/ion.rangeSlider.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.form.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/retina.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/datebook-script-plugin.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/datebook-script-theme.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/wp-embed.js')}}"></script>


</body>
</body>
</html>
@endsection('footer')
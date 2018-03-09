<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" />
	<link rel='stylesheet' id='config-css'  href="<?php echo e(asset('css/ts-config.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='mailchimp-checkbox-css'  href="<?php echo e(asset('css/checkbox.min.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome.min-css'  href="<?php echo e(asset('css/font-awesome.min.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='jquery.flipcountdown-css'  href="<?php echo e(asset('css/jquery.flipcountdown.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='jquery-ui-css'  href="<?php echo e(asset('css/jquery-ui.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap.min-css'  href="<?php echo e(asset('css/bootstrap.min.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='owl.carousel-css'  href="<?php echo e(asset('css/owl.carousel.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='easy-responsive-tabs-css'  href="<?php echo e(asset('css/easy-responsive-tabs.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='jquery.circliful-css'  href="<?php echo e(asset('css/jquery.circliful.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='cubeportfolio.min-css'  href="<?php echo e(asset('css/cubeportfolio.min.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='megamenu-css'  href="<?php echo e(asset('css/megamenu.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='styles-css'  href="<?php echo e(asset('css/styles.css')); ?>" type='text/css' media='all' />
	<link rel="stylesheet" id="custom-css" href="<?php echo e(asset('css/mobile.css')); ?>" type="text/css" media="all" />
	<!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/vc-ie8.css" media="screen"><![endif]-->
	<link rel='stylesheet'   href="<?php echo e(asset('css/layout.css')); ?>" type='text/css' media='all' />
	<link rel='stylesheet' id='redux-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C500%2C400%2C100&#038;ver=1428634381' type='text/css' media='all' />

</head>
<body>
    <!--Wrapper-->
    <div id="wrapper">
	<!-- Start header -->
		<header>
				<div class="top-header">
					<div class="container">
						<div class="row">
							<div class="top-social col-sm-4">
								<div class="social-top">
									<ul class="social">
										  <li class="bounceIn animated"><a target="_blank" href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
										  <li class="bounceIn animated"><a target="_blank" href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
										  <li class="bounceIn animated"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										  <li class="bounceIn animated"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
								</div>                  
							</div>
							<div class="top-info col-sm-8 pull-right">
								<div id="flags_language_selector"></div >
								<ul>
									<li><a href="#"><i class="fa fa-exclamation-circle"></i>Support</a></li>
									<li><a href="#"><i class="fa fa-envelope"></i>Email Us</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>1234-567-89000</a></li>
								</ul>                   
							</div>
						</div>
					</div>
				</div>
				<a class="toggle-bar-btn fade-toggle hidden-phone" href="#"><span class="ts-infobar infobar-up"></span></a>
				<div class="main-header">
					<div class="container">
						<div class="logo">
						 
							<h1><a href="<?php echo e(url('/')); ?>" class="ariva_logo"><img src="images/logo.png"  alt="<?php echo e(config('app.name', 'Laravel')); ?>"></a></h1>
						</div>
						<a href="#" class="mobile-navigation"><i class="fa fa-bars"></i></a>
						<div class="pull-right ts-mainmenu">
							<nav class="main-menu nav-menu">
								<ul id="menu-main-menu" class="menu-nav list-inline ts-response-simple ts-response-stack ts-effect-slide-top">
									<li class="menu-item  current-menu-parent ">
										<a title="Home" href="<?php echo e(url('/')); ?>" >Home</a>
										
									</li>
									<li class="menu-item  ">
										<a title="contact" href="<?php echo e(url('contacts')); ?>/create" >Contact us</a>
										
									</li>
									<li class="menu-item  ">
										<a title="contact" href="<?php echo e(url('contacts')); ?>/create" >About Us</a>
										
									</li>
									
									
									
									<li class="menu-item  menu-item-has-children  dropdown">
										<a title="Shop" href="#" >Shop</a>
										<ul role="menu" class=" dropdown-menu">
											<li  class="menu-item"><a title="Shop" href="shop.html">Shop</a></li>
											<li class="menu-item "><a title="Cart" href="cart.html">Cart</a></li>
											<li class="menu-item "><a title="Checkout" href="checkout.html">Checkout</a></li>
											<li class="menu-item "><a title="My Account" href="my-account.html">My Account</a></li>
										</ul>
									</li>
									<li class="menu-item">
										<a title="Blog" href="<?php echo e(url('/blog')); ?>">Blog</a>
									</li>	
									<li class="mini-shoping-cart-wraper menu-item menu-item-has-children  dropdown">      
									    <a title="View your shopping cart" href="#" class="cart-contents">
										  <i class="fa fa-shopping-cart"></i>
										  <span class="cart-number-items">0</span>
									    </a>
									    <div class="dropdown-menu mini-shoping-cart">
										    <div class="widget_shopping_cart_content">
												<ul class="cart_list product_list_widget ">
													<li class="empty">No products in the cart.</li>
												</ul>
											</div>
									    </div>
									</li>
								</ul>
								<?php if(auth()->guard()->guest()): ?>
								<div class="navbar-form"><a href="<?php echo e(url('/register')); ?>" class="ts-bt bt-login"><i class="fa fa-user"></i>SIGN UP</a>
								</div><div class="navbar-form"><a href="<?php echo e(url('/login')); ?>" class="ts-bt bt-login"><i class="fa fa-user"></i>Login</a></div>
								<?php else: ?>
								<div class="navbar-form"><a href="<?php echo e(url('/myaccount')); ?>" class="ts-bt bt-login"><i class="fa fa-user"></i><?php echo e(Auth::user()->name); ?></a></div>	
								
								<?php endif; ?> 	
                                                  										
							</nav>
						</div>
					</div>        
				</div>
		</header> 
		<!-- End header -->

        <?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->yieldContent('footer'); ?>
		
    
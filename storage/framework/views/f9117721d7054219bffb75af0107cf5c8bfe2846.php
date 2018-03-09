<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US"><!--<![endif]--><head>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="HandheldFriendly" content="True">
<style>
#datebook-header {    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.4) 100%) repeat scroll 0 0, rgba(0, 0, 0, 0) url(<?php echo e(url('/')); ?>/images/welcome-city.jpg) no-repeat scroll left center / cover;
}
</style>
<title>Contact Us – DateBook</title>

		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"wpemoji":"http:\/\/http://localhost\/date\/public\/js\/wp-emoji.js","twemoji":"http:\/\/http://localhost\/date/public\/js\/twemoji.js"}};
			( function( window, document, settings ) {
	var src, ready, ii, tests;

	/*
	 * Create a canvas element for testing native browser support
	 * of emoji.
	 */
	var canvas = document.createElement( 'canvas' );
	var context = canvas.getContext && canvas.getContext( '2d' );

	/**
	 * Check if two sets of Emoji characters render the same.
	 *
	 * @param  set1 array Set of Emoji characters.
	 * @param  set2 array Set of Emoji characters.
	 * @returns  {boolean} True if the two sets render the same.
	 */
	function emojiSetsRenderIdentically( set1, set2 ) {
		var stringFromCharCode = String.fromCharCode;

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set1 ), 0, 0 );
		var rendered1 = canvas.toDataURL();

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set2 ), 0, 0 );
		var rendered2 = canvas.toDataURL();

		return rendered1 === rendered2;
	}

	/**
	 * Detect if the browser supports rendering emoji or flag emoji. Flag emoji are a single glyph
	 * made of two characters, so some browsers (notably, Firefox OS X) don't support them.
	 *
	 * @since  4.2.0
	 *
	 * @param  type {String} Whether to test for support of "flag" or "emoji".
	 * @return  {Boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var isIdentical;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		switch ( type ) {
			case 'flag':
				/*
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 55356, 56826, 55356, 56819 ],
					[ 55356, 56826, 8203, 55356, 56819 ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather an five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447 ],
					[ 55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447 ]
				);

				return ! isIdentical;
			case 'emoji':
				/*
				 * Emoji allows people of all gender levitate and so does WordPress.
				 *
				 * To test for support, try to render a new emoji (woman in business suit levitating),
				 * then compare it to how it would look if the browser doesn't render it correctly
				 * (person in business suit levitating + female sign).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[55357, 56692, 8205, 9792, 65039],
					[55357, 56692, 8203, 9792, 65039]
				);
				return ! isIdentical;
		}

		return false;
	}

	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.defer = script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	tests = Array( 'flag', 'emoji' );

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	for( ii = 0; ii < tests.length; ii++ ) {
		settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

		settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

		if ( 'flag' !== tests[ ii ] ) {
			settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
		}
	}

	settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	if ( ! settings.supports.everything ) {
		ready = function() {
			settings.readyCallback();
		};

		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
		</script><script src="<?php echo e(asset('/js/twemoji.js')); ?>" type="text/javascript" defer=""></script>
		<script src="<?php echo e(asset('/js/wp-emoji.js')); ?>" type="text/javascript" defer=""></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="bootstrap-css" href="<?php echo e(asset('/css/bootstrap.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="bootflat-css" href="<?php echo e(asset('/css/bootflat.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-select-css" href="<?php echo e(asset('/css/bootstrap-select.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="rangeSlider-css" href="<?php echo e(asset('/css/ion.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="lightbox-css" href="<?php echo e(asset('/css/lightbox.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="pikaday-css" href="<?php echo e(asset('/css/pikaday.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="datebook-social-buttons-css" href="<?php echo e(asset('/css/datebook-social-buttons-plugin.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="datebook-style-theme-css" href="<?php echo e(asset('/css/style.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="datebook-style-plugin-css" href="<?php echo e(asset('/css/datebook-style-plugin.css')); ?>" type="text/css" media="all">
<style id="datebook-style-plugin-inline-css" type="text/css">

				
</style>
<!--[if lt IE 9]>
<link rel='stylesheet' id='datebook-ie-plugin-css'  href='h<?php echo e(asset('/css/datebook-ie-plugin.css')); ?>' type='text/css' media='all' />
<![endif]-->
<link rel="stylesheet" id="font-awesome-css" href="<?php echo e(asset('/css/font-awesome.css')); ?>" type="text/css" media="all">
<!--[if lt IE 9]>
<link rel='stylesheet' id='datebook-ie-theme-css'  href='<?php echo e(asset('/css/datebook-ie-theme.css')); ?>' type='text/css' media='all' />
<![endif]-->
<script type="text/javascript" src="<?php echo e(asset('/js/jquery.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/jquery-migrate.js')); ?>"></script>
<script type="text/javascript">
/* <![CDATA[ */
var datebookajaxlocal = {"ajax_url":"http:\/\/www.pagick.net\/demo\/datebook"};
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo e(asset('/js/datebook-ajax-script.js')); ?>"></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='<?php echo e(asset('/js/html5shiv.min.js')); ?>'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='<?php echo e(asset('/js/respond.min.js')); ?>'></script>
<![endif]-->

		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		
</head>
<body class="page-template page-template-page-datebook page-template-page-datebook-php page page-id-7 page-parent">

	<div class="datebook-wrapper post-7 page type-page status-publish hentry">

	

<div id="datebook-header" class="datebook-front-container">

	<div class="datebook-front-view">
	
			
<div class="datebook-top-menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
				<div class="navbar-user-panel">
					<div class="navbar-inverse">
								
						<ul id="menu-top" class="nav navbar-nav datebook-top-menu-right"><li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="<?php echo e(url('/')); ?>/contact/">Contact Us</a></li>
</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

	
<div class="navbar navbar-inverse datebook-primary-menu">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 datebook-logo-block text-center">
					
				<a class="datebook-logo" href="<?php echo e(url('/')); ?>/" title="DateBook - Dating WordPress Theme"><img src="<?php echo e(asset('/images/logo.png')); ?>" alt="DateBook"></a>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="navbar-user-panel">
					<div class="navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse"> <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						</div>
						<div class="navbar-collapse collapse" id="main-navbar-collapse">

							<ul id="menu-primary" class="nav navbar-nav datebook-primary-menu"><li id="menu-item-27" class="fa fa-home menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-27"><a href="<?php echo e(url('/')); ?>/">Home</a></li>
<li id="menu-item-28" class="fa fa-search menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="<?php echo e(url('/')); ?>/profilesearch/">Search</a></li>
<li id="menu-item-30" class="fa fa-bullhorn menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="<?php echo e(url('/')); ?>/classifieds/">Classifieds</a></li>
<li id="menu-item-29" class="fa fa-map-marker menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="<?php echo e(url('/')); ?>/tours/">Travellers</a></li>
</ul><ul id="menu-primary-right" class="nav navbar-nav datebook-primary-menu-right"><li id="menu-item-409" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-409"><a target="_blank" href="<?php echo e(url('/')); ?>/?action=demoadmin">Demo Admin</a></li>
<li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="<?php echo e(url('/')); ?>/blog/">Blog</a></li>
</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		


<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 datebook-no-border datebook-padding-less">
		
				
			<div class="navbar-user-panel datebook-header-user-panel">
				<div class="navbar navbar-default datebook-no-border tooltip-demo">

				
					<ul class="nav navbar-nav datebook-register-links">

						<li><a href="<?php echo e(url('/')); ?>/profilesearch/" title=""><span class="badge badge-info">298</span> registered members</a></li>

					</ul>

						
					<ul class="nav navbar-nav datebook-register-links">

					
					</ul>



					
					<ul class="nav navbar-nav navbar-right datebook-register-links">

								
						<li><a href="<?php echo e(url('/')); ?>/register/"><i class="fa fa-check-circle fa-lg text-yellow"></i> Register</a></li>
			
					
						<li><a href="<?php echo e(url('/')); ?>/login/"><i class="fa fa-sign-in fa-lg text-yellow"></i> Login</a></li>

					</ul>

					

					
				</div>
			</div>


		</div>
	</div>
</div>


</div>


</div>



        <?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->yieldContent('footer'); ?>
		
    
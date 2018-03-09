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
#datebook-header {    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.4) 100%) repeat scroll 0 0, rgba(0, 0, 0, 0) url({{ url('/') }}/images/welcome-city.jpg) no-repeat scroll left center / cover;
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
	 * @param set1 array Set of Emoji characters.
	 * @param set2 array Set of Emoji characters.
	 * @returns {boolean} True if the two sets render the same.
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
	 * @since 4.2.0
	 *
	 * @param type {String} Whether to test for support of "flag" or "emoji".
	 * @return {Boolean} True if the browser can render emoji, false if it cannot.
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
		</script><script src="{{ asset('/js/twemoji.js')}}" type="text/javascript" defer=""></script>
		<script src="{{ asset('/js/wp-emoji.js')}}" type="text/javascript" defer=""></script>
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
<link rel="stylesheet" id="bootstrap-css" href="{{ asset('/css/bootstrap.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="bootflat-css" href="{{ asset('/css/bootflat.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-select-css" href="{{ asset('/css/bootstrap-select.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="rangeSlider-css" href="{{ asset('/css/ion.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="lightbox-css" href="{{ asset('/css/lightbox.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="pikaday-css" href="{{ asset('/css/pikaday.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="datebook-social-buttons-css" href="{{ asset('/css/datebook-social-buttons-plugin.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="datebook-style-theme-css" href="{{ asset('/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" id="datebook-style-plugin-css" href="{{ asset('/css/datebook-style-plugin.css')}}" type="text/css" media="all">
<style id="datebook-style-plugin-inline-css" type="text/css">

				
</style>
<!--[if lt IE 9]>
<link rel='stylesheet' id='datebook-ie-plugin-css'  href='h{{ asset('/css/datebook-ie-plugin.css')}}' type='text/css' media='all' />
<![endif]-->
<link rel="stylesheet" id="font-awesome-css" href="{{ asset('/css/font-awesome.css')}}" type="text/css" media="all">
<!--[if lt IE 9]>
<link rel='stylesheet' id='datebook-ie-theme-css'  href='{{ asset('/css/datebook-ie-theme.css')}}' type='text/css' media='all' />
<![endif]-->
<script type="text/javascript" src="{{ asset('/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery-migrate.js')}}"></script>
<script type="text/javascript">
/* <![CDATA[ */
var datebookajaxlocal = {"ajax_url":"http:\/\/www.pagick.net\/demo\/datebook"};
/* ]]> */
</script>
<script type="text/javascript" src="{{ asset('/js/datebook-ajax-script.js')}}"></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='{{ asset('/js/html5shiv.min.js')}}'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='{{ asset('/js/respond.min.js')}}'></script>
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
								
						<ul id="menu-top" class="nav navbar-nav datebook-top-menu-right"><li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="{{ url('/') }}/contact/">Contact Us</a></li>
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
					
				<a class="datebook-logo" href="{{ url('/') }}/" title="DateBook - Dating WordPress Theme"><img src="{{ asset('/images/logo.png')}}" alt="DateBook"></a>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="navbar-user-panel">
					<div class="navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse"> <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						</div>
						<div class="navbar-collapse collapse" id="main-navbar-collapse">

							<ul id="menu-primary" class="nav navbar-nav datebook-primary-menu"><li id="menu-item-27" class="fa fa-home menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-27"><a href="{{ url('/') }}/">Home</a></li>
<li id="menu-item-28" class="fa fa-search menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="{{ url('/') }}/profilesearch/">Search</a></li>
<li id="menu-item-30" class="fa fa-bullhorn menu-item menu-item-type-post_type menu-item-object-page menu-item-30"><a href="{{ url('/') }}/classifieds/">Classifieds</a></li>
<li id="menu-item-29" class="fa fa-map-marker menu-item menu-item-type-post_type menu-item-object-page menu-item-29"><a href="{{ url('/') }}/tours/">Travellers</a></li>
</ul><ul id="menu-primary-right" class="nav navbar-nav datebook-primary-menu-right"><li id="menu-item-409" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-409"><a target="_blank" href="{{ url('/') }}/?action=demoadmin">Demo Admin</a></li>
<li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="{{ url('/') }}/blog/">Blog</a></li>
</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		


<div class="container" style="background: url(

	{{ url('/') }}/images/welcome-bg.png
	) no-repeat left bottom;">

	<div class="row">
	
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-right">

			
		
			<div class="navbar-user-panel datebook-header-user-panel">
				<div class="navbar navbar-default datebook-no-border tooltip-demo">

				
					<ul class="nav navbar-nav datebook-register-links">

						<li><a href="{{ url('/') }}/profilesearch/" title=""><span class="badge badge-info">299</span> registered members</a></li>

					</ul>

						
					<ul class="nav navbar-nav datebook-register-links">

					
					</ul>



					
					<ul class="nav navbar-nav navbar-right datebook-register-links">

								
						<li><a href="{{ url('/') }}/register/"><i class="fa fa-check-circle fa-lg text-yellow"></i> Register</a></li>
			
					
						<li><a href="{{ url('/') }}/login/"><i class="fa fa-sign-in fa-lg text-yellow"></i> Login</a></li>

					</ul>

					

					
				</div>
			</div>


			<div class="datebook-front-search-panel">

				
					<h1>Meet people in your city!</h1>

				
				
<div class="panel panel-default datebook-no-border  datebook-front-search">

	
	<div class="panel-body">

		<form action="{{ url('/') }}/profilesearch/" method="post" class="form-inline">

			<input name="action" value="searchprofiles" type="hidden">

			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div class="row">
					<div class="form-group">

						<label class="datebook-label-title">I am looking for</label>

						<div class="clear"></div>

						<div class="btn-group btn-group-justified datebook-gender-input" data-toggle="buttons">

							<label class="btn btn-default datebook-search-btn active" title="Woman"><img src="{{ url('/') }}/images/icon_female_search.png" alt=""> <input name="gender" class="datebook-gender" value="1" checked="" type="radio"> Woman</label><label class="btn btn-default datebook-search-btn" title="Man"><img src="{{ url('/') }}/images/icon_male_search.png" alt=""> <input name="gender" class="datebook-gender" value="2" type="radio"> Man</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="row">
					<div id="datebook-agebox" class="form-group datebook-age-form">

						<label for="datebook-agerange" class="datebook-label-title">in age of</label>

						
						<span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="display: none;">0</span><span class="irs-max" style="display: none;">1</span><span class="irs-from" style="display: none;">0</span><span class="irs-to" style="display: none;">0</span><span class="irs-single" style="display: none;">0</span></span><span class="irs-grid"></span><span class="irs-bar"></span><span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-slider from"></span><span class="irs-slider to"></span></span><input id="datebook-agerange" name="agerange" value="18 - 80" class="form-control datebook-input-age datebook-search-btn" readonly="" type="text">

					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="row">
					<div class="form-group">

						<label for="datebook-location" class="datebook-label-title">from</label>

						<div class="clear"></div>

						<div class="input-group">

							
							<input id="datebook-location" name="countrycity" readonly="readonly" aria-label="Country" class="form-control datebook-search-btn" value="Country" type="text">
							<input id="datebook-locationcountry" name="country" value="" type="hidden">
							<input id="datebook-locationregion" name="region" value="" type="hidden">
							<input id="datebook-locationcity" name="city" value="" type="hidden">

							<div class="input-group-btn">

								<button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default datebook-search-btn dropdown dropdown-toggle" type="button"><span class="caret"></span></button>

								
							</div>

							
<div class="datebook-countries-overlay">
	<div class="datebook-dropdowncountry">
	
		<a class="btn btn-default btn-close-country" href="#" onclick="return false;">Close</a>

		<div class="datebook-dropdownbox">
			<div class="datebook-countrybox">

				<h3>Select country</h3><div class="row datebook-countrymenu"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="1" class="datebook-cat-item datebook-countryid" title="Afghanistan" href="#">Afghanistan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="2" class="datebook-cat-item datebook-countryid" title="Aland Islands" href="#">Aland Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="3" class="datebook-cat-item datebook-countryid" title="Albania" href="#">Albania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="4" class="datebook-cat-item datebook-countryid" title="Algeria" href="#">Algeria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="5" class="datebook-cat-item datebook-countryid" title="American Samoa" href="#">American Samoa</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="6" class="datebook-cat-item datebook-countryid" title="Andorra" href="#">Andorra</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="7" class="datebook-cat-item datebook-countryid" title="Angola" href="#">Angola</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="8" class="datebook-cat-item datebook-countryid" title="Anguilla" href="#">Anguilla</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="9" class="datebook-cat-item datebook-countryid" title="Antigua and Barbuda" href="#">Antigua and Barbuda</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="10" class="datebook-cat-item datebook-countryid" title="Argentina" href="#">Argentina</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="11" class="datebook-cat-item datebook-countryid" title="Armenia" href="#">Armenia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="12" class="datebook-cat-item datebook-countryid" title="Aruba" href="#">Aruba</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="13" class="datebook-cat-item datebook-countryid" title="Australia" href="#">Australia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="14" class="datebook-cat-item datebook-countryid" title="Austria" href="#">Austria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="15" class="datebook-cat-item datebook-countryid" title="Azerbaijan" href="#">Azerbaijan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="16" class="datebook-cat-item datebook-countryid" title="Bahamas" href="#">Bahamas</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="17" class="datebook-cat-item datebook-countryid" title="Bahrain" href="#">Bahrain</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="18" class="datebook-cat-item datebook-countryid" title="Bangladesh" href="#">Bangladesh</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="20" class="datebook-cat-item datebook-countryid" title="Belarus" href="#">Belarus</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="21" class="datebook-cat-item datebook-countryid" title="Belgium" href="#">Belgium</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="23" class="datebook-cat-item datebook-countryid" title="Benin" href="#">Benin</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="25" class="datebook-cat-item datebook-countryid" title="Bhutan" href="#">Bhutan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="26" class="datebook-cat-item datebook-countryid" title="Bolivia" href="#">Bolivia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="28" class="datebook-cat-item datebook-countryid" title="Bosnia and Herzegovina" href="#">Bosnia and Herzegovina</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="29" class="datebook-cat-item datebook-countryid" title="Botswana" href="#">Botswana</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="30" class="datebook-cat-item datebook-countryid" title="Brazil" href="#">Brazil</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="34" class="datebook-cat-item datebook-countryid" title="Burkina Faso" href="#">Burkina Faso</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="37" class="datebook-cat-item datebook-countryid" title="Cameroon" href="#">Cameroon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="38" class="datebook-cat-item datebook-countryid" title="Canada" href="#">Canada</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="40" class="datebook-cat-item datebook-countryid" title="Cayman Islands" href="#">Cayman Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="41" class="datebook-cat-item datebook-countryid" title="Central African Republic" href="#">Central African Republic</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="42" class="datebook-cat-item datebook-countryid" title="Chad" href="#">Chad</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="43" class="datebook-cat-item datebook-countryid" title="Chile" href="#">Chile</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="51" class="datebook-cat-item datebook-countryid" title="Croatia" href="#">Croatia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="52" class="datebook-cat-item datebook-countryid" title="Cuba" href="#">Cuba</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="57" class="datebook-cat-item datebook-countryid" title="Denmark" href="#">Denmark</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="59" class="datebook-cat-item datebook-countryid" title="Dominica" href="#">Dominica</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="60" class="datebook-cat-item datebook-countryid" title="Dominican Republic" href="#">Dominican Republic</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="62" class="datebook-cat-item datebook-countryid" title="Ecuador" href="#">Ecuador</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="63" class="datebook-cat-item datebook-countryid" title="Egypt" href="#">Egypt</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="67" class="datebook-cat-item datebook-countryid" title="Estonia" href="#">Estonia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="73" class="datebook-cat-item datebook-countryid" title="France" href="#">France</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="77" class="datebook-cat-item datebook-countryid" title="Gabon" href="#">Gabon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="80" class="datebook-cat-item datebook-countryid" title="Germany" href="#">Germany</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="81" class="datebook-cat-item datebook-countryid" title="Ghana" href="#">Ghana</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="83" class="datebook-cat-item datebook-countryid" title="Greece" href="#">Greece</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="84" class="datebook-cat-item datebook-countryid" title="Greenland" href="#">Greenland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="85" class="datebook-cat-item datebook-countryid" title="Grenada" href="#">Grenada</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="90" class="datebook-cat-item datebook-countryid" title="Guinea" href="#">Guinea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="93" class="datebook-cat-item datebook-countryid" title="Haiti" href="#">Haiti</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="94" class="datebook-cat-item datebook-countryid" title="Honduras" href="#">Honduras</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="96" class="datebook-cat-item datebook-countryid" title="Hungary" href="#">Hungary</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="97" class="datebook-cat-item datebook-countryid" title="Iceland" href="#">Iceland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="98" class="datebook-cat-item datebook-countryid" title="India" href="#">India</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="101" class="datebook-cat-item datebook-countryid" title="Iraq" href="#">Iraq</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="102" class="datebook-cat-item datebook-countryid" title="Ireland" href="#">Ireland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="104" class="datebook-cat-item datebook-countryid" title="Israel" href="#">Israel</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="105" class="datebook-cat-item datebook-countryid" title="Italy" href="#">Italy</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="107" class="datebook-cat-item datebook-countryid" title="Jamaica" href="#">Jamaica</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="108" class="datebook-cat-item datebook-countryid" title="Japan" href="#">Japan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="110" class="datebook-cat-item datebook-countryid" title="Jordan" href="#">Jordan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="112" class="datebook-cat-item datebook-countryid" title="Kenya" href="#">Kenya</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="113" class="datebook-cat-item datebook-countryid" title="Kiribati" href="#">Kiribati</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="117" class="datebook-cat-item datebook-countryid" title="Laos" href="#">Laos</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="118" class="datebook-cat-item datebook-countryid" title="Latvia" href="#">Latvia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="119" class="datebook-cat-item datebook-countryid" title="Lebanon" href="#">Lebanon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="120" class="datebook-cat-item datebook-countryid" title="Lesotho" href="#">Lesotho</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="125" class="datebook-cat-item datebook-countryid" title="Luxembourg" href="#">Luxembourg</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="127" class="datebook-cat-item datebook-countryid" title="Macedonia" href="#">Macedonia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="130" class="datebook-cat-item datebook-countryid" title="Malaysia" href="#">Malaysia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="132" class="datebook-cat-item datebook-countryid" title="Mali" href="#">Mali</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="134" class="datebook-cat-item datebook-countryid" title="Marshall Islands" href="#">Marshall Islands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="139" class="datebook-cat-item datebook-countryid" title="Mexico" href="#">Mexico</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="151" class="datebook-cat-item datebook-countryid" title="Nepal" href="#">Nepal</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="152" class="datebook-cat-item datebook-countryid" title="Netherlands" href="#">Netherlands</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="157" class="datebook-cat-item datebook-countryid" title="Nigeria" href="#">Nigeria</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="163" class="datebook-cat-item datebook-countryid" title="Oman" href="#">Oman</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="164" class="datebook-cat-item datebook-countryid" title="Pakistan" href="#">Pakistan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="166" class="datebook-cat-item datebook-countryid" title="Palestinian Territory" href="#">Palestinian Territory</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="170" class="datebook-cat-item datebook-countryid" title="Peru" href="#">Peru</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="171" class="datebook-cat-item datebook-countryid" title="Philippines" href="#">Philippines</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="173" class="datebook-cat-item datebook-countryid" title="Poland" href="#">Poland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="174" class="datebook-cat-item datebook-countryid" title="Portugal" href="#">Portugal</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="176" class="datebook-cat-item datebook-countryid" title="Qatar" href="#">Qatar</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="178" class="datebook-cat-item datebook-countryid" title="Reunion" href="#">Reunion</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="179" class="datebook-cat-item datebook-countryid" title="Romania" href="#">Romania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="180" class="datebook-cat-item datebook-countryid" title="Russia" href="#">Russia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="184" class="datebook-cat-item datebook-countryid" title="Saint Kitts and Nevis" href="#">Saint Kitts and Nevis</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="187" class="datebook-cat-item datebook-countryid" title="Saint Pierre and Miquelon" href="#">Saint Pierre and Miquelon</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="193" class="datebook-cat-item datebook-countryid" title="Senegal" href="#">Senegal</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="196" class="datebook-cat-item datebook-countryid" title="Sierra Leone" href="#">Sierra Leone</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="197" class="datebook-cat-item datebook-countryid" title="Singapore" href="#">Singapore</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="199" class="datebook-cat-item datebook-countryid" title="Slovakia" href="#">Slovakia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="200" class="datebook-cat-item datebook-countryid" title="Slovenia" href="#">Slovenia</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="203" class="datebook-cat-item datebook-countryid" title="South Africa" href="#">South Africa</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="205" class="datebook-cat-item datebook-countryid" title="South Korea" href="#">South Korea</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="206" class="datebook-cat-item datebook-countryid" title="South Sudan" href="#">South Sudan</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="208" class="datebook-cat-item datebook-countryid" title="Sri Lanka" href="#">Sri Lanka</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="210" class="datebook-cat-item datebook-countryid" title="Suriname" href="#">Suriname</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="213" class="datebook-cat-item datebook-countryid" title="Sweden" href="#">Sweden</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="214" class="datebook-cat-item datebook-countryid" title="Switzerland" href="#">Switzerland</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="218" class="datebook-cat-item datebook-countryid" title="Tanzania" href="#">Tanzania</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="220" class="datebook-cat-item datebook-countryid" title="Togo" href="#">Togo</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="222" class="datebook-cat-item datebook-countryid" title="Trinidad and Tobago" href="#">Trinidad and Tobago</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="224" class="datebook-cat-item datebook-countryid" title="Turkey" href="#">Turkey</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="229" class="datebook-cat-item datebook-countryid" title="Uganda" href="#">Uganda</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="231" class="datebook-cat-item datebook-countryid" title="United Arab Emirates" href="#">United Arab Emirates</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="232" class="datebook-cat-item datebook-countryid" title="United Kingdom" href="#">United Kingdom</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="233" class="datebook-cat-item datebook-countryid" title="USA" href="#">USA</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="238" class="datebook-cat-item datebook-countryid" title="Venezuela" href="#">Venezuela</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="239" class="datebook-cat-item datebook-countryid" title="Vietnam" href="#">Vietnam</a></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a id="244" class="datebook-cat-item datebook-countryid" title="Zimbabwe" href="#">Zimbabwe</a></div></div>			</div>
		</div>

		<div class="datebook-city-proccess">
			<p>We are getting cities...</p>
			<div class="progress progress-striped active">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-success"></div>
			</div>
		</div>

		<div class="datebook-region-proccess">
			<p>We are getting regions...</p>
			<div class="progress progress-striped active">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-success"></div>
			</div>
		</div>

		<div class="datebook-country-proccess">
			<p>We are getting countries...</p>
			<div class="progress progress-striped active">
				<div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-success"></div>
			</div>
		</div>

	</div>
</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="row">
					<div class="form-group">

						<label for="datebook-searchbutton">&nbsp;</label>

						<div class="clear"></div>

						<input id="datebook-searchbutton" value="Search" class="btn btn-block datebook-search-btn btn-search" type="submit">

					</div>
				</div>
			</div>

			
		</form>

	</div>
</div>


			</div>

			
		</div>

		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 hidden-xs pull-left"> </div>


	</div>

</div>

</div>


</div>



        @yield('content')
		@yield('footer')
		
    
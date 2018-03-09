// Bootflat - Tooltip, Selecter, Checkbox and Radio
!function(a) {
	a(function() {
		a(".tooltip-demo").tooltip({
			selector: "[data-toggle=tooltip]",
			container: "body"
			}),
		a(".checkbox input").iCheck({
			checkboxClass: "icheckbox_flat",
			increaseArea: "20%"
			}),
		a(".radio input").iCheck({
			radioClass: "iradio_flat",
			increaseArea: "20%"
			}),
		a("#accordion1").collapse(),
		a("#accordion2").collapse()
	})
} (window.jQuery);


// Show Social buttons on Profile page
function datebook_socialbutton(url, website) {
	if (website == "twitter") {
		window.open(url, "socialwindow", "height=300,width=500,resizable=1,scrollbars=yes");
		} else {
		window.open(url, "socialwindow", "height=500,width=800,resizable=1,scrollbars=yes");
	}
}
function datebook_pinterestbutton() {
	var e = document.createElement('script');
	e.setAttribute('type', 'text/javascript');
	e.setAttribute('charset', 'UTF-8');
	e.setAttribute('src', '//assets.pinterest.com/js/pinmarklet.js?r=' + Math.random() * 99999999);
	document.body.appendChild(e)
}

jQuery(document).ready(function($) {

	"use strict";
	
	$('select').selectpicker({
		style: 'btn-default'
	});

	// Show age range slider on Search form
	$("#datebook-agerange").ionRangeSlider({
		type: "double",
		min: 18,
		max: 80,
		from: 18,
		to: 80,
		hide_min_max: true,
		hide_from_to: true,
		grid: false,
		keyboard: true,
		keyboard_step: 1,
		input_values_separator: " - "
    });
	
	$("#datebook-agerange").removeClass("irs-hidden-input");
	
	$(document).on('click', '#datebook-agerange', function() {
		$('.js-irs-0').slideToggle('fast');
		});
	
	$(document).mouseup(function (e) {
		var popup = $(".js-irs-0");
		if (!$('#datebook-agebox').is(e.target) && !$('#datebook-agerange').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
			popup.fadeOut(300);
		}
		});
	


	// Open dropdown window with list of countries on Search form
	$(document).on('click', '#datebook-location, .datebook-front-search .dropdown, .datebook-profile-country .dropdown, .btn-close-country', function() {

		$('.datebook-countries-overlay').fadeToggle("slow");

	});
	
	$(document).on('click', '.datebook-countries-overlay', function() {
		$(this).fadeOut("slow");
	});
	
	$(document).on('click', '.datebook-dropdowncountry', function(event) {
		event.stopPropagation();
	});
	
	
	// Insert id of country into hidden input for Search, Registration, Tours pages
	$(document).on('click', '.datebook-countryid', function() {
		$("#datebook-locationcountry").val($(this).attr('id'));
		$("#datebook-location").val($(this).attr('title'));
	});
	// Isnert id of region into hidden input for Search, Registration, Tours pages
	$(document).on('click', '.datebook-regionid', function() {
		$("#datebook-locationregion").val($(this).attr('id'));
		$("#datebook-location").val($(this).attr('title'));
	});
	// Isnert id of city into hidden input for Search, Registration, Tours pages
	$(document).on('click', '.datebook-cityid', function() {
		$("#datebook-locationcity").val($(this).attr('id'));
		$("#datebook-location").val($(this).attr('title'));
		$('.datebook-countries-overlay').fadeOut("slow");
	});

	// Show profile details when mouse hover on Search page
	$(document).on('hover', '.datebook-profiles', function() {
		$(this).find('.datebook-profile-body.over').slideToggle('slow');
	});
		

	
	// Show Contact Form on Profile page
	$(document).on('click', '#datebook-chatpopup', function() {
	
		var windowObjectReference = null;
		
		var w = '740';
		var h = '500';

		var left = (screen.width/2)-(w/2);
		var top = (screen.height/2)-(h/2);
		var strWindowFeatures = 'left='+left+',top='+top+',screenX=100,screenY=100,width='+w+',height='+h+',resizable,scrollbars,status';
		
		var strWindowName = 'datebookchat';
		
		var strUrl = $(this).attr('href');
		
		if(windowObjectReference == null || windowObjectReference.closed) {
			windowObjectReference = window.open(strUrl, strWindowName, strWindowFeatures);
			windowObjectReference.focus();
		} else {
			windowObjectReference.focus();
		};

	});

	
	$(document).on('click', '#datebook-emailpopup', function() {
		$('#datebook-profilecontact').slideToggle('fast');
		$(this).toggleClass("act");
		if ($(this).hasClass('act')) {
			$(this).find('span').html('&#x25B2;')
		} else {
			$(this).find('span').html('&#x25BC;')
		}
	});


	// Limit Characters in Comment Form on Profile page
	$("#datebook-comment-description").keyup(function() {
		var charlimit = 400;
		var box = $(this).val();
		var main = box.length * 100;
		var value = (main / charlimit);
		var count = charlimit - box.length;
		var boxremove = box.substring(0, charlimit);
		var ourtextarea = $(this);
		
		if (box.length <= charlimit) {
			$('#datebook-count').html(count + " characters left");
			$("#datebook-comment-description");
			$('#datebook-progressslide').animate({
				"width": value + '%'
				},
			1);
		} else {
			$('#datebook-comment-description').val(boxremove);
			ourtextarea.scrollTop(ourtextarea[0].scrollHeight - ourtextarea.height());
		}
		
		return false;
	});
	
	$('.form-control').each(function() {
		$(this).keyup(function() {

			var charlimit = $(this).parent().parent().find('.label').attr('data-textlimit');

			if(charlimit > 0){

				var box = $(this).val();
				var count = charlimit - box.length;
				var boxremove = box.substring(0, charlimit);
				var ourtextarea = $(this);

				if (box.length <= charlimit) {
					$(this).parent().parent().find('.label').html(count);
				} else {
					$(this).val(boxremove);
					ourtextarea.scrollTop(ourtextarea[0].scrollHeight - ourtextarea.height());
				}
			}
		
			return false;

		})
	});
	
	// Limit Characters in Profile desciption on Profile page
	var ellipsestext = "...";
	var moretext = "+ Open more";
	var lesstext = "- Hide";

	$('.datebook-more').each(function() {
		var showChar = $(this).attr('data-textlimit');
		var content = $(this).html();
		if (content.length > showChar) {
			var c = content.substr(0, showChar);
			var h = content.substr(showChar - 0, content.length - showChar);
			var html = c + '<span class="datebook-moreelipses">' + ellipsestext + '</span><span class="datebook-morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="btn btn-default btn-xs datebook-morelink">' + moretext + '</a></span>';
			$(this).html(html);
		}
	});
	
	
	$(document).on('click', '.datebook-morelink', function() {
		if ($(this).hasClass("datebook-less")) {
			$(this).removeClass("datebook-less");
			$(this).html(moretext);
			} else {
			$(this).addClass("datebook-less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});


	// Set cookie for language in the footer
	$(document).on('change', '#datebook-language', function() {
		
		var name = "datebook_language";
		var value = $(this).val();
		var expires = "";
		var days = 365;

       	var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
   	    expires = "expires=" + date.toUTCString();
    	document.cookie = name + "=" + value + ";" + expires + "; path=/";
		
		location.reload();
	
	});
	
});
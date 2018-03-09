jQuery(document).ready(function($) {

	// Show countries in the Popup window
  	$(document).on('click', '.datebook-alllocations', function(e) {

		e.preventDefault();

		$('.datebook-countrybox').hide();
		$('.datebook-countries-proccess').show();

		var alllocations = $("#datebook-alllocations").val();

		$.ajax({
			type: 'GET',
			url: datebookajaxlocal.ajax_url,
			dataType: 'json',
			data: {
				action : 'datebook_ajax_actions',
				id : country,
				whatisit : 'cities',
				countrystyle : 'alllocations',
				alllocations : alllocations
			},
			success: function(data) {
				
				if (data.status === 200) {
					
					$('.datebook-region-proccess').hide();
					$('.datebook-dropdownbox').html(data.content);
					return false;
				
				} else if (data.status === 201) {

					$('.datebook-region-proccess').hide();
					$('.datebook-dropdownbox').html(data.message);
					return false;

				}
			}
		});
	});


	// Show regions in the Popup window in search panel, profile, tour
  	$(document).on('click', '.datebook-countryid', function(e) {
		
		e.preventDefault();

		$('.datebook-countrybox').hide();
		$('.datebook-region-proccess').show();

		var country = $(this).attr("id");

		var alllocations = $("#datebook-alllocations").val();

		$.ajax({
			type: 'GET',
			url: datebookajaxlocal.ajax_url,
			dataType: 'json',
			data: {
				action : 'datebook_ajax_actions',
				id : country,
				whatisit : 'cities',
				countrystyle : 'listregions',
				alllocations : alllocations
			},
			success: function(data) {
				
				if (data.status === 200) {
					
					$('.datebook-region-proccess').hide();
					$('.datebook-dropdownbox').html(data.content);
					return false;
				
				} else if (data.status === 201) {

					$('.datebook-region-proccess').hide();
					$('.datebook-dropdownbox').html(data.message);
					return false;

				}
			}
		});
	});


	// Show cities in the Popup window in search panel, profile, tour
  	$(document).on('click', '.datebook-regionid', function(e) {
		
		e.preventDefault();

		$('.datebook-countrybox').hide();
		$('.datebook-city-proccess').show();

		var country = $(this).attr("id");
		
		var alllocations = $("#datebook-alllocations").val();
		
		$.ajax({
			type: 'GET',
			url: datebookajaxlocal.ajax_url,
			dataType: 'json',
			data: {
				action : 'datebook_ajax_actions',
				id : country,
				whatisit : 'cities',
				countrystyle : 'listcities',
				alllocations : alllocations
			},
			success: function(data) {
				
				if (data.status === 200) {
					
					$('.datebook-city-proccess').hide();
					$('.datebook-dropdownbox').html(data.content);
					return false;
				
				} else if (data.status === 201) {

					$('.datebook-city-proccess').hide();
					$('.datebook-dropdownbox').html(data.message);
					return false;

				}
			}
		});
	});


	// Show countries in the Popup window in search panel, profile, tour
	$(document).on('click', '.datebook-countryback', function() {
		
		$('.datebook-countrybox').hide();
		$('.datebook-country-proccess').show();
		
		var alllocations = $("#datebook-alllocations").val();

		$.ajax({
			type: "GET",
			url: datebookajaxlocal.ajax_url,
			dataType: 'json',
			data : {
				action : 'datebook_ajax_actions',
				id : 0,
				whatisit : 'cities',
				countrystyle : 'countryback',
				alllocations : alllocations
			},
			success: function(data) {

				if (data.status === 200) {

					$('.datebook-country-proccess').hide();
					$('.datebook-dropdownbox').html(data.content);
					return false;

				} else if (data.status === 201) {

					$('.datebook-country-proccess').hide();
					$('.datebook-dropdownbox').html(data.message);
					return false;

				}
			}
		});
	});


	// Show countries in the Popup window in search panel, profile, tour
	$(document).on('click', '.datebook-regionback', function() {
		
		$('.datebook-countrybox').hide();
		$('.datebook-region-proccess').show();
		
		var country = $("#datebook-locationcountry").val();
		var alllocations = $("#datebook-alllocations").val();

		$.ajax({
			type: "GET",
			url: datebookajaxlocal.ajax_url,
			dataType: 'json',
			data : {
				action : 'datebook_ajax_actions',
				id : country,
				whatisit : 'cities',
				countrystyle : 'regionback',
				alllocations : alllocations
			},
			success: function(data) {

				if (data.status === 200) {

					$('.datebook-region-proccess').hide();
					$('.datebook-dropdownbox').html(data.content);
					return false;

				} else if (data.status === 201) {

					$('.datebook-region-proccess').hide();
					$('.datebook-dropdownbox').html(data.message);
					return false;

				}
			}
		});
	});


	// Check Login
	$('#datebook-emailaddress').keyup(function() {
		var user = $('#datebook-emailaddress').val();
		$.ajax({
			type: "GET",
			data : {
				action : 'datebook_ajax_actions',
				user : user,
				whatisit : 'logincheck'
			},
			success: function(data) {
				$('.datebook-checkuser').html(data);
			}
		});
	});


	// Set Default Profile Image
	$(document).on('click', '#datebook-img-main-id', function() {
		var imgid = $(this).val();
		$.ajax({
			type: "GET",
			data : {
				action : 'datebook_ajax_actions',
				id : imgid,
				whatisit : 'defaultimage'
			},
			success: function(data) {

				$('.datebook-img-popup').html(data).slideDown("slow").delay(1500).slideUp("slow");
				$('.datebook-photocontainer .datebook-img-single span').removeClass('selected');
				$("#"+imgid+" span").addClass('selected');

				$('.datebook-photocontainer #datebook-img-main-id').removeClass('btn-primary');
				$('.datebook-photocontainer #datebook-img-main-id').addClass('btn-default');
				$("#"+imgid+" #datebook-img-main-id").removeClass('btn-default');
				$("#"+imgid+" #datebook-img-main-id").addClass('btn-primary');

			}
		});
	});


	// Delete Profile Image
	$(document).on('click', '#datebook-img-delete-id', function() {

		var imgid = $(this).val();

		$.ajax({
			url: datebookajaxlocal.ajax_url,
			type: 'GET',
			dataType: "json",
			data : {
				action : 'datebook_ajax_actions',
				id : imgid,
				whatisit : 'imagedelete'
			},
			success: function(data) {

				$("#" + data.imgid).fadeOut("slow");
				$('.datebook-img-popup').html(data.successtext).slideDown("slow").delay(1000).slideUp("slow");

			}
		});
	});


	// Delete Real Image
	$(document).on('click', '#datebook-img-real-id', function() {
		var imgid = $('#datebook-img-single-id').val();
		$.ajax({
			type: "GET",
			data : {
				action : 'datebook_ajax_actions',
				id : imgid,
				whatisit : 'realphotodelete'
			},
			success: function(data) {
				$("#"+imgid).fadeOut("slow");
				$('.datebook-img-popup').html(data).slideDown("slow").delay(11000).slideUp("slow");
			}
		});
	});


  	// Add to Favourites
  	$(document).on('click', '.datebook-favourited', function() {
		var profile_qid = $(this).attr('id');
  		$('.datebook-favourited').toggle("slow");
  		$.ajax({
  			type: "GET",
			data : {
				action : 'datebook_ajax_actions',
				id : profile_qid,
				whatisit : 'favouriteset'
			},
  		});
  	});


	// Delete Tour
  	$(document).on('click', '.datebook-deletetour', function() {
		var tour_id = $(this).attr('id');
  		$('#datebook-tour'+tour_id+' .datebook-optionbuttons').html('<b></b>');
  		$.ajax({
  			type: "GET",
			data : {
				action : 'datebook_ajax_actions',
				tid : tour_id,
				whatisit : 'tourdelete'
			},
  			success: function(data) {
  				$('.datebook-delete-popup').html(data).fadeIn("slow").delay(1500).fadeOut("slow");
  				$('#datebook-tour'+tour_id).slideUp("slow");
  			}
  		});
  	});


  	// Edit Tour
  	$(document).on('click', '.datebook-edittour', function() {
  		var tour_id = $(this).attr('id');
  		$('#datebook-tour' + tour_id + ' .datebook-optionbuttons em').hide();
  		$('#datebook-tour' + tour_id + ' .datebook-optionbuttons').append('<b></b>');
  		$.ajax({
  			type: "GET",
			data : {
				action : 'datebook_ajax_actions',
				tid : tour_id,
				whatisit : 'touredit'
			},
  			success: function(data) {
  				$('.datebook-addedtours').html(data);
  				$('html').scrollTop(0);
  				$('#datebook-tour'+tour_id+' .datebook-optionbuttons b').hide();
  				$('#datebook-tour'+tour_id+' .datebook-optionbuttons').append('<em>'+tour_id+'</em>');
  			}
  		});
  	});


	// Upload photos for profile gallery and Real Status
	$('#datebook-imageform').ajaxForm({

		beforeSubmit: function() {
			var count = 0;
			var val = $.trim($('#datebook-images').val());
			var delval = $.trim($('#datebook-img-single-id').val());
			$("#" + delval).remove();

			if (val == '') {
				var count = 1;
				$('.datebook-noimage-error').slideDown("slow").delay(5000).slideUp("slow");
			}

			if (count == 0) {
				for (var i = 0; i < $('#datebook-images').get(0).files.length; ++i) {
					var img = $('#datebook-images').get(0).files[i].name;
					var extension = img.split('.').pop().toUpperCase();
					if (extension != "PNG" && extension != "JPG" && extension != "GIF" && extension != "JPEG") {
						var count = count + 1;
						$('.datebook-noimageext-error').slideDown("slow").delay(5000).slideUp("slow");
					}
				}
			}
			
			if (count > 0) {
				return false;
			} else {
				$("#datebook-images").next('span').html("");
			}
		},
		
		beforeSend: function() {
			$('#datebook-loader').show();
			$('#datebook-image-upload').hide();
			},

		success: function(msg) {},

		complete: function(xhr) {
			$('#datebook-loader').hide();
			$('#datebook-image-upload').show();
			
			$('#datebook-images').val('');
			$('#datebook-error-div').html('');

			var result = $.parseJSON(xhr.responseText);

			if (result.success) {

				var imageid = result.imgid;
				var imagebig = result.imgbig;
				var imgurl = result.imgurl;
				var successtext = result.successtext;
				var html = '';

				var delrealphoto = $('#datebook-realphoto').val();

				if (delrealphoto) {

					var photoverify_name = 'img_real_id';
					var photoverify_class = 'datebook-img-real-id';

					html += '<div id="' + imageid + '" class="datebook-realstatusphoto"><span class=""><a class="" href="' + imagebig + '" data-lightbox="example-1"><image class="thumbnail" src="' + imgurl + '" /></a><div class="datebook-clear5"></div><input type="hidden" value="' + imageid + '" id="datebook-img-single-id"><input type="button" value="Delete image" id="' + photoverify_class + '" name="' + photoverify_name + '" class="btn btn-default btn-block"></span></div>';
			
				} else {
			
					html += '<div id="' + imageid + '" class="datebook-img-single" style="float:left;margin-right: 10px;margin-bottom: 14px;"><span class=""><img class="" src="' + imgurl + '" alt="" /></span><div class="datebook-clear5"></div><button type="submit" value="' + imageid + '" class="btn btn-default btn-xs" id="datebook-img-main-id">Default image</button><button title="Delete image" type="submit" value="' + imageid + '" class="btn btn-default btn-xs pull-right" id="datebook-img-delete-id"><i class="fa fa-trash"></i></button></div>';

				}
				
				$('.datebook-img-popup').html(successtext).slideDown("slow").delay(8000).slideUp("slow");
				$('#datebook-images-panel').append(html);
				
			} else {
				
				var successtext = result.successtext;
				var html = '';

				html += successtext;

				$('.datebook-img-popup').html(successtext).slideDown("slow").delay(8000).slideUp("slow");
				
			}
			
		}
	});




});
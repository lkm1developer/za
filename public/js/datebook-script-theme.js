jQuery(document).ready(function($) {
	
	"use strict";
	
	$('[data-toggle="popover"]').popover({
		container: 'body'
	});


	$("#dropdown li").on('hover', function() {
		$(this).find('ul:first').css({
			visibility: "visible",
			display: "none"
			}).show();
		},
	function() {
		$(this).find('ul:first').css({
			visibility: "hidden"
			});
		});
	
});
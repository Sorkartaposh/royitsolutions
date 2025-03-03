(function($){
	$(document).ready(function() {	

		// Scroll to Top
		jQuery('.scrolltotop').click(function(){
			jQuery('html').animate({'scrollTop' : '0px'}, 400);
			return false;
		});
		
		jQuery(window).scroll(function(){
			var upto = jQuery(window).scrollTop();
			if(upto > 500) {
				jQuery('.scrolltotop').fadeIn();
			} else {
				jQuery('.scrolltotop').fadeOut();
			}
		});

		// accordion script 
		$('.accordion_header_ris').click(function() {
			var content = $(this).next('.accordion_content_ris');
			var isActive = $(this).hasClass('active');
			$('.accordion_header_ris').removeClass('active');
			$('.accordion_content_ris').slideUp();
			if (!isActive) {
				$(this).addClass('active');
				content.slideDown();
			}
		});

		// year auto change
		$("#copyright_year").text(new Date().getFullYear());

	
		
		
		
		
		
	});
})(jQuery);

// wow js
new WOW().init();



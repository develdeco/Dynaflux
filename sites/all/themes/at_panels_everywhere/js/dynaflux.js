(function ($) {
	$(document).ready(function(){
		$('#offices-contact-link').click(function(){
	  		$('#pane-oficinas-slideshow').fadeIn('fast');
	  		$('#contact-site-form').fadeOut('fast');
		});

		$('#contact-contact-link').click(function(){
			$('#pane-oficinas-slideshow').fadeOut('fast');
	   		$('#contact-site-form').fadeIn('fast');
		});
	});
})(jQuery);
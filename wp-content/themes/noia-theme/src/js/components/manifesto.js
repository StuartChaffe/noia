jQuery(function ($) {
	var manifesto = $('.manifesto-item-2').offset().top;

	$(window).scroll(function() {  
		if ($(window).scrollTop() > manifesto) {
			$('.manifesto-image-2').addClass('show');
		}
		else {
			$('.manifesto-image-2').removeClass('show');
		}  
	});
})
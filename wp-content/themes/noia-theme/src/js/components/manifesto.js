jQuery(function ($) {
	$(window).on('scroll', function () {
		$('.manifesto-item').each(function () { 
			var distance = $(this).offset().top;
			if ($(window).scrollTop() >= distance) {
				var image = $(this).attr('data-sticky-image');
				$("#manifesto-image").attr("src", image);
			}
		});
	});
})
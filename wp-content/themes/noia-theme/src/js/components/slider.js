jQuery(document).ready(function($) {
	$(".carousel-slider").slick({
		// settings: "unslick",
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 4000,
		arrows: true,
		infinite: true,
		dots: false,
		adaptiveHeight: true,
		pauseOnHover: false,
		// fade: true
	});
	$(".location-images--slider").slick({
		// speed: 10000,
        autoplay: true,
        autoplaySpeed: 3000,
        // cssEase: 'linear',
		pauseOnHover: true,

		settings: "unslick",
		slidesToShow: 3,
		// slidesToScroll: 3,
		autoplay: true,
		arrows: false,
		dots: false,
		adaptiveHeight: true,
		centerMode: true,
		centerPadding: '200px',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$(".text-block--images").slick({
		// settings: "unslick",
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 4000,
		arrows: true,
		infinite: true,
		dots: false,
		adaptiveHeight: true,
		pauseOnHover: false,
		fade: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$.fn.scrollView = function () {
		return this.each(function () {
			$('html, body').animate({
				scrollTop: $(this).offset().top
			}, 500);
		});
	}
	$('body').on('click', '.slick-arrow', function () {
		$(this).closest('.carousel').scrollView();
	})  
});
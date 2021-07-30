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
		dots: true,
		adaptiveHeight: true,
		pauseOnHover: false,
		// centerMode: true,
		// centerPadding: "260px",
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					// centerPadding: "160px",
				}
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					// centerPadding: "60px",
				}
			}
		]
	});
});
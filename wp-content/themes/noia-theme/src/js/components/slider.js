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
		fade: true
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
	// $('.carousel-slider').on('afterChange', function (event, slick, currentSlide) {
    
    //     if(currentSlide === 2) {
    //         $('.slick-next').addClass('slick-hidden');
    //     }
    //     else {
    //         $('.slick-next').removeClass('slick-hidden');
    //     }

    //     if(currentSlide === 0) {
    //         $('.slick-prev').addClass('slick-hidden');
    //     }
    //     else {
    //         $('.slick-prev').removeClass('slick-hidden');
    //     }  
    // })

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
	$('body').on('click', '.show-content', function () {
		$(this).closest('.accordion').scrollView();
	})

	$( ".show-content" ).click(function() {
		$( ".accordion-item--content" ).toggleClass( "show" );
		$( ".accordion-item" ).toggleClass( "accordion-item--active" );
	});

	$(".show-content").click(function(){
		$(this).text($(this).text() == '[Read]' ? '[Close]' : '[Read]');
	});
	  
});
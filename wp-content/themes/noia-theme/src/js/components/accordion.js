jQuery(document).ready(function($) {
    $('body').on('click', '.accordion-item--open', function () {
		$(this).closest('.accordion-item--show').scrollView();
	})

	$('.accordion').on('click', '.accordion-item--open', function(){
		// Remove all classes
		$('.accordion-item--open').removeClass('is-expanded');
		$('.accordion-item').removeClass('accordion-item--show');
		$('.accordion-item').removeClass('accordion-item--show');
		$('.accordion-item--number').addClass('hide');
		$('.accordion-item').addClass('accordion-item--shrink');
		// $('.accordion-item--number').toggleClass('hide');
		// $('.accordion-item').addClass('accordion-item--shrink');

		// Now add class to specifc accordion item we need to show
		$(this).addClass('is-expanded');
		$(this).closest('.accordion-item').addClass('accordion-item--show');

		// Hide text
		$('.accordion-block--title__inner').addClass('accordion-block--title__hide');
	});

	// If user clicks on expanded item, remove all classes and show text
	$('.accordion').on('click', '.accordion-item--open.is-expanded', function(){
		// Remove all classes
		$(this).removeClass('is-expanded');
		$('.accordion-item').removeClass('accordion-item--show');
		$('.accordion-item--number').removeClass('hide');
		$('.accordion-item').removeClass('accordion-item--shrink');

		// Show text
		$('.accordion-block--title__inner').removeClass('accordion-block--title__hide');
	});

});
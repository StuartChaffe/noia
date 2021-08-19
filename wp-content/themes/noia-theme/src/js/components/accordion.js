jQuery(document).ready(function($) {

    $('body').on('click', '.accordion-item--open', function () {
		$(this).closest('.accordion').scrollView();
	})

	$( ".show-content" ).click(function() {
		$( ".accordion-item--content" ).toggleClass( "show" );
		$( ".accordion-item" ).toggleClass( "accordion-item--active" );
        $( ".accordion-block--title" ).toggleClass( "accordion-block--title__hide" );
	});

	// $(".accordion-item--open").click(function(){
	// 	$(this).text($(this).text() == '+' ? '-' : '+');
	// });

	// $( ".accordion-item--open" ).click(function() {
	// 	$( ".accordion-item" ).toggleClass( "accordion-item--show" );
	// });
	$('.accordion-item--open').on('click', function () {
		$(this).closest('.accordion-item').toggleClass( "accordion-item--show" );
		$( ".accordion-block--title__inner" ).toggleClass( "accordion-block--title__hide" );
	})
	  
});
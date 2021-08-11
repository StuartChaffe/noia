jQuery(document).ready(function($) {

    $('body').on('click', '.show-content', function () {
		$(this).closest('.accordion').scrollView();
	})

	$( ".show-content" ).click(function() {
		$( ".accordion-item--content" ).toggleClass( "show" );
		$( ".accordion-item" ).toggleClass( "accordion-item--active" );
        $( ".accordion-block--title" ).toggleClass( "accordion-block--title__hide" );
	});

	$(".show-content").click(function(){
		$(this).text($(this).text() == '[Read]' ? '[Close]' : '[Read]');
	});
	  
});
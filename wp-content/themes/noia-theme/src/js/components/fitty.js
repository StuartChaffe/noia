jQuery(function ($) {
	fitty('.fit-content');
});


jQuery(function ($) {
	function Animation() {
		$('.animate').each(function(){
			//var ImageHeight = $(window).height() / 2;
			var screenHeight = $(window).height() - 20;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('animate--visible');
			} 
		});
	};
	Animation();
		$(document).scroll(function(){
		Animation();
	});
})
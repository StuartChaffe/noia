jQuery(function ($) {
	fitty('.fit-content');
});

jQuery(function ($) {
	function Animation() {
		$('.animate').each(function(){
			var screenHeight = $(window).height() - 20;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('animate--visible');
			} 
		});
		$('.animate-up').each(function(){
			var screenHeight = $(window).height() - 200;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('animate-up--visible');
			} 
		});
		$('.arrow').each(function(){
			var screenHeight = $(window).height() - 20;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('arrow--visible');
			} 
		});
	};
	Animation();
		$(document).scroll(function(){
		Animation();
	});

	$(window).scroll(function() {

		if ($(this).scrollTop()>500)
		 {
			$(".banner--text-overlay").addClass("banner--text-overlay__show");
			$(".banner--logo").addClass("hide");
		 }
		else
		 {
		  $(".banner--text-overlay").removeClass("banner--text-overlay__show");
		  $(".banner--logo").removeClass("hide");
		 }
	 });
})


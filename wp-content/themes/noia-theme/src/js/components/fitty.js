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
		$('.animate-up').each(function(){
			//var ImageHeight = $(window).height() / 2;
			var screenHeight = $(window).height() - 200;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('animate-up--visible');
			} 
		});
		$('.arrow').each(function(){
			//var ImageHeight = $(window).height() / 2;
			var screenHeight = $(window).height() - 20;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('arrow--visible');
			} 
		});
		// $('.reveal').each(function(){
		// 	//var ImageHeight = $(window).height() / 2;
		// 	var screenHeight = $(window).height() - 0;
		// 	if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
		// 	$(this).addClass('text-reveal');
		// 	} 
		// });

		// $('.fade').each(function(){
		// 	//var ImageHeight = $(window).height() / 2;
		// 	var screenHeight = $(window).height() - 300;
		// 	if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
		// 	$(this).addClass('fade--visible');
		// 	} 
		// });


		// $(document).ready(function() {
		// 	var reveal = $('.reveal').offset();
		// 	var $window = $(window);
			
		// 	$window.scroll(function() {
		// 		if ( $window.scrollTop() >= reveal.top) {
		// 			$(".banner--text-overlay").addClass("text-reveal");
		// 			$(".banner--logo").addClass("hide");
		// 		}
		// 	});			
		// });
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
			// $(".banner--content").addClass("hide");
		 }
		else
		 {
		  $(".banner--text-overlay").removeClass("banner--text-overlay__show");
		  $(".banner--logo").removeClass("hide");
		//   $(".banner--content").removeClass("hide");
		 }
	 });

	 $(window).scroll(function() {

		if ($(this).scrollTop()>100)
		 {
			$(".banner--video").addClass("blur");
		 }
		else
		 {
		  $(".banner--video").removeClass("blur");
		 }
	 });
})


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

		$('.fade').each(function(){
			//var ImageHeight = $(window).height() / 2;
			var screenHeight = $(window).height() - 300;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('fade--visible');
			} 
		});
	};
	Animation();
		$(document).scroll(function(){
		Animation();
	});
})
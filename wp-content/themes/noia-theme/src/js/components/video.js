jQuery(function ($) {
	$("video").prop('muted', true);

	// $("video").click( function (){
	// 	$(this).prop('muted', !$(this).prop('muted'));
	// });

	$(".banner--video__button-desktop").click( function (){
		$(".banner--video-desktop").prop('muted', !$(".banner--video-desktop").prop('muted'));
		// $(".banner--video-desktop").prop('muted', !$(".banner--video-mobile").prop('muted'));
		$(this).toggleClass('unmute');

		$(".banner--logo").toggleClass('hide');
	});
	$(".banner--video__button-mobile").click( function (){
		$(".banner--video-mobile").prop('muted', !$(".banner--video-mobile").prop('muted'));
		// $(".banner--video-desktop").prop('muted', !$(".banner--video-desktop").prop('muted'));
		$(this).toggleClass('unmute');

		$(".banner--logo").toggleClass('hide');
	});
	$( ".button-replay" ).click(function() {
		$('#video-desktop').get(0).currentTime = 0;
	});

	$( ".button-replay-mobile" ).click(function() {
		$('#video-mobile').get(0).currentTime = 0;
	});
	
});
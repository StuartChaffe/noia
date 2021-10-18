jQuery(function ($) {

	$(window).on('scroll', function () {
		var pixs = $(document).scrollTop()
		pixs = pixs / 30;
		$(".banner__blur").css({"-webkit-filter": "blur("+pixs+"px)","filter": "blur("+pixs+"px)" })     
	});
	var anchors = 0;

	$('.text-block--text__content h2').each(function() {
	var text = $(this).text();
	$(this).attr("id", 'heading' + anchors);
		$('<li/>')
			.append($('<a />', {text: text, href:'#heading'+anchors}))
			.appendTo('.page-nav');
		anchors++;
	});
})
jQuery(function ($) {
	//  $('.scroll').on('click',function(e) {
	// 	e.preventDefault();
	// 	var offset = 0;
	// 	var target = this.hash;
	// 	if ($(this).data('offset') != undefined) offset = $(this).data('offset');
	// 	$('html, body').stop().animate({
	// 		'scrollTop': $(target).offset().top - offset
	// 	}, 500, 'swing', function() {
	// 		// window.location.hash = target;
	// 	});
	// });

	// $('a[href*="#"]:not([href="#"])').click(function() {    
	// 	var offset = -50; // <-- change the value here
	// 	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	// 		var target = $(this.hash);
	// 		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	// 		if (target.length) {
	// 			$('html, body').animate({
	// 				scrollTop: target.offset().top + offset
	// 			}, 100);
	// 			return false;
	// 		}
	// 	}
	// });

    // var arr = [];
    // $(".text-block--text__content h2").each(function(){
    //     var id = $(this).html();
    //     $(this).attr("id", id);
    //     arr.push($(this).attr('id'));
    // });
    // for (i in arr) {
    //     $('ul#nav').append('<li><a href="#' + arr[i] + '">' + arr[i] + '</a></li>');
    // }

    var anchors = 0;

    $('.text-block--text__content h2').each(function() {
    var text = $(this).text();
    $(this).attr("id", 'heading' + anchors);
        $('<li/>')
            .append($('<a />', {text: text, href:'#heading'+anchors}))
            .appendTo('.page-nav');
        anchors++;
    });


	// $(document).scroll(function () {
	// 	var y = $(this).scrollTop();
	// 	if (y > 800) {
	// 		$('.ask-btn').fadeIn();
	// 	} else {
	// 		$('.ask-btn').fadeOut();
	// 	}
	
	// });

})


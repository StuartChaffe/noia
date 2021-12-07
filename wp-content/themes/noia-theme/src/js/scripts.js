'use strict';

import './components/no-js';
// import './components/cookie';
import './components/toggle';
import './components/slider';
import './components/accordion';
import './components/fitty';
import './components/modal';
// import './components/menu';
import './components/video';
import './components/scrollto';
import './components/manifesto';



jQuery(function ($) {
	function Animation() {
		$('.fadein').each(function(){
			//var ImageHeight = $(window).height() / 2;
			var screenHeight = $(window).height() - 620;
			if($(document).scrollTop() >= $(this).offset().top - screenHeight) {
			$(this).addClass('fadein--visible');
			} 
		});
	};
	Animation();
		$(document).scroll(function(){
		Animation();
	});
})
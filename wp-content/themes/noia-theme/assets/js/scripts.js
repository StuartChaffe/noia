(()=>{var e,o={924:()=>{jQuery(document).ready((function(e){e("body").on("click",".accordion-item--open",(function(){e(this).closest(".accordion-item--show").scrollView()})),e(".accordion").on("click",".accordion-item--open",(function(){e(".accordion-item--open").removeClass("is-expanded"),e(".accordion-item").removeClass("accordion-item--show"),e(".accordion-item").removeClass("accordion-item--show"),e(".accordion-item--number").addClass("hide"),e(".accordion-item").addClass("accordion-item--shrink"),e(this).addClass("is-expanded"),e(this).closest(".accordion-item").addClass("accordion-item--show"),e(".accordion-block--title__inner").addClass("accordion-block--title__hide")})),e(".accordion").on("click",".accordion-item--open.is-expanded",(function(){e(this).removeClass("is-expanded"),e(".accordion-item").removeClass("accordion-item--show"),e(".accordion-item--number").removeClass("hide"),e(".accordion-item").removeClass("accordion-item--shrink"),e(".accordion-block--title__inner").removeClass("accordion-block--title__hide")}))}))},335:()=>{jQuery((function(e){fitty(".fit-content")})),jQuery((function(e){function o(){e(".animate").each((function(){var o=e(window).height()-20;e(document).scrollTop()>=e(this).offset().top-o&&e(this).addClass("animate--visible")})),e(".animate-up").each((function(){var o=e(window).height()-200;e(document).scrollTop()>=e(this).offset().top-o&&e(this).addClass("animate-up--visible")})),e(".arrow").each((function(){var o=e(window).height()-20;e(document).scrollTop()>=e(this).offset().top-o&&e(this).addClass("arrow--visible")}))}o(),e(document).scroll((function(){o()})),e(window).scroll((function(){e(this).scrollTop()>500?(e(".banner--text-overlay").addClass("banner--text-overlay__show"),e(".banner--logo").addClass("hide")):(e(".banner--text-overlay").removeClass("banner--text-overlay__show"),e(".banner--logo").removeClass("hide"))}))}))},373:()=>{jQuery((function(e){e(window).on("scroll",(function(){e(".manifesto-item").each((function(){var o=e(this).offset().top-200;if(e(window).scrollTop()>=o){var t=e(this).attr("data-sticky-image");e("#manifesto-image").attr("src",t)}}))}))}))},864:()=>{jQuery((function(e){e(".ajax-featherlight").featherlight({targetAttr:"href",closeSpeed:1,openSpeed:1,beforeOpen:function(){e.featherlight.close()}}),e(window).scroll((function(){e(this).scrollTop()>600?e(".ask").fadeIn():e(".ask").fadeOut()}))}))},578:()=>{"use strict";document.addEventListener("DOMContentLoaded",(function(){document.body.classList.remove("no-js"),document.body.classList.add("js")}))},198:()=>{jQuery((function(e){e(window).on("scroll",(function(){var o=e(document).scrollTop();o/=30,e(".banner__blur").css({"-webkit-filter":"blur("+o+"px)",filter:"blur("+o+"px)"})}));var o=0;e(".text-block--text__content h2").each((function(){var t=e(this).text();e(this).attr("id","heading"+o),e("<li/>").append(e("<a />",{text:t,href:"#heading"+o})).appendTo(".page-nav"),o++}))}))},549:()=>{function e(e,o,t){return o in e?Object.defineProperty(e,o,{value:t,enumerable:!0,configurable:!0,writable:!0}):e[o]=t,e}jQuery(document).ready((function(o){var t;o(".carousel-slider").slick({speed:500,slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:5e3,arrows:!0,infinite:!0,dots:!1,adaptiveHeight:!0,pauseOnHover:!1,fade:!0}),o(".location-images--slider").slick((e(t={autoplay:!0,autoplaySpeed:3e3,pauseOnHover:!0,settings:"unslick",slidesToShow:3,centerMode:!0,centerPadding:"200px"},"autoplay",!0),e(t,"arrows",!0),e(t,"dots",!1),e(t,"adaptiveHeight",!0),e(t,"responsive",[{breakpoint:640,settings:{slidesToShow:1,centerPadding:"100px"}},{breakpoint:1024,settings:{centerMode:!0}}]),t)),o(".text-block--images").slick({speed:300,slidesToShow:1,slidesToScroll:1,autoplay:!1,autoplaySpeed:4e3,arrows:!0,infinite:!0,dots:!1,adaptiveHeight:!1,pauseOnHover:!1,fade:!0}),o.fn.scrollView=function(){return this.each((function(){o("html, body").animate({scrollTop:o(this).offset().top},500)}))},o("body").on("click",".slick-arrow",(function(){o(this).closest(".carousel").scrollView()}))}))},254:()=>{"use strict";!function(){var e=document.querySelectorAll("[data-toggle]");if(0===e.length)return!1;e.forEach((function(e){var o=document.querySelector(e.dataset.toggle);if(o){var t=e.dataset.toggleBodyClass,i=e.dataset.toggleClass||"is-toggled";e.addEventListener("click",(function(){var n=e.classList.contains(i);o.classList.toggle(i),e.classList.toggle(i),e.setAttribute("aria-expanded",n?"false":"true"),o.setAttribute("aria-hidden",n?"true":"false"),t&&document.body.classList.toggle(t)}),!1)}}))}()},998:()=>{jQuery((function(e){e("video").prop("muted",!0),e(".banner--video__button-desktop").click((function(){e(".banner--video-desktop").prop("muted",!e(".banner--video-desktop").prop("muted")),e(this).toggleClass("unmute"),e(".banner--logo").toggleClass("hide")})),e(".banner--video__button-mobile").click((function(){e(".banner--video-mobile").prop("muted",!e(".banner--video-mobile").prop("muted")),e(this).toggleClass("unmute"),e(".banner--logo").toggleClass("hide")})),e(".button-replay").click((function(){e("#video-desktop").get(0).currentTime=0})),e(".button-replay-mobile").click((function(){e("#video-mobile").get(0).currentTime=0})),setTimeout((function(){e(".banner--logo").removeClass("hide").addClass("hide")}),1e4)}))},341:(e,o,t)=>{"use strict";t(578),t(254),t(549),t(924),t(335),t(864),t(998),t(198),t(373);jQuery((function(e){function o(){e(".fadein").each((function(){var o=e(window).height()-620;e(document).scrollTop()>=e(this).offset().top-o&&e(this).addClass("fadein--visible")}))}o(),e(document).scroll((function(){o()}))}))},685:()=>{},797:()=>{}},t={};function i(e){var n=t[e];if(void 0!==n)return n.exports;var a=t[e]={exports:{}};return o[e](a,a.exports,i),a.exports}i.m=o,e=[],i.O=(o,t,n,a)=>{if(!t){var s=1/0;for(d=0;d<e.length;d++){for(var[t,n,a]=e[d],r=!0,c=0;c<t.length;c++)(!1&a||s>=a)&&Object.keys(i.O).every((e=>i.O[e](t[c])))?t.splice(c--,1):(r=!1,a<s&&(s=a));if(r){e.splice(d--,1);var l=n();void 0!==l&&(o=l)}}return o}a=a||0;for(var d=e.length;d>0&&e[d-1][2]>a;d--)e[d]=e[d-1];e[d]=[t,n,a]},i.n=e=>{var o=e&&e.__esModule?()=>e.default:()=>e;return i.d(o,{a:o}),o},i.d=(e,o)=>{for(var t in o)i.o(o,t)&&!i.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:o[t]})},i.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={861:0,842:0,33:0};i.O.j=o=>0===e[o];var o=(o,t)=>{var n,a,[s,r,c]=t,l=0;for(n in r)i.o(r,n)&&(i.m[n]=r[n]);if(c)var d=c(i);for(o&&o(t);l<s.length;l++)a=s[l],i.o(e,a)&&e[a]&&e[a][0](),e[s[l]]=0;return i.O(d)},t=self.webpackChunkorigin=self.webpackChunkorigin||[];t.forEach(o.bind(null,0)),t.push=o.bind(null,t.push.bind(t))})(),i.O(void 0,[842,33],(()=>i(341))),i.O(void 0,[842,33],(()=>i(685)));var n=i.O(void 0,[842,33],(()=>i(797)));n=i.O(n)})();
//# sourceMappingURL=scripts.js.map
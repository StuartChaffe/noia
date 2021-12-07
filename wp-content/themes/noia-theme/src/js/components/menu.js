jQuery(document).ready(function($) {
    // $('.menu-item-has-children').hover(

    //     function() {
    //         $('.sub-menu').addClass('test')
    //     },
    //     setTimeout( function(){ 
    //         $('.sub-menu').removeClass('test');
    //     }, 5000 )
    // );

    var element = $('.menu-item-has-children');
    var sub = $('.sub-menu');
    element.hover(
        function() {
            sub.addClass('test');
        },
        function() {
            sub.removeClass('test');
        }
        // setTimeout(function() {
        //     sub.removeClass('test');
        // }, 2500
        // )
    );
    // setTimeout(function() {
    //     element.removeClass('test');
    // }, 2500);
});


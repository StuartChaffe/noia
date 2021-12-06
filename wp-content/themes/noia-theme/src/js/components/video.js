jQuery(function ($) {
    $("video").prop('muted', true);

    $("video").click( function (){
        $(this).prop('muted', !$(this).prop('muted'));
    });

    $(".banner--video__button").click( function (){
        $("video").prop('muted', !$("video").prop('muted'));
        $(this).toggleClass('unmute');
    });
});
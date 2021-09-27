jQuery(function ($) {
    $(".ajax-featherlight").featherlight({
        targetAttr: 'href',
        closeSpeed: 1,
        afterClose: function(event){
            $('.featherlight-close').click();
        } 
    });
});
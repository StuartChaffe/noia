jQuery(function ($) {
    $(".ajax-featherlight").featherlight({
        targetAttr: 'href',
        closeSpeed: 1,
        openSpeed: 1,
        beforeOpen: function(){
            $.featherlight.close()
        } 
    });
});
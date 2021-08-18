jQuery(function ($) {
	// $('.modal').featherlight({
    //     galleryFadeIn: 300,
    //     galleryFadeOut: 300
    // });

    $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        autoAdjustHeight:true,
        transitionEffect:'fade',
        showStepURLhash: false,
    });
});
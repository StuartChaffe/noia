<?php
/**
* The template used for displaying an intro text block.
*/
$bkgcolor = get_field( 'bkgcolor');
$bkgimage = get_field( 'bkgimage');
$text = get_field('textblock-text');
$content = $text['textblock-content'];
$color = $text['textblock-text-colour'];
$size = $text['textblock-text-size'];
?>
<div class="intro-block <?php echo $bkgcolor ?>" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>
<div class="global-container">
<section class="text-block <?php echo $size ?>" >
	<div class="<?php echo $size ?>">
		<div class="text-block--text-inner">
			<div class="text-block--text__content fade <?php echo $color ?>">
				<?php echo $content ?>
			</div>
		</div>
	</div>
</section>
</div>
</div>

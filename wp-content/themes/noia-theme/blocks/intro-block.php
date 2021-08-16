<?php
/**
* The template used for displaying an intro text block.
*/
$bkgcolor = get_field( 'bkgcolor');
$text = get_field('textblock-text');
$content = $text['textblock-content'];
$size = $text['textblock-text-size'];
?>

<section class="intro-block text-block <?php echo $bkgcolor ?> <?php echo $size ?>">
	<div class="<?php echo $size ?>">
		<div class="text-block--text-inner">
			<div class="text-block--text__content">
				<?php echo $content ?>
			</div>
		</div>
	</div>
</section>

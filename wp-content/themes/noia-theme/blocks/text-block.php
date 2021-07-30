<?php
/**
* The template used for displaying a text block.
*/
$bkgcolor = get_field( 'bkgcolor');
$text = get_field('textblock-text');
$content = $text['textblock-content'];
$size = $text['textblock-text-size'];
$image = get_field('textblock-image');
$img = $image['textblock-image'];
$position = $image['textblock-image-position'];
?>

<section class="text-block <?php echo $bkgcolor ?>">
	<div class="text-block--text <?php echo $size ?>">
		<?php echo $content ?>
		Showing text
	</div>
	<div class="text-block--image <?php echo $position ?>">
		<img loading="lazy" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" width="100"/>
		Showing image
	</div>
</section>
<?php
/**
* The template used for displaying a text block.
*/
$bkgcolor = get_field( 'bkgcolor');
$text = get_field('textblock-text');
$content = $text['textblock-content'];
$size = $text['textblock-text-size'];
$images = get_field('textblock-images');
$position = get_field('textblock-image-position');
?>

<section class="text-block <?php echo $bkgcolor ?>">
	<div class="text-block--text <?php echo $size ?>">
		<div class="text-block--text__sticky">
			<?php echo $content ?>
		</div>
	</div>
	<?php if( have_rows('textblock-images') ): ?>
		<div class="text-block--image <?php echo $position ?>">
		<?php while( have_rows('textblock-images') ): the_row();
			$image = get_sub_field('textblock-image');
		?>
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>

<?php
/**
* The template used for displaying a text block.
*/
$bkgcolor = get_field( 'bkgcolor');
$text = get_field('textblock-text');
$content = $text['textblock-content'];
$size = $text['textblock-text-size'];
$keyline = $text['textblock-text-keyline'];
$images = get_field('textblock-images');
$position = get_field('textblock-image-position');
?>
<div class="<?php echo $bkgcolor ?>">
<div class="global-container">
<section class="text-block <?php echo $bkgcolor ?> <?php echo $size ?><?php if ( $images ) { ?> text-block--has-image<?php } ?> <?php echo $position ?>">
	
	<?php if ( $images) { ?>

	<div class="text-block--text<?php if ( $keyline  == '0' ) { ?> small<?php } ?>">
		<?php if ( $images ) { ?><div class="text-block--text__sticky"><?php } ?>
		<?php if ( $keyline  == '1' ) { ?><hr /><?php } ?>
			<?php echo $content ?>
		<?php if ( $images ) { ?></div><?php } ?>
	</div>
	<?php if( have_rows('textblock-images') ): ?>

		<?php if (count($images) == 1) {?>
			<div class="text-block--image">
			<?php while( have_rows('textblock-images') ): the_row();
				$image = get_sub_field('textblock-image');
			?>
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endwhile; ?>
			</div>
		<?php } else { ?>
			<div class="text-block--images">
			<?php while( have_rows('textblock-images') ): the_row();
				$image = get_sub_field('textblock-image');
			?>
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endwhile; ?>
			</div>
		<?php } ?>
	<?php endif; ?>

	<?php } else { ?>
	<div class="<?php echo $size ?>">
		<div class="text-block--text-inner">
			<?php if ( $keyline  == '1' ) { ?><hr /><?php } ?>
			<div class="text-block--text__content">
				<?php echo $content ?>
			</div>
		</div>
	</div>
	<?php } ?>
</section>
</div>
</div>
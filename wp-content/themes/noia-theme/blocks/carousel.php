<?php
/**
* The template used for displaying a carousel block.
*/
$items = get_field('carousel-item');
?>
<section class="carousel fade">
	<div class="carousel-slider slick-slider">
	<?php if( have_rows('carousel-item') ): ?>

		<?php while( have_rows('carousel-item') ): the_row();
			$image = get_sub_field('carousel-image');
			$overlay = get_sub_field('carousel-overlay');
			$content = get_sub_field('carousel-content');
			
		?>
		<div class="carousel-slider-item<?php if ( $overlay == '1' ) { ?> carousel-slider-item--overlay<?php } ?>" style="background-image:url(<?php echo $image['url']; ?>);">
		<?php if ( $overlay == '1' ) { ?><div class="carousel-slider-item--overlay"></div><?php } ?>
			<div class="carousel-slider-item--content">
				<?php echo $content ?>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>
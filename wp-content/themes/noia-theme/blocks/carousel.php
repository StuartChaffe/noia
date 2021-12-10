<?php
/**
* The template used for displaying a carousel block.
*/
$items = get_field('carousel-item');
$arrows = get_field('banner-arrows');
?>
<section class="carousel fade">
	<div class="carousel-slider<?php if ( $arrows == '0' ) { ?> arrows-hide<?php } ?> slick-slider">
	<?php if( have_rows('carousel-item') ): ?>

		<?php while( have_rows('carousel-item') ): the_row();
			$image = get_sub_field('carousel-image');
			$imagemobile = get_sub_field('carousel-image-mobile');
			$overlay = get_sub_field('carousel-overlay');
			$content = get_sub_field('carousel-content');
			
		?>

		<div class="carousel-slider-item<?php if ( $overlay == '1' ) { ?> carousel-slider-item--overlay<?php } ?> <?php if ( $imagemobile ) { ?>bkg-none<?php } ?>" style="background-image: url(<?php echo $image['url']; ?>)">
		<?php if ( $imagemobile ) { ?><div class="carousel-slider-item-mobile" style="background-image: url(<?php echo $imagemobile['url']; ?>)"><img loading="lazy" src="<?php echo $imagemobile['url']; ?>" alt="<?php echo $imagemobile['alt']; ?>"></div><?php } ?>
		
		<?php if ( $overlay == '1' ) { ?><div class="carousel-slider-item--overlay"></div><?php } ?>
			<div class="carousel-slider-item--content">
				<?php echo $content ?>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>
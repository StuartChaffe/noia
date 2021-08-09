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
<!-- <section class="carousel">
	<div class="carousel-slider slick-slider">
		<div class="carousel-slider-item parallax-window" data-parallax="scroll" data-image-src="/wp-content/uploads/jakob-owens-kWX141upca4-unsplash.jpg">
			<div class="carousel-slider-item--content">
				test
			</div>
		</div>
		<div class="carousel-slider-item parallax-window" data-parallax="scroll" data-image-src="/wp-content/uploads/blog-featured.png">
			<div class="carousel-slider-item--content">
				test 2
			</div>
		</div>
		<div class="carousel-slider-item parallax-window" data-parallax="scroll" data-image-src="/wp-content/uploads/jakob-owens-kWX141upca4-unsplash.jpg">
			<div class="carousel-slider-item--content">
				test 3
			</div>
		</div>
		<div class="carousel-slider-item parallax-window" data-parallax="scroll" data-image-src="/wp-content/uploads/blog-featured.png">
			<div class="carousel-slider-item--content">
				test 4
			</div>
		</div>
	</div>
</section> -->
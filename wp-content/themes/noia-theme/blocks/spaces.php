<?php
/**
 * The template used for displaying all spaces.
*/

?>
<?php
    $spaces = new WP_Query( array(
		'post_type' => 'spaces',
		'posts_per_page' => -1,
		'order' => 'ASC',
    ));
?>
<?php if ($spaces->have_posts()) : ?>
	<section class="spaces">
		<?php while($spaces->have_posts()) : $spaces->the_post(); ?>
		<?php
			$location = get_field( 'spaces-location', get_the_ID());
			$rooms = get_field( 'spaces-rooms', get_the_ID());
			$price = get_field( 'spaces-price', get_the_ID());
			$shortdesc = get_field( 'spaces-short-desc', get_the_ID());
			$images = get_field('spaces-images', get_the_ID());
			$imagesmobile = get_field('spaces-images-mobile', get_the_ID());

		?>
		<?php if( have_rows('spaces-images', get_the_ID()) ): ?>
			<div class="carousel">
				<div class="banner banner-space fade">
					<div class="animate-up banner-space--details">
						<?php if ( $shortdesc ) { ?>
							<p class="lead"><?php echo $shortdesc ?></p>
						<?php } ?>
						<?php if ( $location ) { ?>
							<p><?php echo $location ?></p>
						<?php } ?>
						<?php if ( $rooms ) { ?>
							<p><?php echo $rooms ?> Rooms</p>
						<?php } ?>
						<?php if ( $price ) { ?>
							<p>£<?php echo $price ?> pcm</p>
						<?php } ?>
						<a class="btn" href="<?php echo get_permalink(); ?>">Read more</a>
					</div>
					<div class="banner--content">
						<p class="animate"><?php the_title(); ?></p>
					</div>
				</div>
				<div class="carousel-slider">
				<?php while( have_rows('spaces-images', get_the_ID()) ): the_row();
					$image = get_sub_field('spaces-image', get_the_ID());
					$imagemobile = get_sub_field('spaces-image', get_the_ID());
				?>
					<div class="carousel-slider-item fade" style="background-image: url(<?php echo $image['url']; ?>)">&nbsp;</div>
				<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
		<?php endwhile; wp_reset_query(); ?>
	</section>
<?php endif; ?>
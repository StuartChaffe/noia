<?php
/**
* The template used for displaying a featured space.
*/
$featuredspaces = get_field( 'featured-space' );
?>

<section class="featured-space">
<?php if( $featuredspaces ): ?>
	<?php foreach( $featuredspaces as $featuredspace ):
		$title = get_the_title($featuredspace);
		$location = get_field( 'spaces-location', $featuredspace);
		$rooms = get_field( 'spaces-rooms', $featuredspace);
		$price = get_field( 'spaces-price', $featuredspace);
		$shortdesc = get_field( 'spaces-short-desc', $featuredspace);
		$images = get_field('spaces-images', $featuredspace);
	?>
	<?php if( have_rows('spaces-images', $featuredspace) ): ?>
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
					<a class="btn" href="<?php the_permalink($featuredspace); ?>">Read more</a>
				</div>
				<div class="banner--content">
					<p class="animate"><?php echo $title ?></p>
				</div>
			</div>
			<div class="carousel-slider">
			<?php while( have_rows('spaces-images', $featuredspace) ): the_row();
				$image = get_sub_field('spaces-image', $featuredspace);
			?>
				<div class="carousel-slider-item fade" style="background-image: url(<?php echo $image['url']; ?>)">&nbsp;</div>
			<?php endwhile; ?>
			</div>
		</div>
		

	<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>
</section>
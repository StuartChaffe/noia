<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$location = get_field( 'spaces-location' );
	$rooms = get_field( 'spaces-rooms' );
	$price = get_field( 'spaces-price' );
	$shortdesc = get_field( 'spaces-short-desc' );
	$images = get_field('spaces-images');

	// Image
	$image = get_field( 'post-image', $post);
	$alt = $image['alt'];
	$size = 'Square-large';
	$thumb = $image['sizes'][ $size ];
?>
	<?php if( have_rows('spaces-images') ): ?>
	<div class="carousel">
		<div class="banner banner-space fade">
			<div class="banner--content fit-content">
				<p class="animate"><?php the_title(); ?></p>
			</div>
		</div>
		<div class="carousel-slider">
		<?php while( have_rows('spaces-images') ): the_row();
			$image = get_sub_field('spaces-image');
		?>
			<div class="carousel-slider-item fade" style="background-image: url(<?php echo $image['url']; ?>)">&nbsp;</div>
		<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>


	<?php if ( $shortdesc ) { ?>
		<?php echo $shortdesc ?>
	<?php } ?>
	<?php if ( $location ) { ?>
		<?php echo $location ?>
	<?php } ?>
	<?php if ( $rooms ) { ?>
		<?php echo $rooms ?> Rooms
	<?php } ?>
	<?php if ( $price ) { ?>
		£<?php echo $price ?> pcm
	<?php } ?>
	
	<?php the_content(); ?>
	
<?php endwhile; ?>

<?php get_footer(); ?>
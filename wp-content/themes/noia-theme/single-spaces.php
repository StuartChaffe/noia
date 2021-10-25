<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$location = get_field( 'spaces-location' );
	$rooms = get_field( 'spaces-rooms' );
	$price = get_field( 'spaces-price' );
	$shortdesc = get_field( 'spaces-short-desc' );
	$images = get_field('spaces-details-images');
	$classes = get_body_class();
?>
	<?php if( have_rows('spaces-details-images') ): ?>
	<div class="carousel">
		<div class="banner banner-space fade">
			<div class="banner--content">
				<p class="animate"><?php the_title(); ?></p>
			</div>
		</div>
		<div class="carousel-slider">
		<?php while( have_rows('spaces-details-images') ): the_row();
			$image = get_sub_field('spaces-image');
			$overlay = get_sub_field( 'spaces-image-overlay');
		?>
			<div class="carousel-slider-item fade" style="background-image: url(<?php echo $image['url']; ?>)">
			<?php if ( $overlay == '1' ) { ?><div class="banner--overlay"></div><?php } ?>&nbsp;</div>
		<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
	<nav class="space-nav grad">
		<?php if ( in_array('high-street-house',$classes)) { ?>
		<ul class="page-nav">
			<li><p><?php the_title(); ?></p></li>
			<li><a href="#membership">Membership</a></li>
		</ul>
		<?php } else { ?>
		<ul class="page-nav">
				<li><p><?php the_title(); ?></p></li>
		</ul>
		<?php } ?>
	</nav>
		

	<div style="display: none">
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
	</div>
	
	<?php the_content(); ?>
	
<?php endwhile; ?>

<?php get_footer(); ?>
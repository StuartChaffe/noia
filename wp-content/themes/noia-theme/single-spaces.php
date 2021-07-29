<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$location = get_field( 'spaces-location' );
	$rooms = get_field( 'spaces-rooms' );
	$price = get_field( 'spaces-price' );
	$shortdesc = get_field( 'spaces-short-desc' );

	// Image
	$image = get_field( 'post-image', $post);
	$alt = $image['alt'];
	$size = 'Square-large';
	$thumb = $image['sizes'][ $size ];
?>
	<h1><?php the_title(); ?></h1>
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
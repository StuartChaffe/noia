<?php
/**
* The template used for displaying a featured space.
*/
$featuredspaces = get_field( 'featured-space' );

?>

<section class="featured-space">
Featured space
<?php if( $featuredspaces ): ?>
	<?php foreach( $featuredspaces as $featuredspace ):
		$title = get_the_title($featuredspace);
		$location = get_field( 'spaces-location', $featuredspace);
		$rooms = get_field( 'spaces-rooms', $featuredspace);
		$price = get_field( 'spaces-price', $featuredspace);
		$shortdesc = get_field( 'spaces-short-desc', $featuredspace);
	?>
	<?php echo $title ?>
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

		<a href="<?php the_permalink($featuredspace); ?>">Read</a>
	<?php endforeach; ?>
<?php endif; ?>
</section>
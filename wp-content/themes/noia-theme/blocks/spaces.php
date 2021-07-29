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

			// Image
			$image = get_field( 'post-image', $post);
			$alt = $image['alt'];
			$size = 'Square-large';
			$thumb = $image['sizes'][ $size ];
			$featuredimage = get_field( 'post-featured-image', $post);
		?>
		<div class="spaces-item">
			<?php the_title(); ?>
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
			<a class="button" href="<?php echo get_permalink(); ?>">Read more</a>
		</div>
		<?php endwhile; wp_reset_query(); ?>
	</section>
<?php endif; ?>
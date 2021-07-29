<?php
/**
* The template used for displaying a featured journal.
*/
$posts = get_field( 'featured-journal' );
?>

<section class="featured-journal">
	I will be a featured journal block
	<?php if( $posts ): ?>
	<?php foreach( $posts as $post): ?>
		<?php
			$subtitle = get_field( 'post-subtitle', $post);
			$shortdesc = get_field( 'post-short-desc', $post);
			$featuredtext = get_field( 'post-featured-text', $post);
			$title = get_the_title($post);
			$color = get_field( 'post-colour', $post);

			$image = get_field( 'post-image', $post);
			$alt = $image['alt'];
			$size = 'Square-large';
			$thumb = $image['sizes'][ $size ];

			$featuredimage = get_field( 'post-featured-image', $post);
		?>
		<?php the_title($post); ?>
	<?php endforeach; ?>
	<?php endif; ?>


	<a href="/journal">All Journal Posts</a>
</section>
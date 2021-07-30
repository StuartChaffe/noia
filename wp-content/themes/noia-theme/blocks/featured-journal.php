<?php
/**
* The template used for displaying a featured journal.
*/
$posts = get_field( 'featured-journal' );
?>

<section class="featured-journal">
	<?php if( $posts ): ?>
	<?php foreach( $posts as $post): ?>
		<?php
			$author = get_field( 'journal-author', $post);
			$editor = get_field( 'journal-editor', $post);
			$title = get_the_title($post);
			$categories = get_the_category($post);
			foreach( $categories as $category) {
				$cat = $category->name;
				$category_link = get_category_link( $category->term_id );
			}
		?>
		Latest Artical — <?php echo $cat ?>
		<?php echo $title ?>
		<?php echo $author ?>
		<?php echo $editor ?>

		<a href="<?php the_permalink($post); ?>">Read</a>
	<?php endforeach; ?>
	<?php endif; ?>


	<a href="/journal">All Journal Posts</a>
</section>
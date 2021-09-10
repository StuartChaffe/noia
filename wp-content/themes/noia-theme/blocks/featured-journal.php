<?php
/**
* The template used for displaying a featured journal.
*/
$posts = get_field( 'featured-journal' );
$featuredimage = get_the_post_thumbnail_url();
?>
<?php if( $posts ): ?>
	<?php foreach( $posts as $post): ?>
	<?php
		$author = get_field( 'journal-author', $post);
		$editor = get_field( 'journal-editor', $post);
		$title = get_the_title($post);
		$categories = get_the_category($post);
		$featuredimage = get_the_post_thumbnail_url($post);
		foreach( $categories as $category) {
			$cat = $category->name;
			$category_link = get_category_link( $category->term_id );
		}
	?>
	<section class="banner banner-journal fade" style="background-image: url(<?php echo $featuredimage ?>)">
		<div class="banner--overlay"></div>
		<div class="animate-up banner-journal--details">
			<p>LASTEST ARTICLE — <?php echo $cat ?></p>
			<p class="lead"><?php echo $title ?></p>

			<a class="btn" href="<?php the_permalink($post); ?>">Read more</a>
		</div>

		<a href="/journal" class="banner--link">
			<div class="banner--link__arrow arrow"><svg width="150" height="47" viewBox="0 0 150 47" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M150 23.5L110 0.405989V46.594L150 23.5ZM0 27.5H114V19.5H0V27.5Z" fill="currentColor"/>
			</svg></div>
			<div class="banner--link__inner">
				<div class="fit-content">
					<p class="animate">Journal</p>
				</div>
			</div>
		</a>
	</section>
	<?php endforeach; ?>
<?php endif; ?>
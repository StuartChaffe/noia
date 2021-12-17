<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<?php
	$author = get_field( 'journal-author');
	$editor = get_field( 'journal-editor');
	$featuredimage = get_the_post_thumbnail_url();
	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	$caption = get_the_post_thumbnail_caption();
	$categories = get_the_category();
	foreach( $categories as $category) {
		$cat = $category->name;
		$category_link = get_category_link( $category->term_id );
	}
?>
	<div class="journal--header grad">
		<div class="journal--header__inner container--small">
			<?php if ( $cat ) { ?><div class="journal--header__cat"><?php echo $cat; ?></div><?php } ?>	
			<h1><?php the_title(); ?></h1>
			<?php if ( $author ) { ?>
				Written by <?php echo $author; ?>.
			<?php } ?>	
			<br class="hidedesktop" />
			<?php if ( $editor ) { ?>
				Edited by <?php echo $editor; ?>
			<?php } ?>

			<div class="journal--header__share">
				<p>Share this article</p>
				<div class="addthis_inline_share_toolbox"></div>
			</div>
		</div>
	</div>
	<article>
		<div class="container--small">
			<div class="journal--image">
				<img loading="lazy" src="<?php echo $featuredimage; ?>" alt="<?php echo $alt; ?>" />
				<?php if ( $caption ) { ?><p class="caption"><?php echo $caption; ?></p><?php } ?>
			</div>
		</div>
		<?php the_content(); ?>
	</article>	
<?php endwhile; ?>

<?php get_footer(); ?>
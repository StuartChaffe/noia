<?php
// Template Name: News landing
?>
<?php get_header(); ?>
<main>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$journals = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 10,
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $paged,
	));

	global $wp_query;
	$tmp_query = $wp_query;
	$wp_query = null;
	$wp_query = $journals;

	$counter = 1;
?>

<?php if ( $journals->have_posts() ) : ?>
	<?php while ( $journals->have_posts() ) : $journals->the_post(); ?>

		<?php
			$author = get_field( 'journal-author');
			$editor = get_field( 'journal-editor');
			$title = get_the_title();
			$categories = get_the_category();
			$featuredimage = get_the_post_thumbnail_url();
			foreach( $categories as $category) {
				$cat = $category->name;
				$category_link = get_category_link( $category->term_id );
			}
		?>

		<?php if ( $counter == '1') { ?>
			<div class="banner banner-journal fade" style="background-image: url(<?php echo $featuredimage ?>)">
				<div class="banner--overlay"></div>
				<div class="banner-journal--details">

					<p>LASTEST ARTICLE — <?php echo $cat ?></p>
					<p class="lead"><?php echo $title ?></p>
					<?php echo $author ?>
					<?php echo $editor ?>

					<a class="btn" href="<?php the_permalink($post); ?>">Read more</a>
				</div>
				<div class="banner--content fit-content">
					<p class="animate">Journal</p>
				</div>
			</div>

			<?php if ( $counter == '! 1') { ?><div class="journals"><?php } ?>
			<?php } else { ?>
					<a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a>
			<?php } ?>
			<?php if ( $counter == '! 1') { ?></div><?php } ?>
		<?php $counter++; ?>
	<?php endwhile; ?>

<div class="pagination-nav">
	<div class="block block--inverted block--link">
	<?php
		next_posts_link( 'Next >', $journals->max_num_pages );
	?>
	</div>
</div>

<?php
	wp_reset_postdata();
	endif;
	$wp_query = null;
	$wp_query = $tmp_query;
?>
<?php endwhile; ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
</main>

<?php get_footer(); ?>
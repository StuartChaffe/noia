<?php
// Template Name: News landing
?>
<?php get_header(); ?>
<main>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$journals = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		'orderby' => 'date',
		'order' => 'DESC',
		// 'paged' => $paged,
	));

	global $wp_query;
	$tmp_query = $wp_query;
	$wp_query = null;
	$wp_query = $journals;

	// $counter = 1;
?>

<?php if ( $journals->have_posts() ) : ?>
	<?php while ( $journals->have_posts() ) : $journals->the_post(); ?>

		<?php
			$author = get_field('journal-author');
			$editor = get_field('journal-editor');
			$title = get_the_title();
			$categories = get_the_category();
			$featuredimage = get_the_post_thumbnail_url();
			foreach( $categories as $category) {
				$cat = $category->name;
				$category_link = get_category_link( $category->term_id );
			}
		?>

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

	<?php endwhile; ?>

<?php
	wp_reset_postdata();
	endif;
	$wp_query = null;
	$wp_query = $tmp_query;
?>
<?php endwhile; ?>

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
	<div class="journals grad">
	<?php while ( $journals->have_posts() ) : $journals->the_post(); ?>
		<?php if($counter++ > '1') { ?>  
		<?php
			$author = get_field('journal-author');
			$editor = get_field('journal-editor');
			$title = get_the_title();
			$image = get_field('journal-image');
			$categories = get_the_category();
			$featuredimage = get_the_post_thumbnail_url();
			foreach( $categories as $category) {
				$cat = $category->name;
				$category_link = get_category_link( $category->term_id );
			}
		?>
		<div class="journals-item">
			<p><?php echo $cat ?></p>
			<?php if ( $image ) { ?>
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php } ?>
			<div class="journals-item--title">
				<p><?php echo the_title(); ?></p>
				<a class="btn" href="<?php echo get_permalink(); ?>">Read</a>
			</div>
		</div>
		<?php } ?>
		<?php $counter++; ?>
	<?php endwhile; ?>
	</div>


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
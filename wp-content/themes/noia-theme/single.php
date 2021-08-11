<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$author = get_field( 'journal-author');
	$editor = get_field( 'journal-editor');
?>
	<article>
		<div class="journal--header grad">
		<?php
			$categories = get_the_category();
			foreach( $categories as $category) {
				$cat = $category->name;
				$category_link = get_category_link( $category->term_id );
			}
		?>
			<div class="journal--header__inner container--small">
				<?php if ( $cat ) { ?><div class="journal--header__cat"><?php echo $cat ?></div><?php } ?>	
				<h1><?php the_title(); ?></h1>
				<?php if ( $author ) { ?>
					Written by <?php echo $author ?>.
				<?php } ?>	
				<?php if ( $editor ) { ?>
					Edited by <?php echo $editor ?>
				<?php } ?>

				<div class="journal--header__share">
					<p>Share <?php echo the_title(); ?></p>
				</div>
			</div>
		</div>
		<?php the_content(); ?>
	</article>	
<?php endwhile; ?>
<?php get_footer(); ?>
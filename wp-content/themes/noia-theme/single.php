<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$author = get_field( 'journal-author');
	$editor = get_field( 'journal-editor');
?>
	<article>
		<h1><?php the_title(); ?></h1>
		<?php if ( $author ) { ?>
			Written by <?php echo $author ?>.
		<?php } ?>	
		<?php if ( $editor ) { ?>
			Edited by <?php echo $editor ?>
		<?php } ?>	
		<?php the_content(); ?>
	</article>	
<?php endwhile; ?>
<?php get_footer(); ?>
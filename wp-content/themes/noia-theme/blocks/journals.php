<?php
/**
 * The template used for displaying all journals.
*/
?>
<?php
    $events = new WP_Query( array(
        'post_type' => 'post',
		'posts_per_page' => -1,
        'orderby' => 'date',
		'order' => 'ASC',
    ));
?>
<?php if ($events->have_posts()) : ?>
	<?php while($events->have_posts()) : $events->the_post(); ?>
	<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
	<?php endwhile; wp_reset_query(); ?>
<?php endif; ?>
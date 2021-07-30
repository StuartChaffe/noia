<?php
/**
* The template used for displaying a logos block.
*/
$title = get_field( 'logos-title');
$bkgcolor = get_field( 'bkgcolor');
?>

<section class="logos <?php echo $bkgcolor ?>">
	<?php if ( $title ) { ?>
		<?php echo $title ?>
		<hr />
	<?php } ?>	
	<?php if( have_rows('logos') ): ?>
		<?php while( have_rows('logos') ): the_row();
			$image = get_sub_field('logo');
		?>
		<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100"/>

		<?php endwhile; ?>
	<?php endif; ?>
</section>
<?php
/**
* The template used for displaying a location images block.
*/
$items = get_field('location-item');
$title = get_field('location-title');
$content = get_field('location-content');
?>

<section class="location-images">
<?php if ( $title || $content ) { ?>
	<div class="global-container">	
	<div class="text-block">
		<div class="text-block--text__half">
			<div class="text-block--text-inner">
				<hr>
				<?php if ( $title ) { ?><h2><?php echo $title ?></h2><?php } ?>
				<div class="text-block--text__content">
					<?php if ( $content ) { ?><?php echo $content ?><?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>


	<div class="location-images--slider">
	<?php if( have_rows('location-item') ): ?>

		<?php while( have_rows('location-item') ): the_row();
			$image = get_sub_field('location-images');
			$content = get_sub_field('location-content');
		?>
		<div class="location-images--slider-item">
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			<div class="location-images--slider-item--content"><p><?php echo $content ?></p></div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>

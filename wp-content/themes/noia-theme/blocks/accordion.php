<?php
/**
* The template used for displaying an accordion block.
*/
$items = get_field('accordion-item');
?>
<section class="accordion-block fade">
	<div class="accordion-block--title">
		<div class="accordion-block--title__inner">
			<div class="fit-content">
				<p class="animate">Ideas for modern urban living</p>
			</div>
		</div>
	</div>
	<div class="accordion">
	<?php if( have_rows('accordion-item') ): ?>

		<?php while( have_rows('accordion-item') ): the_row();
			$image = get_sub_field('accordion-image');
			$title = get_sub_field('accordion-title');
			$content = get_sub_field('accordion-content');
			
		?>
		<div class="accordion-item" style="background-image:url(<?php echo $image['url']; ?>);">
			<div class="accordion-item--header">
				<div class="accordion-item--number"><div class="fit-content"><p>03</p></div></div>
				<div class="accordion-item--title"><p>— <?php echo $title ?></p></div>
			</div>
			<div class="show-content">[Read]</div>
			<div class="accordion-item--content">
				<?php echo $content ?>
			</div>


		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>
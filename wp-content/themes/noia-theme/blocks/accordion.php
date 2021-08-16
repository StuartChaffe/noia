<?php
/**
* The template used for displaying an accordion block.
*/
$items = get_field('accordion-item');
$counter = 1;
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

		<?php $i = 0; ; while( have_rows('accordion-item') ): the_row();
			$image = get_sub_field('accordion-image');
			$title = get_sub_field('accordion-title');
			$content = get_sub_field('accordion-content');
			$i++; $tCount = $i;
		?>
		<div class="accordion-item <?php echo $i ?>" style="background-image:url(<?php echo $image['url']; ?>);">
			<div class="accordion-item--header">
				<a href="" class="accordion-item--open">+</a>
				<div class="accordion-item--number"><div class="fit-content"><p>0<?php echo $i ?></p></div></div>
				<div class="accordion-item--title"><p>0<?php echo $i ?> — <?php echo $title ?></p></div>
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
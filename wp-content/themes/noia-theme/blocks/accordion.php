<?php
/**
* The template used for displaying an accordion block.
*/
$title = get_field('accordion-title');
$items = get_field('accordion-item');
$counter = 1;
?>
<section class="accordion-block fade">
	<?php if ( $title ) { ?>
	<div class="accordion-block--title">
		<div class="accordion-block--title__inner">
			<div class="fit-content">
				<p><?php echo $title ?></p>
			</div>
		</div>
	</div>
	<?php } ?>
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
				<div class="accordion-item--open"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9 11V13H0L8.74243e-08 11H9Z" fill="currentColor"/>
						<path d="M13 0H11V24H13V13H24V11L13 11V0Z" fill="currentColor"/>
					</svg>
				</div>
				<div class="accordion-item--number"><p>0<?php echo $i ?></p></div>
				<div class="accordion-item--title"><p>0<?php echo $i ?> — <?php echo $title ?></p></div>
			</div>
			<!-- <div class="show-content">[Read]</div> -->
			<div class="accordion-item--content">
				<?php echo $content ?>
			</div>


		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>
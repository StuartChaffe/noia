<?php
/**
* The template used for displaying a membership block.
*/
$title = get_field('membership-title');
$content = get_field('membership-content');
$price = get_field('membership-price');
$colone = get_field('membership-column-one');
$coltwo = get_field('membership-column-two');
$colthree = get_field('membership-column-three');
  
?>

<section class="membership-block" id="membership">
<?php if ( $title || $content ) { ?>
	<div class="text-block">
		<div class="text-block--text__half">
			<div class="text-block--text-inner">
				<hr>
				<div class="text-block--text-title">
					<?php if ( $title ) { ?><h2><?php echo $title ?></h2><?php } ?>
					<?php if ( $price ) { ?><span><p><?php echo $price ?></p></span><?php } ?>
				</div>
				<div class="text-block--text__content">
					<?php if ( $content ) { ?><?php echo $content ?><?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
	<div class="membership">

		<div class="membership-item">
			<div class="membership-item--image">
				<img loading="lazy" src="<?php echo $colone['column-one-image']['url'] ?>" alt="<?php echo $colone['column-one-image']['alt'] ?>">
			</div>
			<div class="membership-item--content">
				<?php echo $colone['column-one-content'] ?>
			</div>
		</div>
		<div class="membership-item">
			<div class="membership-item--image">
				<img loading="lazy" src="<?php echo $coltwo['column-two-image']['url'] ?>" alt="<?php echo $coltwo['column-two-image']['alt'] ?>">
			</div>
			<div class="membership-item--content">
				<?php echo $coltwo['column-two-content'] ?>
			</div>
		</div>
		<div class="membership-item">
			<div class="membership-item--image">
				<img loading="lazy" src="<?php echo $colthree['column-three-image']['url'] ?>" alt="<?php echo $colthree['column-three-image']['alt'] ?>">
			</div>
			<div class="membership-item--content">
				<?php echo $colthree['column-three-content'] ?>
			</div>
		</div>
	</div>
</section>
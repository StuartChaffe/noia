<?php
/**
* The template used for displaying a space description block.
*/
$bkgcolor = get_field( 'bkgcolor');
$contentleft = get_field( 'space-content-left' );
$contentright = get_field( 'space-content-right' );
$price = get_field( 'spaces-price', get_the_ID());
?>

<section class="space-description <?php echo $bkgcolor ?>" id="info">
	<div class="space-description-item space-description--left">
	<?php if ( $contentleft ) { ?>
		<?php echo $contentleft ?>
		<?php if ( $price ) { ?>
			<p>From £<?php echo $price ?> pcm</p>
		<?php } ?>
	<?php } ?>
	</div>
	<div class="space-description-item space-description--right">
	<?php if ( $contentright ) { ?>
		<?php echo $contentright ?>
	<?php } ?>
		<div class="share">
			Share <?php echo get_the_title() ?>:
			<div class="addthis_inline_share_toolbox"></div>
		</div>
	</div>
</section>
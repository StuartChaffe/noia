<?php
/**
* The template used for displaying a space description block.
*/
$bkgcolor = get_field( 'bkgcolor');
$contentleft = get_field( 'space-content-left' );
$contentright = get_field( 'space-content-right' );
?>

<section class="space-description <?php echo $bkgcolor ?>">
	<div class="space-description-item space-description--left">
	<?php if ( $contentleft ) { ?>
		<?php echo $contentleft ?>
	<?php } ?>
	</div>
	<div class="space-description-item space-description--right">
	<?php if ( $contentright ) { ?>
		<?php echo $contentright ?>
	<?php } ?>
	Share on social: 
	</div>
</section>
<?php
/**
* The template used for displaying a space description block.
*/
	$contentleft = get_field( 'space-content-left' );
	$contentright = get_field( 'space-content-right' );
?>

<section class="">
	<?php if ( $contentleft ) { ?>
		<?php echo $contentleft ?>
	<?php } ?>
	<?php if ( $contentright ) { ?>
		<?php echo $contentright ?>
	<?php } ?>
	Share on social: 
</section>
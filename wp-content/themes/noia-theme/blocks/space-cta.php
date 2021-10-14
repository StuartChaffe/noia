<?php
/**
* The template used for displaying a space cta block.
*/
$bkgimage = get_field( 'spacecta-background-image');
$content = get_field( 'spacecta-content');
$button = get_field( 'spacecta-button');
?>

<section class="space-cta" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>
	<div class="space-cta--content">
		<?php echo $content ?>

		<a href="#part-2" class="btn ajax-featherlight"><?php if ( $button ) { ?><?php echo $button ?><?php } else { ?>Stay with us<?php } ?></a>
	</div>
</section>
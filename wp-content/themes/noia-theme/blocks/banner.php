<?php
/*
* The template used for displaying a banner block.
*/
$image = get_field( 'banner-image');
$text = get_field( 'banner-text', false, false);
$bkgimage = get_field( 'banner-background-image');
$bkgvideo = get_field( 'banner-background-video');
?>
<section class="banner fade" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>
<?php if ( $image ) { ?>
	<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100"/>
<?php } ?>

<?php if ( $text ) { ?>
	<div class="banner--content fit-content">
		<p class="animate"><?php echo $text ?></p>
	</div>
<?php } ?>
</section>
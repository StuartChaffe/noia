<?php
/**
* The template used for displaying a cta block.
*/
$linkleft = get_field( 'cta-left-link');
$linkright = get_field( 'cta-right-link');
$bkgimage = get_field( 'cta-background-image');
$bkgvideo = get_field( 'cta-background-video');
?>

<section class="cta fade" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>

<?php if ( $bkgvideo ) { ?>
	<div class="cta--video">
		<video src="<?php echo $bkgvideo['url']; ?>" loop="" muted="" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video>
	</div>
<?php } ?>

	<div class="cta--links">
		<div class="cta--links-item">
			<a href="<?php echo $linkleft['url']; ?>"><p class="animate heading-1"><?php echo $linkleft['title']; ?></p> <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/src/icons/arrow-large.svg" alt="link arrow" /></div></a>
		</div>
		<div class="cta--links-item">
			<a href="<?php echo $linkright['url']; ?>"><p class="animate heading-1"><?php echo $linkright['title']; ?></p> <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/src/icons/arrow-large.svg" alt="link arrow" /></div></a>
		</div>
	</div>
</section>
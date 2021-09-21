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
	<?php if ( $linkleft ) { ?>
		<div class="cta--links-item">
			<a href="<?php echo $linkleft['url']; ?>"><p class="heading-1"><?php echo $linkleft['title']; ?></p> <div class="arrow"><svg width="100" height="31" viewBox="0 0 150 47" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M150 23.5L110 0.405989V46.594L150 23.5ZM0 27.5H114V19.5H0V27.5Z" fill="currentColor"></path>
		</svg></div></a>
		</div>
	<?php } ?>
	<?php if ( $linkright ) { ?>
		<div class="cta--links-item">
			<a href="<?php echo $linkright['url']; ?>"><p class="heading-1"><?php echo $linkright['title']; ?></p> <div class="arrow"><svg width="100" height="31" viewBox="0 0 150 47" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M150 23.5L110 0.405989V46.594L150 23.5ZM0 27.5H114V19.5H0V27.5Z" fill="currentColor"></path>
		</svg></div></a>
		</div>
	<?php } ?>
	</div>
</section>

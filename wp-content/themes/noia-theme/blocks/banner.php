<?php
/*
* The template used for displaying a banner block.
*/
$image = get_field( 'banner-image');
$logo = get_field( 'banner-logo');
$text = get_field( 'banner-text', false, false);
$link = get_field( 'banner-background-link');
$bkgimage = get_field( 'banner-background-image');
$bkgvideo = get_field( 'banner-background-video');
$overlay = get_field( 'banner-background-overlay');
?>
<section class="banner fade" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>
	<?php if ( $overlay == '1' ) { ?><div class="banner--overlay"></div><?php } ?>
<?php if ( $image ) { ?>
	<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php if ( $bkgvideo ) { ?>
	<div class="banner--video">
		<video src="<?php echo $bkgvideo['url']; ?>" loop="" muted="" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video>
	</div>
<?php } ?>

<?php if ( $logo ) { ?>
	<img class="banner--logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['url']; ?>" />
<?php } ?>
	
<?php if ( $text ) { ?>
	<?php if ( $link ) { ?>
	<a href="<?php echo $link['url'] ?>" class="banner--link">
		<div class="banner--link__arrow arrow"><img src="<?php echo get_template_directory_uri(); ?>/src/icons/arrow-large.svg" alt="link arrow" /></div>
		<div class="banner--link__inner">
			<div class="fit-content">
				<p class="animate"><?php echo $text ?></p>
			</div>
		</div>
	</a>
	<?php } else { ?>
	<div class="banner--content fit-content">
		<p class="animate"><?php echo $text ?></p>
	</div>
	<?php } ?>
<?php } ?>

</section>
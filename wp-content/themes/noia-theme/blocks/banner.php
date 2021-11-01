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
$textoverlay = get_field( 'banner-text-overlay');
$textcolor = get_field( 'banner-text-overlay-colour');
$bkgfade = get_field( 'banner-blur');
?>
<div class="container--large">
<?php if ( $textoverlay ) { ?><div class="banner-text--outer"><?php } ?>
<section class="banner fade" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>
	<?php if ( $overlay == '1' ) { ?><div class="banner--overlay"></div><?php } ?>
<?php if ( $image ) { ?>
	<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php if ( $bkgvideo ) { ?>
	<div class="banner--video">
		<video class="banner--video-item<?php if ( $bkgfade ) { ?> banner__blur<?php } ?>" src="<?php echo $bkgvideo['url']; ?>" loop="false" muted="" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video>
	</div>
<?php } ?>

<?php if ( $logo ) { ?>
	<img class="banner--logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
<?php } ?>
<?php if ( $textoverlay ) { ?>
<div class="banner--text-overlay <?php echo $textcolor ?>">
	<p><?php echo $textoverlay ?></p>
</div>
<?php } ?>

	
<?php if ( $text ) { ?>
	<?php if ( $link ) { ?>
	<a href="<?php echo $link['url'] ?>" class="banner--link">
		<div class="banner--link__arrow arrow">
		<svg width="150" height="47" viewBox="0 0 150 47" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M150 23.5L110 0.405989V46.594L150 23.5ZM0 27.5H114V19.5H0V27.5Z" fill="currentColor"/>
		</svg></div>
		<div class="banner--link__inner">
			<!-- <div class="fit-content"> -->
				<p class="animate"><?php echo $text ?></p>
			<!-- </div> -->
		</div>
	</a>
	<?php } else { ?>
	<!-- <div class="banner--outer"> -->
	<div class="banner--content">
		<p class="animate"><?php echo $text ?></p>
	</div>
	<!-- </div> -->
	<?php } ?>
<?php } ?>

</section>
<?php if ( $textoverlay ) { ?></div><?php } ?>
</div>
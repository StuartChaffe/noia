<?php
/*
* The template used for displaying a banner block.
*/
$image = get_field( 'banner-image');
$logo = get_field( 'banner-logo');
$mobilelogo = get_field( 'banner-mobile-logo');
$text = get_field( 'banner-text', false, false);
$link = get_field( 'banner-background-link');
$bkgimage = get_field( 'banner-background-image');
$bkgvideo = get_field( 'banner-background-video');
$bkgvideomobile = get_field( 'banner-background-video-mobile');
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
		<video class="banner--video-item<?php if ( $bkgfade ) { ?> banner__blur<?php } ?><?php if ( $bkgvideomobile ) { ?> hidemobile<?php } ?>" src="<?php echo $bkgvideo['url']; ?>" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video>
		<?php if ( $bkgvideomobile ) { ?><video class="banner--video-item<?php if ( $bkgfade ) { ?> banner__blur<?php } ?> hidedesktop" src="<?php echo $bkgvideomobile['url']; ?>" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video><?php } ?>
	</div>

	<div class="banner--video__button">
		<div class="button-unmute">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="25px" height="19.23px" viewBox="403.5 502.385 25 19.23" enable-background="new 403.5 502.385 25 19.23"
				xml:space="preserve">
			<path d="M407.346,508.154H403.5v7.692h3.846l7.692,5.77h1.923v-19.23h-1.923L407.346,508.154z M419.681,509.28
				c-0.375-0.375-0.984-0.375-1.36,0s-0.375,0.984,0,1.36c0.751,0.751,0.751,1.968,0,2.719c-0.375,0.376-0.375,0.984,0,1.36
				c0.375,0.375,0.984,0.375,1.36,0C421.183,513.218,421.183,510.782,419.681,509.28z M422.401,506.56c-0.375-0.375-0.984-0.375-1.36,0
				s-0.375,0.984,0,1.36c2.253,2.253,2.253,5.906,0,8.159c-0.375,0.376-0.375,0.984,0,1.36c0.375,0.375,0.984,0.375,1.36,0
				C425.405,514.435,425.405,509.565,422.401,506.56z M425.12,503.841c-0.375-0.375-0.984-0.375-1.36,0
				c-0.375,0.375-0.375,0.984,0,1.36c3.755,3.755,3.755,9.843,0,13.598c-0.375,0.376-0.375,0.984,0,1.36
				c0.375,0.375,0.984,0.375,1.36,0C429.626,515.652,429.626,508.347,425.12,503.841z" fill="white"/>
			</svg>
		</div>
		<div class="button-mute">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="25px" height="18.519px" viewBox="419.5 502.74 25 18.519" enable-background="new 419.5 502.74 25 18.519"
				xml:space="preserve">
			<path d="M423.204,508.296H419.5v7.408h3.704l7.408,5.556h1.852V502.74h-1.852L423.204,508.296z M444.5,509.222l-1.852-1.852
				l-2.778,2.778l-2.777-2.778l-1.823,1.838l2.749,2.792l-2.778,2.777l1.852,1.853l2.777-2.778l2.778,2.778l1.852-1.853L441.722,512
				L444.5,509.222z" fill="white"/>
			</svg>
		</div>
	</div>
<?php } ?>

<?php if ( $logo ) { ?>
	<img class="banner--logo<?php if ( $logo ) { ?> hidemobile<?php } ?>" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
<?php } ?>
<?php if ( $mobilelogo ) { ?>
	<img class="banner--logo banner--logo-large hidedesktop" src="<?php echo $mobilelogo['url']; ?>" alt="<?php echo $mobilelogo['alt']; ?>" />
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
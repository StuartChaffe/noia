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
$poster = get_field( 'banner-video-poster');
$bkgvideomobile = get_field( 'banner-background-video-mobile');
$postermobile = get_field( 'banner-background-video-poster-mobile');
$overlay = get_field( 'banner-background-overlay');
$textoverlay = get_field( 'banner-text-overlay');
$textcolor = get_field( 'banner-text-overlay-colour');
$bkgfade = get_field( 'banner-blur');
$controls = get_field( 'banner-background-video-control');
?>
<!-- <div class="container--large"> -->
<?php if ( $textoverlay ) { ?><div class="banner-text--outer"><?php } ?>
<section class="banner fade" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>
	<?php if ( $overlay == '1' ) { ?><div class="banner--overlay"></div><?php } ?>
<?php if ( $image ) { ?>
	<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php } ?>

<?php if ( $bkgvideo ) { ?>
	<div class="banner--video">
		<video id="video-desktop" class="banner--video-desktop banner--video-item<?php if ( $bkgfade ) { ?> banner__blur<?php } ?><?php if ( $bkgvideomobile ) { ?> hidemobile<?php } ?>" src="<?php echo $bkgvideo['url']; ?>" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster="<?php if ( $poster ) { ?><?php echo $poster ?><?php } ?>"></video>
		<?php if ( $bkgvideomobile ) { ?><video id="video-mobile" class="banner--video-mobile banner--video-item<?php if ( $bkgfade ) { ?> banner__blur<?php } ?> hidedesktop" src="<?php echo $bkgvideomobile['url']; ?>" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster="<?php if ( $postermobile ) { ?><?php echo $postermobile ?><?php } ?>"></video><?php } ?>
	</div>
	<?php if ( $controls ) { ?>
		<div class="banner--video__button hidemobile">
			<div class="button button-replay">
			<svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_523_787)">
					<path class="fill" d="M12 2.5L8 5L8 -1.74846e-07L12 2.5Z" fill="currentColor"/>
					<path class="fill" fill-rule="evenodd" clip-rule="evenodd" d="M8 2C3.58172 2 0 5.58172 0 10C0 14.4183 3.58172 18 8 18C12.4183 18 16 14.4183 16 10H15C15 13.866 11.866 17 8 17C4.13401 17 1 13.866 1 10C1 6.13401 4.13401 3 8 3V2Z" fill="currentColor"/>
				</g>
				<defs>
					<clipPath id="clip0_523_787">
						<rect class="fill" width="16" height="20" fill="currentColor"/>
					</clipPath>
				</defs>
			</svg>
			</div>
			<div class="banner--video__button-desktop">
				<div class="button button-unmute">
					<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="fill" d="M15 20L6.94444 14.4444L0 14.4V5.6H6.94444L15 0V20Z" fill="white"/>
						<path class="fill" fill-rule="evenodd" clip-rule="evenodd" d="M28.8995 5.71428L28.1924 5L23.9502 9.28522L19.7081 5.00005L19.001 5.71433L23.2431 9.9995L19 14.2857L19.7071 15L23.9502 10.7138L28.1934 15L28.9005 14.2857L24.6573 9.9995L28.8995 5.71428Z" fill="currentColor"/>
					</svg>
				</div>
				<div class="button-mute">
					<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="stoke" d="M24 18C25.6351 16.8826 26.8781 15.1649 27.5192 13.1364C28.1603 11.1076 28.1603 8.89227 27.5192 6.86362C26.8782 4.83502 25.6351 3.1173 24 2" stroke="currentColor"/>
						<path class="stoke" d="M21.0037 14C22.2525 13.1033 23.0008 11.6037 23 9.99902C22.9993 8.39438 22.2496 6.89529 21 6" stroke="currentColor"/>
						<path class="fill" d="M15 20L6.94444 14.4444L0 14.4V5.6H6.94444L15 0V20Z" fill="currentColor"/>
					</svg>


				</div>
			</div>
		</div>
		<?php if ( $bkgvideomobile ) { ?>
		<div class="banner--video__button hidedesktop">
			<div class="button-replay-mobile">
				<svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="stroke" d="M10.6939 5C5.36227 5 1 9.62822 1 14.9944C1 20.5204 5.55713 25 11.1786 25C15.8716 25 19.8228 21.878 21 17.6316" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
					<path class="fill" d="M18 5L10 10L10 -3.49691e-07L18 5Z" fill="currentColor"/>
				</svg>
			</div>
			<div class="banner--video__button-mobile">
				<div class="button button-unmute">
					<svg width="41" height="25" viewBox="0 0 41 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="fill" fill-rule="evenodd" clip-rule="evenodd" d="M23.8236 18.9706C24.2141 19.3611 24.8473 19.3611 25.2378 18.9706L29.4805 14.7279L33.7231 18.9706C34.1136 19.3611 34.7468 19.3611 35.1373 18.9706C35.5278 18.58 35.5278 17.9469 35.1373 17.5564L30.8947 13.3137L35.1373 9.07107C35.5278 8.68054 35.5278 8.04738 35.1373 7.65685C34.7468 7.26633 34.1136 7.26633 33.7231 7.65685L29.4805 11.8995L25.2378 7.65685C24.8473 7.26633 24.2141 7.26633 23.8236 7.65685C23.4331 8.04738 23.4331 8.68054 23.8236 9.07107L28.0663 13.3137L23.8236 17.5563C23.4331 17.9469 23.4331 18.58 23.8236 18.9706Z" fill="currentColor"/>
						<path class="fill" d="M16.7176 23.8986L8.54926 18.1808C8.38117 18.0631 8.18097 18 7.97579 18H7.29102H1.29102C0.738731 18 0.291016 17.5523 0.291016 17V8C0.291016 7.44772 0.738731 7 1.29102 7H7.29102H7.97579C8.18097 7 8.38117 6.93689 8.54926 6.81923L16.7176 1.10142C17.3803 0.63748 18.291 1.11163 18.291 1.92066V23.0793C18.291 23.8884 17.3803 24.3625 16.7176 23.8986Z" fill="currentColor"/>
					</svg>
				</div>
				<div class="button-mute">
					<svg width="36" height="25" viewBox="0 0 36 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="stroke" d="M28.8535 23C31.0764 21.6033 32.7663 19.4562 33.6378 16.9205C34.5093 14.3845 34.5093 11.6153 33.6378 9.07952C32.7663 6.54378 31.0764 4.39663 28.8535 3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						<path class="stroke" d="M23.9662 18C25.7725 16.8791 26.8547 15.0046 26.8536 12.9988C26.8526 10.993 25.7682 9.11912 23.9609 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
						<path class="fill" d="M17.0926 23.8986L8.92426 18.1808C8.75617 18.0631 8.55597 18 8.35079 18H7.66602H1.66602C1.11373 18 0.666016 17.5523 0.666016 17V8C0.666016 7.44772 1.11373 7 1.66602 7H7.66602H8.35079C8.55597 7 8.75617 6.93689 8.92426 6.81923L17.0926 1.10142C17.7553 0.63748 18.666 1.11163 18.666 1.92066V23.0793C18.666 23.8884 17.7553 24.3625 17.0926 23.8986Z" fill="currentColor"/>
					</svg>
				</div>
			</div>
		</div>
		<?php } ?>
	<?php } ?>
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
<!-- </div> -->
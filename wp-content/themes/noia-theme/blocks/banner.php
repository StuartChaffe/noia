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
			<div class="banner--video__button-mobile">
				<div class="button button-unmute">
					<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="fill" d="M15 20L6.94444 14.4444L0 14.4V5.6H6.94444L15 0V20Z" fill="currentColor"/>
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
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
			<svg width="18px" height="20px" viewBox="0 0 18 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g class="fill" transform="translate(-134.000000, -68.000000)" fill="currentColor">
							<g transform="translate(134.000000, 68.000000)">
								<path d="M9,3.33333333 C4.6125,3.33333333 1.125,6.77777778 1.125,11.1111111 C1.125,15.4444444 4.6125,18.8888889 9,18.8888889 C13.3875,18.8888889 16.875,15.4444444 16.875,11.1111111 L18,11.1111111 C18,16 13.95,20 9,20 C4.05,20 0,16 0,11.1111111 C0,6.22222222 4.05,2.22222222 9,2.22222222 L9,0 L13.5,2.77777778 L9,5.55555556 L9,3.33333333 Z"></path>
							</g>
						</g>
					</g>
				</svg>
			</div>
			<div class="banner--video__button-desktop">
				<div class="button button-unmute">
					<svg width="29px" height="20px" viewBox="0 0 29 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g class="fill" transform="translate(-134.000000, -124.000000)" fill="currentColor">
								<g transform="translate(134.000000, 124.000000)">
									<polygon fill-rule="nonzero" points="15 20 6.9 14.4 0 14.4 0 5.6 6.9 5.6 15 0"></polygon>
									<polygon points="29 5.7 28.3 5 24 9.3 19.8 5 19.1 5.7 23.3 10 19.1 14.3 19.8 15 24 10.7 28.2 15 28.9 14.3 24.8 10"></polygon>
								</g>
							</g>
						</g>
					</svg>
				</div>
				<div class="button-mute">
				<svg width="29px" height="20px" viewBox="0 0 29 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g class="fill" transform="translate(-134.000000, -101.000000)" fill="currentColor" fill-rule="nonzero">
            <g transform="translate(134.000000, 101.000000)">
                <polygon points="15 20 6.9 14.4 0 14.4 0 5.6 6.9 5.6 15 0"></polygon>
                <path d="M24.8,18.4 C26.5,17.2 27.8,15.4 28.5,13.3 C28.8,12.2 29,11.1 29,10 C29,8.9 28.8,7.8 28.5,6.7 C27.8,4.6 26.5,2.8 24.8,1.6 L24.2,2.4 C25.7,3.4 26.9,5.1 27.5,7 C27.8,8 28,9 28,10 C28,11 27.8,12 27.5,13 C26.9,14.9 25.7,16.6 24.2,17.6 L24.8,18.4 L24.8,18.4 Z" ></path>
                <path d="M21.8,14.4 L21.8,14.4 C23.2,13.4 24,11.8 24,10 L24,10 C24,8.2 23.2,6.6 21.8,5.6 L21.2,6.4 C22.3,7.2 23,8.5 23,10 L23,10 C23,11.4 22.3,12.8 21.2,13.6 L21.8,14.4"></path>
            </g>
        </g>
    </g>
</svg>
				</div>
			</div>
		</div>
		<?php if ( $bkgvideomobile ) { ?>
		<div class="banner--video__button hidedesktop">
			<div class="button-replay-mobile">
				<svg width="18px" height="20px" viewBox="0 0 18 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g class="fill" transform="translate(-134.000000, -68.000000)" fill="currentColor">
							<g transform="translate(134.000000, 68.000000)">
								<path d="M9,3.33333333 C4.6125,3.33333333 1.125,6.77777778 1.125,11.1111111 C1.125,15.4444444 4.6125,18.8888889 9,18.8888889 C13.3875,18.8888889 16.875,15.4444444 16.875,11.1111111 L18,11.1111111 C18,16 13.95,20 9,20 C4.05,20 0,16 0,11.1111111 C0,6.22222222 4.05,2.22222222 9,2.22222222 L9,0 L13.5,2.77777778 L9,5.55555556 L9,3.33333333 Z"></path>
							</g>
						</g>
					</g>
				</svg>
			</div>
			<div class="banner--video__button-mobile">
				<div class="button button-unmute">
					<svg width="29px" height="20px" viewBox="0 0 29 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g class="fill" transform="translate(-134.000000, -124.000000)" fill="currentColor">
								<g transform="translate(134.000000, 124.000000)">
									<polygon fill-rule="nonzero" points="15 20 6.9 14.4 0 14.4 0 5.6 6.9 5.6 15 0"></polygon>
									<polygon points="29 5.7 28.3 5 24 9.3 19.8 5 19.1 5.7 23.3 10 19.1 14.3 19.8 15 24 10.7 28.2 15 28.9 14.3 24.8 10"></polygon>
								</g>
							</g>
						</g>
					</svg>
				</div>
				<div class="button-mute">
				<svg width="29px" height="20px" viewBox="0 0 29 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g class="fill" transform="translate(-134.000000, -101.000000)" fill="currentColor" fill-rule="nonzero">
            <g transform="translate(134.000000, 101.000000)">
                <polygon points="15 20 6.9 14.4 0 14.4 0 5.6 6.9 5.6 15 0"></polygon>
                <path d="M24.8,18.4 C26.5,17.2 27.8,15.4 28.5,13.3 C28.8,12.2 29,11.1 29,10 C29,8.9 28.8,7.8 28.5,6.7 C27.8,4.6 26.5,2.8 24.8,1.6 L24.2,2.4 C25.7,3.4 26.9,5.1 27.5,7 C27.8,8 28,9 28,10 C28,11 27.8,12 27.5,13 C26.9,14.9 25.7,16.6 24.2,17.6 L24.8,18.4 L24.8,18.4 Z" ></path>
                <path d="M21.8,14.4 L21.8,14.4 C23.2,13.4 24,11.8 24,10 L24,10 C24,8.2 23.2,6.6 21.8,5.6 L21.2,6.4 C22.3,7.2 23,8.5 23,10 L23,10 C23,11.4 22.3,12.8 21.2,13.6 L21.8,14.4"></path>
            </g>
        </g>
    </g>
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
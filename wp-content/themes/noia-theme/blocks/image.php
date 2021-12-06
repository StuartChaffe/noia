<?php
/**
* The template used for displaying a full width image block.
*/
$image = get_field( 'image-image');
$video = get_field( 'image-video');
$videomobile = get_field( 'image-video-mobile');
$content = get_field( 'image-content');
$link = get_field('image-button');
$type = get_field('image-video');
?>

<!-- <div class="global-container"> -->
<?php if ( $type == 'Image' ) { ?> 
<section class="image" <?php if ( $image ) { ?>style="background-image: url(<?php echo $image['url']; ?>)"<?php } ?>>
	<?php if ( $content ) { ?>
		<?php echo $content ?>
	<?php } ?>	
	<?php if ( $link ) { ?>
		<a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
	<?php } ?>	
</section>
<?php } else { ?>
	<video class="video video--full<?php if ( $videomobile ) { ?> hidemobile<?php } ?>" src="<?php echo $video['url']; ?>" loop="false" muted="" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video>
	<?php if ( $videomobile ) { ?><video class="video hidedesktop" src="<?php echo $videomobile['url']; ?>" loop="false" muted="" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video><?php } ?>
<?php } ?>	
<!-- </div> -->
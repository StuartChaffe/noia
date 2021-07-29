<?php
/**
* The template used for displaying a full width image block.
*/
$image = get_field( 'image-image');
$content = get_field( 'image-content');
$link = get_field('image-button');
?>

<section class="image">
	I will be an image block
	<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100"/>
	<?php if ( $content ) { ?>
		<?php echo $content ?>
	<?php } ?>	
	<?php if ( $link ) { ?>
		<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
	<?php } ?>	
</section>
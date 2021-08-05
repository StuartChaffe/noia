<?php
/**
* The template used for displaying a full width image block.
*/
$image = get_field( 'image-image');
$content = get_field( 'image-content');
$link = get_field('image-button');
?>
<div class="table">
	<div class="table__cell"><span>A</span></div>
	<div class="table__cell"><span>B</span></div>
	<div class="table__cell"><span>C</span></div>
	<div class="table__cell"><span>D</span></div>
	<div class="table__cell"><span>E</span></div>
</div>
<section class="image" <?php if ( $image ) { ?>style="background-image: url(<?php echo $image['url']; ?>)"<?php } ?>>
	<?php if ( $content ) { ?>
		<?php echo $content ?>
	<?php } ?>	
	<?php if ( $link ) { ?>
		<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
	<?php } ?>	
</section>
<?php
/**
* The template used for displaying an image block.
*/
$content = get_field('imageblock-content');
$image = get_field('imageblock-images');
$imageone = $image['imageblock-images-1'];
$imagetwo = $image['imageblock-images-2'];
?>

<div class="global-container">
<section class="image-block">
	<?php if ( $content) { ?>
	<div class="image-block--text">
		<div class="text-block--text__sticky">
			<?php echo $content ?>
		</div>
	</div>
	<?php } ?>
	<div class="image-block--images">
		<div class="image-block--images-item">
			<img loading="lazy" src="<?php echo $imageone['url']; ?>" alt="<?php echo $imageone['alt']; ?>" />
		</div>
		<div class="image-block--images-item">
		<img loading="lazy" src="<?php echo $imagetwo['url']; ?>" alt="<?php echo $imagetwo['alt']; ?>" />
		</div>
	</div>
</section>
</div>
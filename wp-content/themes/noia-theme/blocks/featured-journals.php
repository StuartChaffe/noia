<?php
/**
* The template used for displaying a featured journal.
*/
$title = get_field( 'journals_title' );
$featuredposts = get_field( 'featured_journals' );

?>
<div class="journals">

<?php if ( $title ) { ?>
	<h2><?php echo $title ?></h2>
<?php } ?>

<?php if( $featuredposts ) { ?>
<div class="journals">

			<?php foreach( $featuredposts as $featuredpost ):

				$journaltitle = get_the_title($featuredpost);
				$categories = get_the_category($featuredpost);
				$image = get_field('journal-image', $featuredpost);
				foreach( $categories as $category) {
					$cat = $category->name;
					$category_link = get_category_link( $category->term_id );
				}
				
			?>
			<div class="journals-item">
				<p><?php echo $cat ?></p>
				<?php if ( $image ) { ?>
					<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php } ?>
				<div class="journals-item--title">
					<p><?php echo $journaltitle; ?></p>
					<a class="btn" href="<?php echo get_permalink($featuredpost); ?>">Read</a>
				</div>
				
			</div>
		<?php endforeach; ?>
</div>
<?php } ?>
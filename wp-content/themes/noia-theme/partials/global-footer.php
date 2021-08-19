<?php
/*
* The template used for displaying a banner block.
*/
$logo = get_field( 'logo-footer', 'options');
?>

<div class="ask-btn"><a href="#" class="ask" data-toggle="modal" data-target="#contact"><img src="<?php echo get_template_directory_uri(); ?>/src/images/ask.svg" alt="ask Logo" /></a></div>
<?php get_template_part( 'partials/global-contact' ); ?>
<footer class="global-footer">
	<div class="global-footer--logo">
		<?php if ( $logo ) { ?>
		<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		<?php } ?>
	</div>
	<div class="global-footer--content">
		<div class="global-footer--content__links">
			<div class="global-footer--content__explore">
				<p class="heading">Explore</p>
				<?php wp_nav_menu(array(
					'theme_location' => 'footer-1',
					'container' => '',
					'container_class' => '',
					'menu_class' => ''
				)); ?>
			</div>
			<div class="global-footer--content__info">
				<p class="heading">More information</p>
				<?php wp_nav_menu(array(
					'theme_location' => 'footer-2',
					'container' => '',
					'container_class' => '',
					'menu_class' => ''
				)); ?>
			</div>
			<div class="global-footer--content__contact">
			<?php if(get_field('footer-content', 'options')) { ?>
				<?php the_field('footer-content', 'options'); ?>
			<?php } ?>
			</div>
		</div>
		<div class="global-footer--content__foot">
			<div class="global-footer--content__copy">
				<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
			</div>
			<div class="global-footer--content_website">
				<p>Designed: <a href="https://peterandpaul.co.uk/" target="_blank">Peter & Paul</a> / Build: <a href="https://www.stuartchaffe.co.uk/" target="_blank">Stuart Chaffe</a></p>
			</div>
		</div>
	</div>
</footer>

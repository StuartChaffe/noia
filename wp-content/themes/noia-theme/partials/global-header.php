<header class="global-header__menu">
	<button class="global-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
		<span class="global-header--nav-box">
			<span class="global-header--nav-inner"><span>Mobile Menu</span></span>
		</span>
	</button>
	<div class="mobile-menu" id="mobile-menu">
		<div class="mobile-menu--links">
			<p class="heading">Explore</p>
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'container_class' => 'mobile-header__nav',
				'menu_class' => 'mobile-nav'
			)); ?>

			<p class="heading">Contact</p>
			<p class="heading-3">Stay/Live with Noiascape</p>
			<p class="heading-3">Collaborate with Noiscape</p>
			<a href="" data-featherlight="#ask" class="btn">Speak to us</a>
		</div>
		<div class="mobile-menu--foot">
			<div class="mobile-menu--foot__contact">
				<a href=""><p>hello@noiascape.com</p></a>
				<a href=""><p>+44 (0)208 762 9185</p></a>
				<div class="mobile-menu--foot__social">
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-twitter.svg" alt="twitter Logo" /></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-insta.svg" alt="instagram Logo" /></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-medium.svg" alt="medium Logo" /></a>
				</div>
			</div>
			<div class="mobile-menu--foot__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-footer.svg" alt="Noia Logo" />
			</div>
		</div>
	</div>
</header>

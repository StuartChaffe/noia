<header class="global-header__menu">
	<button class="global-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
		<span class="global-header--nav-box">
			<span class="global-header--nav-logo"><svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M22 28H19.9048V1.86667H2.09524V28L0 28V0H22V28Z" fill="white"/>
			</svg></span>

			<span class="global-header--nav-close">
				<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square"><g id="Group" transform="translate(2.000000, 2.000000)" stroke="#FFFFFF" stroke-width="2"><line x1="0" y1="0" x2="7" y2="7" id="Line"></line><line x1="10" y1="10" x2="20" y2="20" id="Line"></line><line x1="0" y1="0" x2="20" y2="20" id="Line" transform="translate(10.000000, 10.000000) scale(-1, 1) translate(-10.000000, -10.000000) "></line></g></g></svg>
			</span>
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
			<a href="#" class="btn" data-toggle="modal" data-target="#contact">Speak to us</a>
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

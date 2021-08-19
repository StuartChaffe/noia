<header class="global-header__menu">
	<button class="global-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
		<span class="global-header--nav-box">
		<span class="global-header--nav-logo"><svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M22 28H19.9048V1.86667H2.09524V28L0 28V0H22V28Z" fill="white"/>
		</svg></span>

		<span class="global-header--nav-close"><svg width="40" height="40" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M14.1714 18.4142L15.5856 19.8284L9.22168 26.1924L7.80747 24.7782L14.1714 18.4142Z" fill="white"/>
		<path d="M9.22168 7.80761L7.80747 9.22183L24.778 26.1924L26.1922 24.7782L18.4141 17L26.1922 9.22183L24.778 7.80761L16.9999 15.5858L9.22168 7.80761Z" fill="white"/>
		</svg>
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

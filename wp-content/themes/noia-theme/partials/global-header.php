<header class="global-header__menu">
	<button class="global-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
		<span class="global-header--nav-box">
			<span class="global-header--nav-logo"><svg viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M22 28H19.9048V1.86667H2.09524V28L0 28V0H22V28Z" fill="white"/>
			</svg></span>

			<span class="global-header--nav-close">
				<svg viewBox="0 0 24 24"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square"><g transform="translate(2.000000, 2.000000)" stroke="#FFFFFF" stroke-width="2"><line x1="0" y1="0" x2="7" y2="7" id="Line"></line><line x1="10" y1="10" x2="20" y2="20" id="Line"></line><line x1="0" y1="0" x2="20" y2="20" id="Line" transform="translate(10.000000, 10.000000) scale(-1, 1) translate(-10.000000, -10.000000) "></line></g></g></svg>
			</svg>
			</span>
		</span>
	</button>
	<div class="mobile-menu" id="mobile-menu">
		<div class="mobile-menu--links fade-first">
			<p class="heading">Explore</p>
			<?php wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'container_class' => 'mobile-header__nav',
				'menu_class' => 'mobile-nav'
			)); ?>

			<div class="fade-second">
				<p class="heading">Contact</p>
				<a href="#part-1" class="ajax-featherlight"><p class="heading-3">Interested in staying or collaborating with Noiascape?</p></a>
			</div>
		</div>
		<div class="mobile-menu--foot fade-third">
			<div class="mobile-menu--foot__contact">
				<div class="mobile-menu--foot__social">
					<a href="https://twitter.com/noiascape/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-twitter.svg" alt="twitter Logo" /></a>
					<a href="https://www.instagram.com/noiascape/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-insta.svg" alt="instagram Logo" /></a>
					<!-- <a href=""><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-medium.svg" alt="medium Logo" /></a> -->
				</div>

				<a href=""><p>hello@noiascape.com</p></a>
			</div>
			<div class="mobile-menu--foot__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-footer.svg" alt="Noia Logo" />
			</div>
		</div>
	</div>
</header>

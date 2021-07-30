<header class="global-header__menu">
	<button class="global-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
		<span class="global-header--nav-box">
			<span class="global-header--nav-inner"><span>Mobile Menu</span></span>
		</span>
	</button>
	<div class="mobile-menu" id="mobile-menu">
		<p>Explore</p>
		<?php wp_nav_menu(array(
			'theme_location' => 'secondary',
			'container' => 'nav',
			'container_class' => 'mobile-header__nav',
			'menu_class' => 'mobile-nav'
		)); ?>

		<p>Enquire</p>
	</div>
</header>

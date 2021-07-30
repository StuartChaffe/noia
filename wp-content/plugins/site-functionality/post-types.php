<?php

add_action('init', 'origin_cpts');

function origin_cpts() {
	$post_type_name		= "spaces";
	$single_name		= "Space";
	$plural_name		= "Spaces";
	$icon				= "dashicons-admin-home";
	$gutenberg_enabled	= true;

	$post_type_options = array(
	    'label'                 => $single_name,
	    'public'                => true,
	    'menu_icon'             => $icon,
	    'show_ui'               => true,
	    'show_in_menu'          => true,
	    'capability_type'       => 'post',
	    'hierarchical'          => true,
	    'rewrite'               => array(
	        'slug'                  => 'spaces',
	        'with_front'            => '0'
	    ),
	    'query_var'             => true,
	    'has_archive'           => false,
		'show_in_rest'			=> $gutenberg_enabled,
	    'supports'              => array(
	        'title',
	        'editor',
	        'revisions',
	        'thumbnail',
	        'author',
	        'page-attributes',
	    ),
	    'labels'                => array(
	        'name'                  => $single_name,
	        'singular_name'         => $single_name,
	        'menu_name'             => $plural_name,
	        'add_new'               => 'Add ' . $single_name,
	        'add_new_item'          => 'Add New ' . $single_name,
	        'edit'                  => 'Edit',
	        'edit_item'             => 'Edit ' . $single_name,
	        'new_item'              => 'New '. $single_name,
	        'view'                  => 'View '. $single_name,
	        'view_item'             => 'View '. $single_name,
	        'search_items'          => 'Search ' . $plural_name,
	        'not_found'             => 'No '. $plural_name . ' Found',
	        'not_found_in_trash'    => 'No '. $plural_name .' Found in Trash',
	        'parent'                => 'Parent '. $single_name
	    ),
	);
	register_post_type($post_type_name, $post_type_options);

	function change_post_label() {
		global $menu;
		global $submenu;
		$menu[5][0] = 'Journal';
		$submenu['edit.php'][5][0] = 'Journal';
		$submenu['edit.php'][10][0] = 'Add Journal';
		$submenu['edit.php'][16][0] = 'Journal Tags';
	}
	function change_post_object() {
		global $wp_post_types;
		$labels = &$wp_post_types['post']->labels;
		$labels->name = 'Journal';
		$labels->singular_name = 'Journal';
		$labels->add_new = 'Add Journal';
		$labels->add_new_item = 'Add Journal';
		$labels->edit_item = 'Edit Journal';
		$labels->new_item = 'Journal';
		$labels->view_item = 'View Journal';
		$labels->search_items = 'Search Journals';
		$labels->not_found = 'No Journals found';
		$labels->not_found_in_trash = 'No Journals found in Trash';
		$labels->all_items = 'All Journals';
		$labels->menu_name = 'Journal';
		$labels->name_admin_bar = 'Journal';
	}
	 
	add_action( 'admin_menu', 'change_post_label' );
	add_action( 'init', 'change_post_object' );
	
}

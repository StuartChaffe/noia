<?php

// Set theme defaults, tidy up WP
require_once( 'lib/theme-setup.php' );

// Load scrips
require_once( 'lib/enqueue.php' );

// Configure menus
require_once( 'lib/menus.php' );

// ACF configuration
require_once( 'lib/acf.php' );

// Custom Gutenberg blocks
require_once( 'lib/blocks.php' );

// Vendor specific functions
require_once( 'lib/vendors.php' );

// Helper functions
require_once( 'lib/helpers.php' );


function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');
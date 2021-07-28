<?php

add_filter( 'block_categories', 'noia_block_categories', 10, 2 );
function noia_block_categories( $categories, $post )
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'noia-blocks',
                'title' => __( 'Noia Blocks', 'noiablocks-master' ),
            ),
        )
    );
}

add_action('acf/init', 'noia_acf_blocks');
function noia_acf_blocks() {
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'banner',
			'title'				=> __('Banner'),
			'description'		=> __('Add a banner block'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'format-image',
			'align' 			=> 'full',
			'keywords'			=> array( 'banner' )
		));
		acf_register_block(array(
			'name'				=> 'image',
			'title'				=> __('Image'),
			'description'		=> __('Add a full width image'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'images, image' )
		));
		// acf_register_block(array(
		// 	'name'				=> 'stat',
		// 	'title'				=> __('Stat'),
		// 	'description'		=> __('Add stat'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'admin-comments',
		// 	'keywords'			=> array( 'stat' )
		// ));
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('Call to action'),
			'description'		=> __('Add a CTA block'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'megaphone',
			'keywords'			=> array( 'cta, call to action' )
		));
		acf_register_block(array(
			'name'				=> 'text-block',
			'title'				=> __('Text block'),
			'description'		=> __('Add a standard text block'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'text-page',
			'keywords'			=> array( 'content, text' )
		));
		// acf_register_block(array(
		// 	'name'				=> 'featured-events',
		// 	'title'				=> __('Featured events'),
		// 	'description'		=> __('Add featured events'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'screenoptions',
		// 	'keywords'			=> array( 'project, featured events' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'quote',
		// 	'title'				=> __('Quote'),
		// 	'description'		=> __('Add quote'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'format-status',
		// 	'keywords'			=> array( 'testimonial, quote' )
		// ));
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion'),
			'description'		=> __('Add expanding content'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'insert',
			'keywords'			=> array( 'accordion, expanding' )
		));
		// acf_register_block(array(
		// 	'name'				=> 'image-text',
		// 	'title'				=> __('Image with text'),
		// 	'description'		=> __('Add an image with text block'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'id',
		// 	'keywords'			=> array( 'image with text, image, text with image, text' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'carousel',
		// 	'title'				=> __('Carousel'),
		// 	'description'		=> __('Add a carousel'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'slides',
		// 	'keywords'			=> array( 'carousel, slider' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'role-models',
		// 	'title'				=> __('Role models'),
		// 	'description'		=> __('Add some role models'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'smiley',
		// 	'keywords'			=> array( 'role model, people' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'downloads',
		// 	'title'				=> __('Downloads'),
		// 	'description'		=> __('Add downloads'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'download',
		// 	'keywords'			=> array( 'download, file' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'events',
		// 	'title'				=> __('All Events'),
		// 	'description'		=> __('Add all events'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'calendar-alt',
        //     'keywords'			=> array( 'events' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'columns',
		// 	'title'				=> __('Two columns'),
		// 	'description'		=> __('Add two columns'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'forms',
        //     'keywords'			=> array( 'two, 2, cols, columns' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'featured-carousel',
		// 	'title'				=> __('Featured Carousel'),
		// 	'description'		=> __('Add a featured carousel'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'slides',
		// 	'keywords'			=> array( 'carousel, featured carousel' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'posts',
		// 	'title'				=> __('All Posts'),
		// 	'description'		=> __('Add all posts'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'calendar-alt',
        //     'keywords'			=> array( 'posts' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'spacer',
		// 	'title'				=> __('Spacer'),
		// 	'description'		=> __('Add a spacer'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'align-wide',
		// 	'keywords'			=> array( 'spacer' )
		// ));
		acf_register_block(array(
			'name'				=> 'image-block',
			'title'				=> __('Image block'),
			'description'		=> __('Add an image block'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'images, image' )
		));
		acf_register_block(array(
			'name'				=> 'image-slider',
			'title'				=> __('Image slider'),
			'description'		=> __('Add multiple image slider'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'slides',
			'keywords'			=> array( 'images, slider' )
		));
		// acf_register_block(array(
		// 	'name'				=> 'project-details',
		// 	'title'				=> __('Project details'),
		// 	'description'		=> __('Add project details'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'format-aside',
		// 	'keywords'			=> array( 'project, project details' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'pull-out',
		// 	'title'				=> __('Pull out'),
		// 	'description'		=> __('Add pull out'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'admin-comments',
		// 	'keywords'			=> array( 'pull out' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'next-project',
		// 	'title'				=> __('Next project'),
		// 	'description'		=> __('Add next project link'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'category',
		// 	'keywords'			=> array( 'project, next project' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'form',
		// 	'title'				=> __('Form'),
		// 	'description'		=> __('Add a form'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'email-alt',
		// 	'keywords'			=> array( 'email, form' )
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'map',
		// 	'title'				=> __('Map'),
		// 	'description'		=> __('Add a map'),
		// 	'render_callback'	=> 'noia_acf_block_render_callback',
		// 	'category'			=> 'noia-blocks',
		// 	'icon'				=> 'location-alt',
		// 	'keywords'			=> array( 'map, location' )
		// ));
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel'),
			'description'		=> __('Add a carousel'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'slides',
			'keywords'			=> array( 'carousel, slider' )
		));
		acf_register_block(array(
			'name'				=> 'logos',
			'title'				=> __('Logos block'),
			'description'		=> __('Add a logos block'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'youtube',
			'keywords'			=> array( 'logos' )
		));
		acf_register_block(array(
			'name'				=> 'membership',
			'title'				=> __('Membership block'),
			'description'		=> __('Add a membership block'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'universal-access',
			'keywords'			=> array( 'membership' )
		));
		acf_register_block(array(
			'name'				=> 'spaces',
			'title'				=> __('All Spaces'),
			'description'		=> __('Add all spaces'),
			'render_callback'	=> 'noia_acf_block_render_callback',
			'category'			=> 'noia-blocks',
			'icon'				=> 'admin-home',
			'keywords'			=> array( 'spaces' )
		));
	}
}

function noia_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/{$slug}.php") );
	}
}

add_filter( 'allowed_block_types', 'noia_allowed_block_types' );
 
function noia_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/accordion',
		'acf/banner',
		'acf/carousel',
		// 'acf/columns',
		// 'acf/content',
		'acf/cta',
		// 'acf/downloads',
		// 'acf/events',
		// 'acf/featured-carousel',
		// 'acf/featured-events',
		'acf/image',
		// 'acf/image-text',
		// 'acf/posts',
		// 'acf/quote',
		// 'acf/role-models',
		// 'acf/spacer',
		// 'acf/stat',
		// 'core/html',
		// 'acf/form',
		// 'acf/gallery',
		'acf/image-block',
		'acf/image-slider',
		'acf/logos',
		'acf/membership',
		// 'acf/map',
		// 'acf/next-project',
		// 'acf/project-details',
		// 'acf/pull-out',
		'acf/text-block',
		// 'acf/text-image',
		'acf/spaces'
	);
 
}

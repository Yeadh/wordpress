<?php


if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Metabox Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
 function premix_metabox_gallery($options){

	$options[]      = array(
	  'id'            => 'gallery_landing_page',
	  'title'         => 'Gallery Custom Options',
	  'post_type'     => 'page', // or post or CPT or array( 'page', 'post' )
	  'context'       => 'normal',
	  'priority'      => 'default',
	  'sections'      => array(

		// begin section
		array(
		  'name'      => 'section_gallery',
		  'title'     => 'Gallery Items',
		  'icon'      => 'fa fa-heart',
		  'fields'    => array(
		  
			// Gallery group
				array(
					  'id'          => 'gallery_items',
					  'type'        => 'gallery',
					  'title'       => 'Add Gallery Items',
					  'add_title'   => 'Add Images',
					  'edit_title'  => 'Edit Images',
					  'clear_title' => 'Remove Images',
					),
			
				
		  ),
		),

	  ),
	);
	
	return $options;
}
add_filter('cs_metabox_options','premix_metabox_gallery');

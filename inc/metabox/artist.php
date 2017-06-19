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
 function premix_metabox_artist($options){

	$options[]      = array(
	  'id'            => '_artist_metabox',
	  'title'         => 'Custom Options',
	  'post_type'     => 'artist', // or post or CPT or array( 'page', 'post' )
	  'context'       => 'normal',
	  'priority'      => 'default',
	  'sections'      => array(

		// begin section
		array(
		  'name'      => 'section_artist',
		  'title'     => 'Artist Details',
		  'icon'      => 'fa fa-heart',
		  'fields'    => array(
		  
			// Artist Category field
		    array(
			  'id'             => 'artists_category',
			  'type'           => 'select',
			  'title'          => 'Select Artist Category',
			  'options'        => 'categories',
			  'query_args'     => array(
				'orderby'      => 'name',
				'order'        => 'ASC',
				'taxonomy'     => 'artist-category',
			  ),
			  'default_option' => 'Select a category',
			),	
			// Artist Possition field
			array(
			  'id'    => 'artist_possition',
			  'type'  => 'text',
			  'title' => 'Possition',
			),
			// Artist ORIGIN field
			array(
			  'id'    => 'artist_origin',
			  'type'  => 'text',
			  'title' => 'ORIGIN',
			),
			// Artist GENRES field
			array(
			  'id'    => 'artist_genres',
			  'type'  => 'text',
			  'title' => 'GENRES',
			),
			// Artist PHONE field
			array(
			  'id'    => 'artist_phone',
			  'type'  => 'text',
			  'title' => 'PHONE:',
			),
			// Artist MAIL field
			array(
			  'id'    => 'artist_mail',
			  'type'  => 'text',
			  'title' => 'E-MAIL:',
			),
			// Artist Social field
			array(
			  'id'              => 'artist_social_area',
			  'type'            => 'group',
			  'title'           => 'Social Field',
			  'button_title'    => 'Add New',
			  'accordion_title' => 'Add New Field',
			  'fields'          => array(
				array(
				  'id'    => 'social_link_1',
				  'type'  => 'text',
				  'title' => 'Social Link',
				),
				array(
				  'id'    => 'artist_social_icon',
				  'type'  => 'icon',
				  'title' => 'Secelct Icon',
				),
			  ),
			),	
			// Artist total albums
			array(
			  'id'    => 'artist_total_albums',
			  'type'  => 'text',
			  'title' => 'Total Albums',
			),
			// Artist total albums
			array(
			  'id'    => 'artist_total_songs',
			  'type'  => 'text',
			  'title' => 'Total Songs',
			),
			// Artist total albums
			array(
			  'id'    => 'artist_total_concerts',
			  'type'  => 'text',
			  'title' => 'Total Concerts',
			),
			// Artist total albums
			array(
			  'id'    => 'artist_total_tours',
			  'type'  => 'text',
			  'title' => 'Total Tour',
			),
			
		  ),
		),

	  ),
	);
	
	return $options;
}
add_filter('cs_metabox_options','premix_metabox_artist');

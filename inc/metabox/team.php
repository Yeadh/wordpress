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
 function premix_metabox_team($options){

	$options[]      = array(
	  'id'            => '_team_member_metabox',
	  'title'         => 'Custom Options',
	  'post_type'     => 'team', // or post or CPT or array( 'page', 'post' )
	  'context'       => 'normal',
	  'priority'      => 'default',
	  'sections'      => array(

		// begin section
		array(
		  'name'      => 'section_team',
		  'title'     => 'Team Member Details',
		  'icon'      => 'fa fa-heart',
		  'fields'    => array(
		  
			
			// Member Possition field
			array(
			  'id'    => 'team_m_possition',
			  'type'  => 'text',
			  'title' => 'Possition',
			),
			//a group
			array(
				 'id' => 'team_links',
				'type' => 'group',
				'title' => __( 'Team Social Links', 'premix' ),
				'button_title' => __( 'Add New', 'premix' ),
				'accordion_title' => __( 'Add New', 'premix' ),
				'fields' => array(
					 array(
						 'id' => 'icon',
						'type' => 'icon',
						'title' => __( 'Icon', 'premix' ) 
					),
					array(
						 'id' => 'url',
						'type' => 'text',
						'title' => __( 'Url', 'premix' ) 
					) 
				) 
			),
			
			
				
		  ),
		),

	  ),
	);
	
	return $options;
}
add_filter('cs_metabox_options','premix_metabox_team');

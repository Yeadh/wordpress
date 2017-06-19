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
 function premix_metabox_event($options){

	$options[]      = array(
	  'id'            => '_event_metabox',
	  'title'         => 'Custom Options',
	  'post_type'     => 'event', // or post or CPT or array( 'page', 'post' )
	  'context'       => 'normal',
	  'priority'      => 'default',
	  'sections'      => array(

		// begin section
		array(
		  'name'      => 'section_event',
		  'title'     => 'event Details',
		  'icon'      => 'fa fa-heart',
		  'fields'    => array(
		  
			// Artist Category field
		    array(
			  'id'             => 'event_category_select',
			  'type'           => 'select',
			  'title'          => 'Select Event Category',
			  'options'        => 'categories',
			  'query_args'     => array(
				'orderby'      => 'name',
				'order'        => 'ASC',
				'taxonomy'     => 'event-category',
			  ),
			  'default_option' => 'Select a category',
			),	
			// Artist Possition field
			array(
			  'id'    => 'event_location',
			  'type'  => 'text',
			  'title' => 'Location',
			),
			
			
			
			// Album RELEASE DATE group
			
			array(
				  'id'        => 'event_startandend_date',
				  'type'      => 'fieldset',
				  'title'     => 'RELEASE DATE',
				  'fields'    => array(
				  
				  
						 // title fieldset, this is subheading option, why not use here ? :)
						array(
						  'id'      => 'subheading',
						  'type'    => 'subheading',
						  'content' => 'EVENTS START AND END DATE',
						),
						array(
						  'id'    => 'event_date',
						  'type'  => 'text',
						  'title' => 'Day',
						),
						
						array(
						  'id'             => 'event_start_month',
						  'type'           => 'select',
						  'title'          => 'Start From',
						  'options'        => array(
							'january'          => 'January',
							'february'     => 'February',
							'march'         => 'March',
							'april'         => 'April',
							'may'         => 'May',
							'june'         => 'June',
							'july'         => 'July',
							'august'         => 'August',
							'september'         => 'September',
							'october'         => 'October',
							'november'         => 'November',
							'december'         => 'December',
						  ),
						  'default_option' => 'Start',
						),
						array(
						  'id'             => 'event_end_month',
						  'type'           => 'select',
						  'title'          => 'End Month',
						  'options'        => array(
							'january'          => 'January',
							'february'     => 'February',
							'march'         => 'March',
							'april'         => 'April',
							'may'         => 'May',
							'june'         => 'June',
							'july'         => 'July',
							'august'         => 'August',
							'september'         => 'September',
							'october'         => 'October',
							'november'         => 'November',
							'december'         => 'December',
						  ),
						  'default_option' => 'End',
						),
						
						
						array(
						  'id'    => 'event_year',
						  'type'  => 'text',
						  'title' => 'Year',
						),
					),
				),
			
			// Artist ORGANIZER field
			array(
			  'id'    => 'event_organizer',
			  'type'  => 'text',
			  'title' => 'Organizer:',
			),
			
			// Artist VENUE: field
			array(
			  'id'    => 'event_venue',
			  'type'  => 'text',
			  'title' => 'Venue:',
			),
			
			// Artist Titcket field
			array(
			  'id'    => 'event_ticket',
			  'type'  => 'text',
			  'title' => 'Titcket Link:',
			),
			
			// Artist Social field
				
		  ),
		),

	  ),
	);
	
	return $options;
}
add_filter('cs_metabox_options','premix_metabox_event');

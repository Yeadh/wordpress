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
 function premix_metabox_common($options){
	 
	$options = array();
	
	
    $options[ ] = array(
         'id' => 'premix_landing_page',
        'title' => 'Custom Home Page Options',
        'post_type' => 'page', // or post or CPT or array( 'page', 'post' )
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
             array(
                 'name' => 'section_config',
                'title' => __( 'Section Configaration', 'premix' ),
                'icon' => 'fa fa-music',
                'fields' => array(
                     array(
                         'id' => 'premix_active_section',
                        'type' => 'sorter',
                        'default' => array(
                             'enabled' => array(
                                 'slider' => 'Slider Section',
                                'artists' => 'artists Section',
                                'albums' => 'albums Section',
                                'about' => 'About Section',
                                'events' => 'events',
                                'author' => 'Author Section',
                                'pricing' => 'Pricing Section',
                                'purchase' => 'Purchase',
                                'blog' => 'Blog Section',
                                'contact' => 'Contact Section' 
                            ),
                            'disabled' => array( ) 
                        ),
                        'enabled_title' => 'Active Section',
                        'disabled_title' => 'Inactive Sections' 
                    ) 
                ) 
            ),

            // begin section
            array(
                 'name' => 'slider_section',
                'title' => __( 'Slider Section', 'premix' ),
                'icon' => 'fa fa-book',
                'fields' => array(
                    // a field
                     array(
                         'id' => 'slider_headline',
                        'type' => 'text',
                        'title' => __( 'Slider Headline', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
					// a field
                     array(
                         'id' => 'slider_upcoming_event_neame',
                        'type' => 'text',
                        'title' => __( 'Upcoming Event', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
					// a field
                     array(
                         'id' => 'slider_upcoming_event_ticket_lebel',
                        'type' => 'text',
                        'title' => __( 'Button Text', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
					// a field
                     array(
                         'id' => 'slider_upcoming_event_ticket_url',
                        'type' => 'text',
                        'title' => __( 'Button URL', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
								
					array(
					  'id'          => 'gallery_2',
					  'type'        => 'gallery',
					  'title'       => 'Gallery with Custom Title',
					  'add_title'   => 'Add Images',
					  'edit_title'  => 'Edit Images',
					  'clear_title' => 'Remove Images',
					),
                ) //end fields
            ),
            // begin artists section
            array(
                 'name' => 'artists',
                'title' => __( 'Artists Section', 'premix' ),
                'icon' => 'fa fa-book',
                'fields' => array(
				
                    // Section field
                     array(
                         'id' => 'artists_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
                    
					
                ) //end fields
            ),
			
			
			
            // begin albums section
            array(
                 'name' => 'albums',
                'title' => __( 'albums Section', 'premix' ),
                'icon' => 'fa fa-book',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'albums_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
				array(
                         'id' => 'albums_section_bg_image',
                        'type' => 'image',
                        'title' => __( 'BG Image', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
                ) //end fields
            ),
			
			
            // begin About section
            array(
                 'name' => 'about',
                'title' => __( 'About Section', 'premix' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'about_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
                    array(
                         'id' => 'about_details',
                        'type' => 'wysiwyg',
                        'title' => __( 'Description', 'premix' ),
                        'settings' => array(
                             'textarea_rows' => 15,
                            'tinymce' => true,
                            'media_buttons' => false 
                        ) 
                    ),
                    // a field
                    array(
                         'id' => 'about_image',
                        'type' => 'image',
                        'title' => __( 'Image', 'premix' ),
                        'add_title' => __( 'Add Image', 'premix' ) 
                    ),
                   
                ) //end fields
            ),
			
			
            // begin Events section
            array(
                 'name' => 'events',
                'title' => 'Events Section',
                'icon' => 'fa fa-coffee',
                'fields' => array(
                     // Section field
                     array(
                         'id' => 'events_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
					 // a field
                    array(
                         'id' => 'events_bgimage',
                        'type' => 'image',
                        'title' => __( 'Image', 'premix' ),
                        'add_title' => __( 'Add Image', 'premix' ) 
                    ),
                    
                ) //end fields
            ),
			
			
			// begin section
            array(
                 'name' => 'purchase',
                'title' => __( 'Purchase Section', 'premix' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
                    // a field
                     array(
                         'id' => 'purchase_title',
                        'type' => 'text',
                        'title' => __( 'Purchase Title', 'premix' ),
                        'default' => __( 'There is no friend as loyal as book”', 'premix' ) 
                    ),
                    // a field
                    array(
                         'id' => 'purchase_btn_level',
                        'type' => 'text',
                        'title' => __( 'Button Level', 'premix' ),
                        'default' => __( 'Purchase Now', 'premix' ) 
                    ),
                    // a field
                    array(
                         'id' => 'purchase_btn_url',
                        'type' => 'text',
                        'title' => __( 'Button Url', 'premix' ),
                        'default' => __( '#', 'premix' ) 
                    ) 
                ) //end fields
            ),
           
            // begin Blog section
            array(
                 'name' => 'blog',
                'title' => __( 'Blog Section', 'premix' ),
                'icon' => 'fa fa-coffee',
                'fields' => array(
				
                     // Section field
                     array(
                         'id' => 'blog_section_title',
                        'type' => 'text',
                        'title' => __( 'Section Title', 'premix' ),
                        'default' => __( '', 'premix' ) 
                    ),
					
					
                    // a field
                    array(
                         'id' => 'blog_number_of_posts',
                        'type' => 'select',
                        'title' => __( 'Number of posts', 'premix' ),
                        'options' => array(
                             '3' => 'Three',
                            '6' => 'Six',
                            '9' => 'Nine' 
                        ),
                        'default' => '3' 
                    ) 
                ) //end fields
            ),
            
           
        ) 
    );
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	return $options;
}
add_filter('cs_metabox_options','premix_metabox_common');

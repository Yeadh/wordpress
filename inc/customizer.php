<?php
/**
 * prebook Theme Customizer
 *
 * @package prebook
 */

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.



add_filter( 'cs_customize_options', function( $options ) {

  $options      = array(); // remove old options

$options[]      = array(
  'name'        => 'premix_social_share',
  'title'       => 'Social Share',
  'priority' => 40,
  'settings'    => array(
				array(
					  'name'    => 'facebook_link',
					  'control' => array(
						'label' => 'Facebook Url:',
						'type'  => 'text',
					  ),
					),

					array(
					  'name'    => 'twitter_link',
					  'control' => array(
						'label' => 'Twitter Url:',
						'type'  => 'text',
					  ),
					),
				   
					array(
					  'name'    => 'google_plus_link',
					  'control' => array(
						'label' => 'Google+ Url:',
						'type'  => 'text',
					  ),
					),
				 
					array(
					  'name'    => 'youtube_link',
					  'control' => array(
						'label' => 'Youtube Url:',
						'type'  => 'text',
					  ),
					),

					array(
					  'name'    => 'instagram_link',
					  'control' => array(
						'label' => 'Instragram Url:',
						'type'  => 'text',
					  ),
					),

  )//settings
);//end social sections

$options[]      = array(
  'name'        => 'premix_blog',
  'title'       => 'Blog Settings',
  'priority' => 50,
  'settings'    => array(
				array(
				  'name'          => 'premix_blog_title',
				  'control'       => array(
					'label' 	  => 'Blog Title:',
					'type'        => 'text',
				  ),
				  'default' => 'Wellcome to our Blog'
				),
    // codestar image select
    array(
      'name'          => 'premix_blog_header_image',
      'control'       => array(
    	'label' 	  => 'Header Image:',
        'type'        => 'image',
      ),
    ),

  )//settings
);//end blog sections

$options[]      = array(
  'name'        => 'premix_footer',
  'title'       => 'Footer',
  'priority' => 50,
  'settings'    => array(

    array(
      'name'    => 'copyright_text',
      'default' => __('© 2017 - All rights reserved.', 'premix'),
      'control' => array(
        'label' => 'Copyright Text',
        'type'  => 'textarea',
      ),
    ),

  )//settings
);

  return $options;

});//end filter



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
 function premix_metabox_album($options){

$options[]      = array(
  'id'            => '_albums_metabox',
  'title'         => 'Custom Options',
  'post_type'     => 'album', // or post or CPT or array( 'page', 'post' )
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'section_album',
      'title'     => 'Album Details',
      'icon'      => 'fa fa-heart',
      'fields'    => array(

        // a field
		
		// Artist Category field
		    array(
			  'id'             => 'album_category_name',
			  'type'           => 'select',
			  'title'          => 'Select Album Category',
			  'options'        => 'categories',
			  'query_args'     => array(
				'orderby'      => 'name',
				'order'        => 'ASC',
				'taxonomy'     => 'album-category',
			  ),
			  'default_option' => 'Select a category',
			),	
			// Artist Name field
			array(
			  'id'    => 'album_artist_name',
			  'type'  => 'text',
			  'title' => 'Atist Name',
			),
			// Album RELEASE DATE group
			
			array(
				  'id'        => 'album_release_date',
				  'type'      => 'fieldset',
				  'title'     => 'RELEASE DATE',
				  'fields'    => array(
				  
				  
						 // title fieldset, this is subheading option, why not use here ? :)
						array(
						  'id'      => 'subheading',
						  'type'    => 'subheading',
						  'content' => 'ADD ALBUM RELEASE DATE',
						),
						array(
						  'id'    => 'album_release_day',
						  'type'  => 'text',
						  'title' => 'Day',
						),
						
						array(
						  'id'             => 'album_release_month',
						  'type'           => 'select',
						  'title'          => 'Select Month',
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
						  'default_option' => 'Month',
						),
						array(
						  'id'    => 'album_release_year',
						  'type'  => 'text',
						  'title' => 'Year',
						),
			  ),
				),
			// End Album RELEASE DATE group
			
			// Album GENRE field
			array(
			  'id'    => 'album_genre',
			  'type'  => 'text',
			  'title' => 'GENRE',
			),
			// Album PRICE field
			array(
			  'id'    => 'album_price',
			  'type'  => 'text',
			  'title' => 'PRICE:',
			),
			// Album Download Field
			array(
			  'id'    => 'album_download_item',
			  'type'  => 'upload',
			  'title' => 'upload Downloadable Item',
			),
			// Album Social group field
			array(
			  'id'              => 'album_social_area',
			  'type'            => 'group',
			  'title'           => 'Social Field',
			  'button_title'    => 'Add New',
			  'accordion_title' => 'Add New Field',
			  'fields'          => array(
				array(
				  'id'    => 'album_social_link',
				  'type'  => 'text',
				  'title' => 'Social Link',
				),
				array(
				  'id'    => 'album_social_icon',
				  'type'  => 'icon',
				  'title' => 'Secelct Icon',
				),
			  ),
			),	
			// Live Track field
			array(
			  'id'              => 'album_live_track_area',
			  'type'            => 'group',
			  'title'           => 'Upload Music',
			  'button_title'    => 'Add New',
			  'accordion_title' => 'Add New Field',
			  'fields'          => array(
				array(
				  'id'    => 'music_name',
				  'type'  => 'text',
				  'title' => 'Music Name',
				),
				array(
				  'id'    => 'music_artist_name',
				  'type'  => 'text',
				  'title' => 'Music Artist Name',
				),
				
				array(
				  'id'    => 'album_music_track',
				  'type'  => 'upload',
				  'title' => 'Upload Music',
				),
				
			  ),
			),	

        // End field
        

      ),
    ),

    

  ),
);
	return $options;
 }
add_filter('cs_metabox_options','premix_metabox_album');
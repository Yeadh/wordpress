<?php
/**
 * Template Name: Homepage
 *
 * @package premix
 * @since Premix 1.0
 */
	global $metabox;

	$metabox   = get_post_meta( get_queried_object_id(), 'premix_landing_page', true );


get_header();
	
	$active_sections = isset($metabox['premix_active_section']['enabled']) ? (array) $metabox['premix_active_section']['enabled'] : array();

	foreach($active_sections as $section => $title)
	{
 		get_template_part( sprintf('sections/%s', $section ) ); 
	}

get_footer();

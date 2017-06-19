<?php
/**
 * Template Name: About
 *
 * @package premix
 * @since Premix 1.0
 */
	global $metabox;
	$section_about_title = isset($metabox['about_section_title']) ? $metabox['about_section_title'] : '';
	$section_about_text = isset($metabox['about_details']) ? $metabox['about_details'] : '';
	$section_about_photo_id  = isset($metabox['about_image'])    ? $metabox['about_image'] : '';
	$attachment       = wp_get_attachment_image_src( $section_about_photo_id, ' ' );
	$section_about_photo_src = isset($attachment[0]) ?  $attachment[0] : '';
	
get_template_part('sections/hero');
get_template_part('sections/about');
get_template_part('sections/team');
get_header(); ?>




<?php get_footer();?>
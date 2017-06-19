<?php
/**
 * The template for displaying all artists single pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package premix
 */
	global $metabox;
			
get_header(); ?>
<?php get_template_part('sections/hero'); ?>
<!-- Premix Single Event Post Start -->
	<section class="premix-single-atist-post section-padding">
		<div class="container">			
			<?php 
			while ( have_posts()) : the_post(); 
				get_template_part('template-parts/content-artist'); 
			
			endwhile; 
			?>
			
		</div>
	</section>

<?php
//get_sidebar();
get_footer();

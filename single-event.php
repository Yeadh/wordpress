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
<!-- Single Album Page -->

<section class="premix-single-event-post section-padding">
		<div class="container">
			<div class="row">
				<?php 
					while (have_posts()) : the_post(); 
						get_template_part('template-parts/content-album'); 
					endwhile;
				?>
			</div>
			<div class="premix-btn-group text-center">
				<a href="#" class="premix-btn next-and-prev-btn"> <i class="fa fa-angle-double-left"></i> PREVIOUS</a>
				<a href="#" class="premix-btn next-and-prev-btn">  Next <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</section>














	<section class="premix-single-album-details section-padding">
		<div class="container">
			<div class="row">
			<?php 
				while (have_posts()) : the_post(); 
					get_template_part('template-parts/content-album'); 
				endwhile;
			?>
			</div>
		</div>
	</section>

<?php
get_sidebar();
get_footer();

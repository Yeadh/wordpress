<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package premix
 */

get_header(); 
get_template_part('sections/hero-blog');
?>

<section class="premix-single-blog-page section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<?php 

		          	while( have_posts() ) : the_post();

		          		get_template_part('template-parts/content-single');


		          		premix_blog_social_share();

		            	// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif; 

			        endwhile;
					
		        ?>
				</div>
				<div class="col-md-3 col-md-offset-1 col-sm-4">
					<?php get_template_part('sidebar'); ?>
				</div>
			</div>
			
		</div>
	</section>

<?php
get_footer();

<?php
/**
 * Template Name: Artists
 *
 * @package premix
 * @since Premix 1.0
 */
global $metabox;
get_template_part('sections/hero');

get_header(); ?>
	<section class="premix-our-artist-section premix-artist-page section-padding">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="OUR ARTISTS">OUR ARTISTS</h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
				<div class="premix-all-artist">
					<?php 
						$premix_artist = new WP_Query(array(
							'post_type' => 'artist',
						));
						
					while ( $premix_artist->have_posts()) : 
					
					$premix_artist->the_post();  
					get_template_part('template-parts/artist-loop'); 
					
					endwhile; 
					
					?>
					
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>

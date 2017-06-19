<?php
/**
 * Template Name: Events
 *
 * @package premix
 * @since Premix 1.0
 */
global $metabox;

get_template_part('sections/hero');
get_header(); ?>
	
	
	<section class="premix-next-event-section premix-event-page section-padding">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="NEXT EVENT">NEXT EVENT</h2>
			</div> <!-- .premix-section-heading End -->
			<div class="content-margin-top">
			
				
			
			
				<div class="premix-next-event">
					<ul id="premix-event-1">
					
						<?php 
							$premix_artist = new WP_Query(array(
								'post_type' => 'event',
							));
							
							while ( $premix_artist->have_posts()) : 
							
							$premix_artist->the_post();  
							get_template_part('template-parts/event-loop'); 
							
							endwhile; 
						
						?>
						
					</ul>
				</div>
				
			</div>
		</div>
	</section>
	

<?php get_footer();?>

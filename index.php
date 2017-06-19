<?php
/**
 *The template for displaying all single posts
 * 
 *
 * @package premix
 */

get_header(); 
get_template_part('sections/hero-blog');
?>
	<section class="premix-latest-news-section premix-blog-page section-padding">
		<div class="container">
						<?php 

							if(have_posts()):
			?>
			<div class="premix-section-heading text-center premix-appeared">
				<h2 data-titles="LATEST NEWS">LATEST NEWS</h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
			<?php

							while( have_posts() ) : the_post();

								get_template_part('template-parts/content');

							endwhile;		        

							the_posts_pagination( array(
								'mid_size'  => 2,
								'prev_text' => __( 'Back', 'premix' ),
								'next_text' => __( 'Onward', 'premix' ),
							) );

						else:

							get_template_part('template-parts/content', 'none');
						endif;

						?>
					
		</div>	
		</div>
	</section>
	<!-- Premix Purchase Now Section Start -->
	

<?php get_footer(); ?>
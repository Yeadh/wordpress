	<?php
	global $metabox;
	
	?>
	<section class="premix-our-team-area section-padding" style="background-image: url(img/team-bg.png);">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="OUR TEAM">OUR TEAM</h2>
			</div> <!-- .premix-section-heading END -->
			<div class="row content-margin-top">
				<div id="premix-slider">
					
					<?php 
					$team_about = new WP_Query(array(
						'post_type' => 'team',
					));
					
					while ( $team_about->have_posts()) : $team_about->the_post(); 
						get_template_part('template-parts/content', 'team'); 
					
					endwhile; 
					?>
				</div> <!-- #premix-team-slider END -->
			</div>
		</div>
	</section> <!-- .premix-our-team-area END -->

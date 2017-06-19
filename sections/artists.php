	<?php
	global $metabox;
	
	$section_artists = isset($metabox['artists_section_title'])  ? $metabox['artists_section_title'] : '';
	?>
	<section class="premix-our-artist-section section-padding">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="<?php echo esc_html($section_artists) ?>"><?php echo esc_html($section_artists) ?></h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
				<div class="premix-all-artist" id="premix-slider">
					<?php 
					$artist_home = new WP_Query(array(
						'post_type' => 'artist',
					));
					
					while ( $artist_home->have_posts()) : $artist_home->the_post(); 
						get_template_part('template-parts/artist-loop', 'homepage'); 
					
					endwhile; 
					?>
			
				</div>
			</div>
		</div>
	</section>
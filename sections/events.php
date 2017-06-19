<?php 
	global $metabox;
	$section_events_title = isset($metabox['events_section_title']) ? $metabox['events_section_title'] : '';
	$section_events_photo_id  = isset($metabox['events_bgimage'])    ? $metabox['events_bgimage'] : '';
	$attachment       = wp_get_attachment_image_src( $section_events_photo_id, ' ' );
	$section_events_photo_src = isset($attachment[0]) ?  $attachment[0] : ' ';
?>	
	<section class="premix-next-event-section section-padding" style="background-image: url(<?php echo esc_url($section_events_photo_src); ?>);">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="<?php echo esc_html($section_events_title); ?>"><?php echo esc_html($section_events_title); ?></h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
				<div class="premix-next-event">
					<ul id="premix-event">
						
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
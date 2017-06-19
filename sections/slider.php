<?php 
	global $metabox;
	$slider_headline = isset($metabox['slider_headline']) ? $metabox['slider_headline'] : '';
	$slider_upcoming_event_neame = isset($metabox['slider_upcoming_event_neame']) ? $metabox['slider_upcoming_event_neame'] : '';
	$slider_upcoming_event_ticket_lebel = isset($metabox['slider_upcoming_event_ticket_lebel']) ? $metabox['slider_upcoming_event_ticket_lebel'] : '';
	$slider_upcoming_event_ticket_url = isset($metabox['slider_upcoming_event_ticket_url']) ? $metabox['slider_upcoming_event_ticket_url'] : '';
	$slider_image_group  = isset($metabox['gallery_2']) ? $metabox['gallery_2'] : '';


?>
	
	<div id="element">
		<?php
			if( ! empty( $slider_image_group ) ) {

			  $slider_image_group =  explode( ',', $slider_image_group );

			  foreach ( $slider_image_group as $gallery ) {
				$attachment = wp_get_attachment_image_src( $gallery, 'full' );
				 $slider_photo_src = isset($attachment[0]) ?  $attachment[0] : '';
				 echo sprintf('<img src="%s" alt="%s">', esc_url($slider_photo_src), esc_attr($slider_photo_src));
			  }

			}
		?>
	</div>
	<section class="premix-welcome-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="premix-welcome-element text-center">
						<div class="premix-table">
							<div class="premix-table-cell">
								<div class="premix-welcome-section-element">
									<h2><?php _e('the upcoming event'); ?></h2>
									<h1><?php echo esc_html($slider_upcoming_event_neame); ?></h1>
									<h3><?php echo esc_html($slider_headline); ?></h3>
									
									<?php if ( $slider_upcoming_event_ticket_lebel ) : ?>
										<a href="<?php echo esc_url($slider_upcoming_event_ticket_url); ?>" class="premix-btn light-red-btn"><?php echo esc_html($slider_upcoming_event_ticket_lebel); ?></a>                     
									<?php endif; ?>
									
								</div>
								<div id="homepage-player-container">
									<button class="premix_player_prev"><img src="<?php echo get_template_directory_uri(); ?>/img/premix-music-planer-prev-btn.png" alt="" /></button> 
									<button class="premix_player_next"><img src="<?php echo get_template_directory_uri(); ?>/img/premix-music-planer-next-btn.png" alt="" /></button>
									<div id="premix-player-index" class="aplayer"></div>
								</div>
							</div>
						</div>
					</div><!-- .premix-welcome-element End -->
				</div>
			</div>
		</div>
	</section>
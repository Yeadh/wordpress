<?php		
	global $metabox;


	$metabox = get_post_meta(get_the_id(), '_artist_metabox', true);
	$artist_possition     = isset($metabox['artist_possition'])    ? $metabox['artist_possition'] : '' ;
	$artist_origin  = isset($metabox['artist_origin']) ? $metabox['artist_origin'] : '';
	$artist_genres  = isset($metabox['artist_genres']) ? $metabox['artist_genres'] : '';
	$artist_phone  = isset($metabox['artist_phone']) ? $metabox['artist_phone'] : '';
	$artist_mail  = isset($metabox['artist_mail']) ? $metabox['artist_mail'] : '';
	$artist_social_single  = isset($metabox['artist_social_area']) ? $metabox['artist_social_area'] : '';
	$artist_total_album  = isset($metabox['artist_total_album']) && $metabox['artist_total_album'] ? $metabox['artist_total_album'] : 0;
	$artist_total_songs  = isset($metabox['artist_total_songs']) && $metabox['artist_total_songs'] ? $metabox['artist_total_songs'] : 0;
	$artist_total_concert  = isset($metabox['artist_total_concert']) && $metabox['artist_total_concert'] ? $metabox['artist_total_concert'] : 0;
	$artist_total_hours  = isset($metabox['artist_total_hours']) && $metabox['artist_total_hours'] ? $metabox['artist_total_hours'] : 0;
?>
		
		
			<div class="row">
				<div class="col-md-5 col-sm-12">
					<div class="premix-border-single-page-img">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
				<div class="col-md-5 col-sm-12">
					<div class="premix-single-details">
						<h3><?php the_title(); ?></h3>
						<h4><?php echo esc_html($artist_possition ); ?></h4>
						<p><?php the_content(); ?></p>
					</div> <!-- .premix-single-details END -->
				</div>
				<div class="col-md-2 col-sm-12">
					<div class="premix--single-details-txt">
						<div class="premix-event-single-right-heading">
							<h3>More about <?php the_title(); ?></h3>
						</div> <!-- .premix-event-single-right-heading END -->
						<p><span>Origin::</span> <?php echo esc_html($artist_origin ); ?></p>
						<p><span>Genres:</span> <?php echo esc_html($artist_genres ); ?></p>
						<p><span>phone:</span> <?php echo esc_html($artist_phone ); ?></p>
						<p><span>e-mail:</span> <?php echo esc_html($artist_mail ); ?></p>
						<div class="premix-social-list">
							<h5>Links</h5>
							<?php
							  if($artist_social_single) {
								  echo '<ul>';
								  foreach($artist_social_single as $links)
								  {
									echo sprintf('<li><a href="%s"><i class="%s"></i></a></li>',
									  esc_attr($links['social_link_1']),
									  esc_attr($links['artist_social_icon']));
							
								  }
								  echo '</ul>';
							  }
							?>
						</div> <!-- .premix-social-list END -->
					</div>
				</div>
				
			
			</div>
			<div class="premix-fun-factory text-center">
				<div class="row">
				
					<div class="col-sm-3">						
						<div class="premix-single-fun-factory">
							<h3 data-title="<?php echo esc_html($artist_total_album); ?>"><?php echo esc_html($artist_total_album); ?></h3>
							<h4><?php _e('albums','premix'); ?></h4>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="premix-single-fun-factory">
							<h3 data-title="<?php echo esc_html($artist_total_songs); ?>"><?php echo esc_html($artist_total_songs); ?></h3>
							<h4><?php _e('Songs','premix'); ?></h4>
						</div>
					 <!-- .premix-single-fun-factory END -->
					</div>
					<div class="col-sm-3">
						<div class="premix-single-fun-factory">
							<h3 data-title="<?php echo esc_html($artist_total_concert); ?>"><?php echo esc_html($artist_total_concert); ?></h3>
							<h4><?php _e('live concert','premix'); ?></h4>
						</div>
						<!-- .premix-single-fun-factory END -->
					</div>
					<div class="col-sm-3">
						<div class="premix-single-fun-factory">
							<h3 data-title="<?php echo esc_html($artist_total_hours); ?>"><?php echo esc_html($artist_total_hours); ?></h3>
							<h4><?php _e('tours','premix'); ?></h4>
						</div>
						
						<!-- .premix-single-fun-factory END -->
					</div>
				</div>
			</div>
			
		
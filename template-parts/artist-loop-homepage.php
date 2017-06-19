<?php		
	$metabox = get_post_meta(get_the_id(), '_artist_metabox', true);
	$artist_possition     = isset($metabox['artist_possition'])    ? $metabox['artist_possition'] : '' ;
	$artist_origin  = isset($metabox['artist_origin']) ? $metabox['artist_origin'] : '';
	$artists_links     = isset($metabox['artist_social_area'])    ? $metabox['artist_social_area'] : array();
?>
				<div class="item">
					<div class="premix-single-artist">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('artist-image'); ?>
						</a>
						<div class="premix-single-artist-details">
							<h4><?php the_title(); ?></h4>
							<p><?php echo esc_html($artist_possition ); ?></p>
						</div> <!-- .premix-single-artist-details END -->
						<div class="premix-artist-social-details">
							<ul>
							<?php
							  if($artists_links) {
								  echo '<li class="premix-social-h-1">';
								  foreach($artists_links as $links)
								  {
									echo sprintf('<a href="%s"><i class="%s"></i>',
									  esc_attr($links['social_link_1']),
									  esc_attr($links['artist_social_icon']));
								  }
								  echo '</li>';
							  }
							?>
								<li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div> <!-- .premix-artist-social-details END -->
					</div>
				</div> <!-- .premix-single-artist End -->
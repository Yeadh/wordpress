<?php		

	$metabox = get_post_meta(get_the_id(), '_artist_metabox', true);
	$artist_possition     = isset($metabox['artist_possition'])    ? $metabox['artist_possition'] : '' ;
	$artist_social_single  = isset($metabox['artist_social_area']) ? $metabox['artist_social_area'] : '';
?>
		
				<div class="col-md-4 col-sm-6 col-xs-6 premix-latest-artist-single-item">
						<div class="premix-single-artist">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
							<div class="premix-single-artist-details">
								<h4><?php the_title(); ?></h4>
								<p><?php echo esc_html($artist_possition ); ?></p>
							</div> <!-- .premix-single-artist-details END -->
							<div class="premix-artist-social-details">
							
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
								<ul>
									<li class="premix-social-h-1"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div> <!-- .premix-artist-social-details END -->
						</div>
					</div> <!-- .premix-single-artist End -->
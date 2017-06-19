<?php		
	global $album_metabox;
	$album_metabox = get_post_meta( get_the_id(), '_albums_metabox', true);
	$album_release_day     = isset($album_metabox['album_release_date']['album_release_day'])    ? $album_metabox['album_release_date']['album_release_day'] : '' ;
	$album_release_month  = isset($album_metabox['album_release_date']['album_release_month']) ? $album_metabox['album_release_date']['album_release_month'] : '';
	$album_release_year  = isset($album_metabox['album_release_date']['album_release_year']) ? $album_metabox['album_release_date']['album_release_year'] : '';
	
	?>
		<div class="col-md-3 col-sm-6 col-xs-6 premix-latest-album-single-item">
			<div class="premix-single-album">
				<div class="premix--hover-wraper">
					<?php the_post_thumbnail(); ?>

					<div class="premix--hover-wraper-content">
						<a href="<?php the_permalink(); ?>">
							<i class="fa fa-play-circle-o"></i>
						</a>
					</div>
				</div>
				<div class="premix-album-details text-center">
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					
					<p><?php echo esc_html($album_release_day ); ?> <?php echo esc_html($album_release_month ); ?>, <?php echo esc_html($album_release_year ); ?></p>
				</div> <!-- .premix-album-details END -->
			</div>
		</div> <!-- .premix-single-album END -->
		 
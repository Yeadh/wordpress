<?php		
	global $metabox;


	$metabox = get_post_meta(get_the_id(), '_albums_metabox', true);
	$track_artist_name     = isset($metabox['album_artist_name'])    ? $metabox['album_artist_name'] : '' ;
	$album_genre  = isset($metabox['album_genre']) ? $metabox['album_genre'] : '';
	$album_price  = isset($metabox['album_price']) ? $metabox['album_price'] : '';
	$track_download  = isset($metabox['album_download_item']) ? $metabox['album_download_item'] : '';
	
?>
	<div class="col-md-6 col-sm-6">
		<div class="premix-border-single-page-img">
			<?php the_post_thumbnail(); ?>

			<div id="premix-player" class="aplayer"></div>
		</div> <!-- .premix-border-single-page-img END -->
	</div>
	<div class="col-md-6 col-sm-6">
		<div class="premix-single-details">
			<h3><?php the_title(); ?></h3>
			<h4><?php echo esc_html($track_artist_name ); ?></h4>
			<p><?php the_content(); ?></p>
		</div> <!-- .premix-single-album-right-side END -->
		<div class="premix-single-album-details-section">
			<h5>DETAILs</h5>
			<p> Artist: <span><?php echo esc_html($track_artist_name ); ?></span></p>
			<?php 
				global $album_metabox;
				$album_metabox = get_post_meta( get_the_id(), '_albums_metabox', true);
				$album_release_day     = isset($album_metabox['album_release_date']['album_release_day'])    ? $album_metabox['album_release_date']['album_release_day'] : '' ;
				$album_release_month  = isset($album_metabox['album_release_date']['album_release_month']) ? $album_metabox['album_release_date']['album_release_month'] : '';
				$album_release_year  = isset($album_metabox['album_release_date']['album_release_year']) ? $album_metabox['album_release_date']['album_release_year'] : '';
			?>
			
			<p> Release Date: <?php echo esc_html($album_release_day ); ?><span> <?php echo esc_html($album_release_month ); ?></span> <?php echo esc_html($album_release_year ); ?></p>
			<p> Genre: <span><?php echo esc_html($album_genre ); ?></span></p>
			<p> Price: <span>$<?php echo esc_html($album_price ); ?></span></p>
			<a href="<?php echo esc_html($track_download ); ?>" class="premix-btn orange-btn" download>download</a>
			<div class="premix-social-list">
				<h5>Share it</h5>
				
				<ul>
					<?php premix_social_share(); ?>
				</ul>
			</div> <!-- .premix-social-list END -->
		</div> <!-- .premix-single-album-details-section END -->
	</div>
		
		
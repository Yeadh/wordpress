<?php		
	global $metabox;


	$metabox = get_post_meta(get_the_id(), '_albums_metabox', true);
	$track_artist_name     = isset($metabox['album_artist_name'])    ? $metabox['album_artist_name'] : '' ;
	$album_genre  = isset($metabox['album_genre']) ? $metabox['album_genre'] : '';
	$album_price  = isset($metabox['album_price']) ? $metabox['album_price'] : '';
	$track_download  = isset($metabox['album_download_item']) ? $metabox['album_download_item'] : '';
	
?>
				<div class="premix-single-event-wraper">
					<img src="img/event-single-post-img.png" alt="">
					<div class="col-md-8 col-sm-8">
						<div class="premix-single-details">
							<h3>voice for blind </h3>
							<h4>london, england</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
							<p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
							<div class="premix-social-list">
								<h5>Share this</h5>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram "></i></a></li>
									<li><a href="#"><i class="fa fa-whatsapp "></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
								</ul>
							</div> <!-- .premix-social-list END -->
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="premix--single-details-txt">
							<div class="premix-event-single-right-heading">
								<h3>DETAILS</h3>
							</div>
							<p><span>START:</span>January 19-8:00 pm</p>
							<p><span>END:</span>September 9-9:00 pm</p>
							<p><span>LOCATION:</span>London, England</p>
							<p><span>ORGANIZER:</span>Jonathon Doe</p>
							<p><span>VENUE:</span>50 Berners St, London W1T 3NG</p>
							<a href="#" class="premix-btn orange-btn">BUY TICKETS</a>
						</div>
					</div>
				</div>


















































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
		
		
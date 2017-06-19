<?php 
	global $metabox;
	$section_album = isset($metabox['albums_section_title']) ? $metabox['albums_section_title'] : '';
	$album_sectionbg_photo_id  = isset($metabox['albums_section_bg_image'])    ? $metabox['albums_section_bg_image'] : '';
	$attachment       = wp_get_attachment_image_src( $album_sectionbg_photo_id, ' ' );
	$album_sectionbg_photo_src = isset($attachment[0]) ?  $attachment[0] : ' ';
?>
<section class="premix-our-album-section section-padding" style="background-image: url(<?php echo esc_url($album_sectionbg_photo_src); ?>);">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="<?php echo esc_html($section_album); ?>"><?php echo esc_html($section_album); ?></h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
				<?php 
					$artist_home = new WP_Query(array(
						'post_type' => 'album',
						'posts_per_page' => 4,
					));
					
					while ( $artist_home->have_posts()) : $artist_home->the_post(); 
						get_template_part('template-parts/album-loop', '');	
					endwhile; 
				?>
			</div>
			<div class="premix-album-more-btn text-center">
				<a href="album-single.html" class="premix-btn border-btn">MORE MUSIC</a>
			</div>
		</div>
	</section>
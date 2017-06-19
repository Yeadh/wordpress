<?php
/**
 * Template Name: Albums
 *
 * @package premix
 * @since Premix 1.0
 */
	global $metabox;
	$section_album = isset($metabox['albums_section_title']) ? $metabox['albums_section_title'] : '';
	
get_template_part('sections/hero');
get_header(); ?>
	<section class="premix-our-album-section premix-album-page section-padding">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="<?php echo esc_html($section_album); ?>"><?php echo esc_html($section_album); ?></h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
				<?php 
						$premix_albums = new WP_Query(array(
							'post_type' => 'album',
						));
					while ( $premix_albums->have_posts()) : 
					
					$premix_albums->the_post();  
					get_template_part('template-parts/album-loop'); 
					endwhile; 
				?>
			</div>
			<div class="premix-album-more-btn text-center">
				<a href="#" class="premix-btn border-btn">MORE MUSIC</a>
			</div>
		</div>
	</section>

<?php get_footer();?>

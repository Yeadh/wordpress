<?php
/**
 * Template Name: Gallery
 *
 * @package premix
 * @since Premix 1.0
 */
	global $metabox;
	$metabox   = get_post_meta( get_queried_object_id(), 'gallery_landing_page', true );
	$gallery_photo_id  = isset($metabox['gallery_items'])    ? $metabox['gallery_items'] : '';
	
get_template_part('sections/hero');
get_header(); ?>
	<section class="premix-our-gallery-section section-padding">
		<div class="premix-section-heading text-center premix-appeared">
			<h2 data-titles="<?php the_title(); ?>"><?php the_title(); ?></h2>
		</div> <!-- .premix-section-heading End -->
		<div class="premix-gallery-wraper content-margin-top" id="premix-gallery">
		
		
				<?php
			if( ! empty( $gallery_photo_id ) ) {

			  $gallery_photo_id =  explode( ',', $gallery_photo_id );

			  foreach ( $gallery_photo_id as $galleryid ) {
				  $attachment = wp_get_attachment_image_src( $galleryid, 'full' );
				 $gallery_photo_src = isset($attachment[0]) ?  $attachment[0] : '';
				 echo sprintf('<a href="%s" class="premix-gallery-grid-item">
								<img src="%s" alt="%s">
							</a> ', 
				 
				 esc_url($gallery_photo_src), esc_url($gallery_photo_src), esc_attr($gallery_photo_src));
			  }

			}
		?>
		
		
		
			<?php if($gallery_photo_src): ?>
				
			<?php endif; ?>
			
		</div> <!-- .premix-gallery-wraper END -->
	</section>
<?php get_footer();?>
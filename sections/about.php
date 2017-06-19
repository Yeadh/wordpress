<?php 
	global $metabox;
	$section_about_title = isset($metabox['about_section_title']) ? $metabox['about_section_title'] : '';
	$section_about_text = isset($metabox['about_details']) ? $metabox['about_details'] : '';
	$section_about_photo_id  = isset($metabox['about_image'])    ? $metabox['about_image'] : '';
	$attachment       = wp_get_attachment_image_src( $section_about_photo_id, ' ' );
	$section_about_photo_src = isset($attachment[0]) ?  $attachment[0] : '';
?>
	<section class="premix-our-story-section section-padding">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="<?php echo esc_html($section_about_title); ?>"><?php echo esc_html($section_about_title); ?></h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
				<div class="col-md-6">
					<div class="premix-our-story-left">
						<p><?php echo esc_html($section_about_text); ?></p>
					</div> <!-- .premix-our-story-left END -->
				</div>
				<div class="col-md-6">
					<div class="premix-our-story-right">
						<img src="<?php echo esc_url($section_about_photo_src); ?>" alt="<?php echo esc_attr($section_about_photo_src); ?>">
					</div> <!-- .premix-our-story-right END -->
				</div>
			</div>
		</div>
	</section>
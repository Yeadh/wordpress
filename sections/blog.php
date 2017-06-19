<?php 
	global $metabox;
	$blog_section_title = isset($metabox['blog_section_title']) ? $metabox['blog_section_title'] : '';
	$blog_number_of_posts = isset($metabox['blog_number_of_posts']) ? $metabox['blog_number_of_posts'] : '';
?>
<section class="premix-latest-news-section section-padding">
		<div class="container">
			<div class="premix-section-heading text-center">
				<h2 data-titles="<?php echo esc_html($blog_section_title); ?>"><?php echo esc_html($blog_section_title); ?></h2>
			</div> <!-- .premix-section-heading End -->
			<div class="row content-margin-top">
				<?php 
					$home_post_query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => $blog_number_of_posts,
					));
					while( $home_post_query->have_posts() ) : $home_post_query->the_post();

					get_template_part('template-parts/content');

					endwhile;	
				?>
				
			</div>
		</div>
	</section>
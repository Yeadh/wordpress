
	<section class="premix-welcome-section premix-innner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="premix-welcome-element text-center">
						<div class="premix-table">
							<div class="premix-table-cell">
								<h1>
								<?php 	

									if(is_404())
									{
										esc_html_e( 'Oops 404! That page can&rsquo;t be found.', 'premix' ); 
									}
									else if(is_search())
									{
										 esc_html_e( 'Search Result for:', 'premix' );
										 the_search_query();
									}
									else if(is_archive()){
										the_archive_title( '', false );
									}
									else
									{

										
										esc_html_e( premix_option('premix_blog_title', __('Wellcome to our BLOG')) );

									}

								?>
								</h1>
								<?php the_breadcrumb(); ?>
							</div>
						</div>
					</div><!-- .premix-welcome-element End -->
				</div>
			</div>
		</div>
	</section>
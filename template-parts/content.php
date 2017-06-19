<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prebook
 */
?>



<div id="post-<?php the_ID(); ?>" class="col-md-4 col-sm-6 home_news">
	<div class="premix-single-latest-news">
		<div class="premix-latest-news-header">
		
			<?php
			    if ( is_single() ) :
					the_title( '<h4>', '</h4>' );
				else :
					the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;
			?>
		<ul>
		
			<li class="premix-profile"><a href="<?php echo get_author_posts_url( get_the_author_id() ); ?>"><?php the_author(); ?></a></li>
			
			<li class="premix-comment"><a href="<?php  comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a></li>
		</ul>
		</div><!-- .premix-latest-news-header END -->
	<div class="premix-news-img">
		<?php 
			  if(has_post_thumbnail())
			  {
				the_post_thumbnail('blog-image');
			  }
		?> 
		
	</div> <!-- .premix-news-img END -->
	<div class="premix-news-footer">
		<?php
			if(!is_single())
			{
				the_excerpt();
			}
			else
			{

				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'READ MORE %s <span class="meta-nav">&rarr;</span>', 'premix' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'premix' ),
					'after'  => '</div>',
				) );
					
			}

		?>
	</div>
</div>
</div>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prebook
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="premix-single-blog-page-element">
		<div class="premix-latest-news-header">
			<?php the_title('<h4>', '</h4>'); ?>
			<ul>
			<li class="premix-profile"><a href="<?php echo get_author_posts_url( get_the_author_id() ); ?>"><?php the_author(); ?></a></li>
			<li class="premix-comment"><a href="<?php  comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a></li>
				<li class="premix-clock"><a href="#"><a href="<?php echo get_day_link(get_the_date('d'), get_the_date('m'), get_the_date('y')); ?>"><span><?php echo get_the_date('d M'); ?></span></a></a></li>
			
			</ul>
		</div> <!-- .premix-latest-news-header END -->
		<?php 
			  if(has_post_thumbnail())
			  {
				the_post_thumbnail('blog-image');
			  }
		?> 
		<div class="premix-single-details">
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
		</div> <!-- .premix-single-details END -->
	</div> <!-- .premix-single-blog-page-element END -->
</article>
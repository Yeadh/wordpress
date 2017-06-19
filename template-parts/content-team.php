<?php		
/**
 * Template Name: Team
 *
 * @package premix
 * @since Premix 1.0
 */
	global $metabox;


	$metabox = get_post_meta(get_the_id(), '_team_member_metabox', true);
	$team_m_possition    = isset($metabox['team_m_possition'])    ? $metabox['team_m_possition'] : array();
	$team_links     = isset($metabox['team_links'])    ? $metabox['team_links'] : array();
?>

					<div class="item">
						<div class="premix-our-team-main-wraper">
							<?php the_post_thumbnail() ; ?>
							<div class="premix-our-team-over-element">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
								<h5><?php echo esc_html($team_m_possition); ?></h5>
							</div> <!-- .premix-our-team-over-element END -->
							<div class="premix-our-team-hover-content">
								<div class="premix-table">
									<div class="premix-table-cell">
										<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
										<h5><?php echo esc_html($team_m_possition); ?></h5>
										<p> <?php the_content(); ?> </p>
										<?php
										  
										  if($team_links) {
											  echo '<ul>';
											  foreach($team_links as $links)
											  {
												echo sprintf('<li><a href="%s"><i class="%s"></i></a></li>',
												  esc_attr($links['url']),
												  esc_attr($links['icon']));
										
											  }
											  echo '</ul>';
										  }
										?>
									</div>
								</div>
							</div> <!-- .premix-our-team-hover-content END -->
						</div> <!-- .premix-our-team-main-wraper END -->
					</div>

			
			
		
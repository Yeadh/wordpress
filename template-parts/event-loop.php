<?php 
	global $event_metabox;
	$event_metabox = get_post_meta( get_the_id(), '_event_metabox', true);
	$event_start_day  = isset($event_metabox['event_startandend_date']['event_date'])    ? $event_metabox['event_startandend_date']['event_date'] : '' ;
	$event_start_month  = isset($event_metabox['event_startandend_date']['event_start_month']) ? $event_metabox['event_startandend_date']['event_start_month'] : '';
	$event_end_month  = isset($event_metabox['event_startandend_date']['event_end_month']) ? $event_metabox['event_startandend_date']['event_end_month'] : '';
	$event_year  = isset($event_metabox['event_startandend_date']['event_year']) ? $event_metabox['event_startandend_date']['event_year'] : '';
	$event_location= isset ($event_metabox['event_location'])  ? $event_metabox['event_location'] : '';
?>
	<li class="clear-both">
		<div class="premix-event-column">
			<div class="premix-event-time">
				<h3><?php echo esc_html($event_start_day); ?> <span><?php echo esc_html($event_start_month); ?>, <?php echo esc_html($event_year); ?></span></h3>
			</div> <!-- .premix-event-time END -->
		</div>
		<div class="premix-event-column">
			<?php the_post_thumbnail(); ?>
		</div> <!-- Event Image END -->
		<div class="premix-event-column">
			<div class="premix-event-title">
				<h4><?php the_title(); ?></h4>
				<p><?php echo esc_html($event_location); ?></p>
			</div>
		</div> <!-- .premix-event-title END -->
		<div class="premix-event-column">
			<a href="<?php the_permalink(); ?>" class="premix-btn details-btn">details</a>
		</div> <!-- .details-btn END -->
	</li> <!-- Premix Single Event li END -->
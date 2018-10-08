<div class="bt-item">
	<div class="bt-media">
		<?php
			$thumb_size = (!empty($img_size))?$img_size:'full'; 
			$thumbnail = wpb_getImageBySize( array(
				'post_id' => $event->ID,
				'attach_id' => null,
				'thumb_size' => $thumb_size,
				'class' => ''
			) );
			echo (!empty($thumbnail)) ? $thumbnail['thumbnail'] : '';
		?>
		<div class="bt-term"><?php the_terms( $event->ID, 'tribe_events_cat', '', ', ' ); ?></div>
	</div>
	<div class="bt-content">
		<h3 class="bt-title"><?php echo '<a href="'.get_permalink($event->ID).'">'.$event->post_title.'</a>'; ?></h3>
		<?php
			$date_format = get_option('date_format');
			$start_date = $event->EventStartDate;
			$start_date = date($date_format, strtotime($event->EventStartDate));
			$end_date = $event->EventEndDate;
			$end_date = date($date_format, strtotime($event->EventEndDate));
			$organizer = tribe_get_organizer($event->ID);
			$venue = tribe_get_venue($event->ID);
		?>
		<ul class="bt-meta">
			<li><?php echo esc_html($start_date); ?></li>
			<li><?php echo esc_html($organizer); ?></li>
			<li><?php echo esc_html($venue); ?></li>
		</ul>
		<?php
			echo '<div class="bt-excerpt">'.wp_trim_words($event->post_excerpt, $excerpt_limit, $excerpt_more).'</div>';
			if(!empty($readmore_text)) echo '<a class="bt-readmore" href="'.get_permalink($event->ID).'">'.$readmore_text.'</a>';
		?>
	</div>
</div>
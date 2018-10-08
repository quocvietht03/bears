<?php
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	
?>
<div class="bt-item">
	<div class="bt-media">
		<?php
			$thumb_size = (!empty($img_size))?$img_size:'full'; 
			$thumbnail = wpb_getImageBySize( array(
				'post_id' => get_the_ID(),
				'attach_id' => null,
				'thumb_size' => $thumb_size,
				'class' => ''
			) );
			echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
		?>
	</div>
	<div class="bt-content">
		<div class="bt-term"><?php esc_html_e('In ', 'bears'); the_terms( get_the_ID(), 'bt_story_category', '', ', ' ); ?></div>
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
</div>
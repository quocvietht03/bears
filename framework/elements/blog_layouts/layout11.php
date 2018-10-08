<?php
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	
	
?>
<div class="bt-item">
	<div class="bt-media <?php echo esc_attr($format); ?>">
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
		<div class="bt-date"><i class="fa fa-calendar"></i> <a href="<?php the_permalink(); ?>"><?php echo esc_html__('on ', 'bears').get_the_date(get_option('date_format')); ?></a></div>
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<ul class="bt-meta">
			<li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo esc_html__('by ', 'bears').get_the_author(); ?></a></li>
			<li><i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( esc_html__('0 Comments', 'bears'), esc_html__('1 Comment', 'bears'), esc_html__('% Comments', 'bears') ); ?></a></li>
		</ul>
		<?php
			if($excerpt_limit != 0) echo '<div class="bt-excerpt">'.wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more).'</div>';
			if(!empty($readmore_text)) echo '<a class="bt-readmore" href="'.get_the_permalink().'">'.$readmore_text.'</a>';
		?>
	</div>
</div>

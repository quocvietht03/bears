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
		<div class="bt-term"><i class="fa fa-folder"></i> <?php the_terms( get_the_ID(), 'category', '', ', ' ); ?></div>
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php if($excerpt_limit != 0) echo '<div class="bt-excerpt">'.wp_trim_words(get_the_excerpt(), $excerpt_limit, $excerpt_more).'</div>'; ?>
		<ul class="bt-meta">
			<li><i class="fa fa-calendar"></i> <a href="<?php the_permalink(); ?>"><?php echo get_the_date(get_option('date_format')); ?></a></li>
			<li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a></li>
		</ul>
	</div>
</div>

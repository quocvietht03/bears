<?php
	global $bears_options;
	$post_title = isset($bears_options['story_title']) ? $bears_options['story_title']: true;
	$post_featured = isset($bears_options['story_featured']) ? $bears_options['story_featured']: true;
	$post_image_size = isset($bears_options['story_image_size']) ? $bears_options['story_image_size']: '';
	$post_meta = isset($bears_options['story_meta']) ? $bears_options['story_meta']: true;
	$post_excerpt = isset($bears_options['story_excerpt']) ? $bears_options['story_excerpt']: true;
	$post_excerpt_length = (int) isset($bears_options['story_excerpt_length']) ? $bears_options['story_excerpt_length']: 55;
	$post_excerpt_more = isset($bears_options['story_excerpt_more']) ? $bears_options['story_excerpt_more']: '[...]';
	$post_readmore = isset($bears_options['story_readmore']) ? $bears_options['story_readmore']: true;
	$post_readmore_label = isset($bears_options['story_readmore_label'])&&$bears_options['story_readmore_label'] ? $bears_options['story_readmore_label']: esc_html__('Read More', 'bears');
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$story_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'story_options'):array();

	$email = isset($story_options['email'])?$story_options['email']:'';
	$phone = isset($story_options['phone'])?$story_options['phone']:'';

?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		<div class="bt-header">
			<div class="bt-info">
				<div class="bt-inner">
					<?php if($post_meta) the_terms( get_the_ID(), 'bt_story_category', '<div class="bt-term"><i class="fa fa-folder"></i> '.esc_html__('In ', 'bears'), ', ', '</div>' ); ?>
					<?php if($post_title){ ?>
						<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php } ?>
					<?php if($post_meta){ ?>
						<ul class="bt-meta">
							<li><i class="fa fa-calendar"></i> <a href="<?php the_permalink(); ?>"><?php echo esc_html__('on ', 'bears').get_the_date(get_option('date_format')); ?></a></li>
							<li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo esc_html__('by ', 'bears').get_the_author(); ?></a></li>
							<li class="bt-phone"><?php echo '<i class="fa fa-phone"></i> <a href="tel:'.esc_attr($phone).'">'.$phone.'</a>'; ?></li>
							<li class="bt-phone"><?php echo '<i class="fa fa-envelope"></i> <a href="mailto:'.esc_attr($email).'">'.$email.'</a>'; ?></li>
						</ul>
					<?php } ?>
				</div>
			</div>
			<?php if($post_featured && has_post_thumbnail()){ ?>
				<div class="bt-media">
					<?php
						if($post_image_size){
							$thumb_size = (!empty($post_image_size))?$post_image_size:'full'; 
							$thumbnail = wpb_getImageBySize( array(
								'post_id' => get_the_ID(),
								'attach_id' => null,
								'thumb_size' => $thumb_size,
								'class' => ''
							) );
							echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
						}else{
							if (has_post_thumbnail()) the_post_thumbnail('full');
						}
					?>
				</div>
			<?php } ?>
		</div>
		<?php if($post_excerpt){ ?>
			<div class="bt-excerpt">
				<?php echo wp_trim_words(get_the_excerpt(), $post_excerpt_length, $post_excerpt_more); ?>
			</div>
		<?php } ?>
		
		<?php if($post_readmore){ ?>
			<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php echo esc_html($post_readmore_label); ?></a>
		<?php } ?>
	</div>
</article>

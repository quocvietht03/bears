<?php
	global $bears_options;
	$post_title = isset($bears_options['post_title']) ? $bears_options['post_title']: true;
	$post_featured = isset($bears_options['post_featured']) ? $bears_options['post_featured']: true;
	$post_image_size = isset($bears_options['post_image_size']) ? $bears_options['post_image_size']: '';
	$post_meta = isset($bears_options['post_meta']) ? $bears_options['post_meta']: true;
	$post_meta_author = isset($bears_options['post_meta_author']) ? $bears_options['post_meta_author']: true;
	$post_meta_date = isset($bears_options['post_meta_date']) ? $bears_options['post_meta_date']: true;
	$post_meta_comment = isset($bears_options['post_meta_comment']) ? $bears_options['post_meta_comment']: true;
	$post_meta_category = isset($bears_options['post_meta_category']) ? $bears_options['post_meta_category']: true;
	$post_excerpt = isset($bears_options['post_excerpt']) ? $bears_options['post_excerpt']: true;
	$post_excerpt_length = (int) isset($bears_options['post_excerpt_length']) ? $bears_options['post_excerpt_length']: 55;
	$post_excerpt_more = isset($bears_options['post_excerpt_more']) ? $bears_options['post_excerpt_more']: '[...]';
	$post_readmore = isset($bears_options['post_readmore']) ? $bears_options['post_readmore']: true;
	$post_readmore_label = isset($bears_options['post_readmore_label'])&&$bears_options['post_readmore_label'] ? $bears_options['post_readmore_label']: esc_html__('Read More', 'bears');
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$quote_text = isset($post_options['quote_text'])?$post_options['quote_text']:'';
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
					if($quote_text){
						echo '<blockquote>'.$quote_text.'</blockquote>';
					}else{
						if($post_image_size && function_exists('wpb_getImageBySize')){
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
					}
				?>
			</div>
		<?php } ?>
		
		<?php if($post_title || $post_meta){ ?>
		
			<?php if($post_meta && $post_meta_category) the_terms( get_the_ID(), 'category', '<div class="bt-term"><i class="fa fa-folder"></i> '.esc_html__('in ', 'bears'), ', ', '</div>' ); ?>
			
			<?php if($post_title){ ?>
				<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php } ?>
			
			<?php if($post_meta){ ?>
				<ul class="bt-meta">
					<?php if($post_meta_author){ ?>
						<li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo esc_html__('by ', 'bears').get_the_author(); ?></a></li>
					<?php } ?>
					<?php if($post_meta_date){ ?>
						<li><i class="fa fa-calendar"></i> <a href="<?php the_permalink(); ?>"><?php echo esc_html__('on ', 'bears').get_the_date(get_option('date_format')); ?></a></li>
					<?php } ?>
					<?php if($post_meta_comment && comments_open()){ ?>
						<li><i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( esc_html__('0 Comments', 'bears'), esc_html__('1 Comment', 'bears'), esc_html__('% Comments', 'bears') ); ?></a></li>
					<?php } ?>
				</ul>
			<?php } ?>
			
		<?php } ?>
		
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

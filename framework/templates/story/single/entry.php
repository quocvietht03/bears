<?php
global $bears_options;
$post_title = isset($bears_options['single_story_title']) ? $bears_options['single_story_title']: true;
$post_featured = isset($bears_options['single_story_featured']) ? $bears_options['single_story_featured']: true;
$post_image_size = isset($bears_options['single_story_image_size']) ? $bears_options['single_story_image_size']: '';
$post_meta = isset($bears_options['single_story_meta']) ? $bears_options['single_story_meta']: true;
$post_content = isset($bears_options['single_story_content']) ? $bears_options['single_story_content']: true;

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
						<h3 class="bt-title"><?php the_title(); ?></h3>
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
		<?php if($post_content){ ?>
			<div class="bt-content"><?php the_content(); ?></div>
		<?php } ?>
	</div>
</article>
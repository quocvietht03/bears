<?php
global $bears_options;
$post_title = isset($bears_options['single_services_title']) ? $bears_options['single_services_title']: true;
$post_featured = isset($bears_options['single_services_featured']) ? $bears_options['single_services_featured']: true;
$post_image_size = isset($bears_options['single_services_image_size']) ? $bears_options['single_services_image_size']: '';
$post_meta = isset($bears_options['single_services_meta']) ? $bears_options['single_services_meta']: true;
$post_content = isset($bears_options['single_services_content']) ? $bears_options['single_services_content']: true;

$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'services_options'):array();

$icon_font = isset($post_options['icon_font'])?$post_options['icon_font']:'';
$icon_image = isset($post_options['icon_image'])?$post_options['icon_image']:'';

?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
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
		<?php if($post_meta || $post_title){ ?>
			<div class="bt-header">
				<div class="bt-icon">
					<?php
						if(isset($icon_image['url']) && $icon_image['url']){
							echo '<img src="'.esc_url($icon_image['url']).'" alt="'.esc_attr__('Icon', 'bears').'"/>';
						}else{
							echo '<i class="'.esc_attr($icon_font).'"></i>';
						}
					?>
				</div>
				<div class="bt-content">
					<?php if($post_meta) the_terms( get_the_ID(), 'bt_services_category', '<div class="bt-term">', ', ', '</div>' ); ?>
					<?php if($post_title){ ?>
						<h3 class="bt-title"><?php the_title(); ?></h3>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
		<?php if($post_content){ ?>
			<div class="bt-content"><?php the_content(); ?></div>
		<?php } ?>
	</div>
</article>
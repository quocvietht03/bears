<?php
	global $bears_options;
	$post_title = isset($bears_options['single_post_title']) ? $bears_options['single_post_title']: false;
	$post_featured = isset($bears_options['single_post_featured']) ? $bears_options['single_post_featured']: true;
	$post_image_size = isset($bears_options['single_post_image_size']) ? $bears_options['single_post_image_size']: '';
	$post_meta = isset($bears_options['single_post_meta']) ? $bears_options['single_post_meta']: true;
	$post_meta_author = isset($bears_options['single_post_meta_author']) ? $bears_options['single_post_meta_author']: true;
	$post_meta_date = isset($bears_options['single_post_meta_date']) ? $bears_options['single_post_meta_date']: true;
	$post_meta_comment = isset($bears_options['single_post_meta_comment']) ? $bears_options['single_post_meta_comment']: true;
	$post_meta_category = isset($bears_options['single_post_meta_category']) ? $bears_options['single_post_meta_category']: true;
	$post_content = isset($bears_options['single_post_content']) ? $bears_options['single_post_content']: true;
	$post_tag = isset($bears_options['single_post_tag']) ? $bears_options['single_post_tag']: true;
	$post_share = isset($bears_options['single_post_share']) ? $bears_options['single_post_share']: false;
	$post_share_label = isset($bears_options['single_post_share_label'])&&$bears_options['single_post_share_label'] ? $bears_options['single_post_share_label']: esc_html__('Share:', 'bears');
	$social_item = array();
	$share_facebook = isset($bears_options['single_post_share_facebook']) ? $bears_options['single_post_share_facebook']: true;
	if($share_facebook){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Facebook', 'bears').'" href="https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink().'"><i class="fa fa-facebook"></i></a></li>';
	}
	$share_twitter = isset($bears_options['single_post_share_twitter']) ? $bears_options['single_post_share_twitter']: true;
	if($share_twitter){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Twitter', 'bears').'" href="https://twitter.com/share?url='.get_the_permalink().'"><i class="fa fa-twitter"></i></a></li>';
	}
	$share_google_plus = isset($bears_options['single_post_share_google_plus']) ? $bears_options['single_post_share_google_plus']: true;
	if($share_google_plus){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Google Plus', 'bears').'" href="https://plus.google.com/share?url='.get_the_permalink().'"><i class="fa fa-google-plus"></i></a></li>';
	}
	$share_linkedin = isset($bears_options['single_post_share_linkedin']) ? $bears_options['single_post_share_linkedin']: true;
	if($share_linkedin){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Linkedin', 'bears').'" href="https://www.linkedin.com/shareArticle?url='.get_the_permalink().'"><i class="fa fa-linkedin"></i></a></li>';
	}
	$share_pinterest = isset($bears_options['single_post_share_pinterest']) ? $bears_options['single_post_share_pinterest']: true;
	if($share_pinterest){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Pinterest', 'bears').'" href="https://pinterest.com/pin/create/button/?url='.get_the_permalink().'"><i class="fa fa-pinterest"></i></a></li>';
	}
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$url = isset($post_options['url'])?$post_options['url']:'';
	
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
					if($url){
						echo '<a href="'.esc_url($url).'" target="_blank">'.$url.'</a>';
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
		
			<?php if($post_meta) the_terms( get_the_ID(), 'category', '<div class="bt-term"><i class="fa fa-folder"></i> '.esc_html__('in ', 'bears'), ', ', '</div>' ); ?>
			
			<?php if($post_title){ ?>
				<h3 class="bt-title"><?php the_title(); ?></h3>
			<?php } ?>
			
			<?php if($post_meta && $post_meta_category){ ?>
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
		
		<?php if($post_content){ ?>
			<div class="bt-content">
				<?php
					the_content();
					wp_link_pages(array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'bears'),
						'after' => '</div>',
					));
				?>
			</div>
		<?php } ?>
		
		<?php if($post_tag || $post_share){ ?>
			<div class="bt-tag-share">
				<?php if($post_tag){ ?>
					<div class="bt-tag"><?php the_tags( '', '', '' ); ?> </div>
				<?php } ?>
				<?php if($post_share){ ?>
					<div class="bt-share">
						<?php
							if(!empty($social_item)){
								echo '<h4>'.$post_share_label.'</h4><ul>'.implode(' ', $social_item).'</ul>';
							}
						?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</article>

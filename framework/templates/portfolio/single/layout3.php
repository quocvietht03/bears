<?php
global $bears_options;
$portfolio_options = function_exists('fw_get_db_post_option')?fw_get_db_post_option(get_the_ID(), 'portfolio_options'):array();

$post_image_size = isset($bears_options['single_portolio_image_size']) ? $bears_options['single_portolio_image_size']: '';

$gallery_column = isset($portfolio_options['gallery-column'])?$portfolio_options['gallery-column']:'col-md-12';
$gallery_space = isset($portfolio_options['gallery-space'])?(int)$portfolio_options['gallery-space']:0;
$gallery_space_style = 'margin-bottom: '.$gallery_space.'px; padding: 0 '.($gallery_space/2).'px;';

$infor_title = isset($portfolio_options['infor-title'])?$portfolio_options['infor-title']:'';
$info_options = isset($portfolio_options['info-option'])?$portfolio_options['info-option']:array();
$infor_avatar = isset($portfolio_options['infor-avatar'])?$portfolio_options['infor-avatar']:'';

$info_item = array();
if(!empty($info_options)){
	foreach($info_options as $info_option){
		$info_item[] = '<li><span>'.$info_option['title'].'</span>'.$info_option['value'].'</li>';
	}
}

$social_title = isset($portfolio_options['social-title'])?$portfolio_options['social-title']:'';
$social = isset($portfolio_options['social'])?$portfolio_options['social']:array();

$social_item = array();
if(!empty($social)){
	foreach($social as $item){
		$social_item[] = '<li><a href="'.esc_url($item['link']).'"><i class="'.esc_attr($item['icon']).'"></i></a></li>';
	}
}

$brochure_title = isset($portfolio_options['brochure-title'])?$portfolio_options['brochure-title']:'';
$brochure_desc = isset($portfolio_options['brochure-desc'])?$portfolio_options['brochure-desc']:'';
$brochure_button_label = isset($portfolio_options['brochure-button-label'])?$portfolio_options['brochure-button-label']:'';
$brochure_button_url = isset($portfolio_options['brochure-button-url'])?$portfolio_options['brochure-button-url']:'';

$data_script = "jQuery(document).ready(function($) {
					if ($('.bt-gallery-slider .slider-for').length) {
						$('.slider-for').slick({
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: false,
							fade: true,
							asNavFor: '.slider-nav'
						});
						$('.slider-nav').slick({
							slidesToShow: 6,
							slidesToScroll: 1,
							asNavFor: '.slider-for',
							arrows: false,
							dots: false,
							centerMode: false,
							focusOnSelect: true
						});
					}
				});";

wp_enqueue_script( 'slick');
wp_add_inline_script( 'bears-main', $data_script );
wp_enqueue_style('slick');

?>

<article <?php post_class('layout3'); ?>>
	<div class="row">
		<div class="col-md-7">
			<?php
				$project_gallery = function_exists('fw_ext_portfolio_get_gallery_images')?fw_ext_portfolio_get_gallery_images():array();
				if(!empty($project_gallery)){
					?>
						<div class="bt-gallery-slider-wrap">
							<div class="bt-gallery-slider">
								<div class="slider-for">
									<?php 
										foreach($project_gallery as $attachment){
											echo '<div class="bt-item">
													<img src="'.esc_url($attachment['url']).'" alt="'.esc_attr__('Thumbnail', 'bears').'"/>
												</div>';
										}
									?>
								</div>
								<div class="slider-nav">
									<?php 
										foreach($project_gallery as $attachment){
											echo '<div class="bt-item">
													<div class="bt-overlay"><i class="fa fa-plus"></i></div>'.wp_get_attachment_image ($attachment['attachment_id'], 'thumbnail').'
												</div>';
										}
									?>
								</div>
							</div>
						</div>
					<?php
				}else{
					if($post_image_size){
						$thumb_size = (!empty($post_image_size))?$post_image_size:'full'; 
						$thumbnail = wpb_getImageBySize( array(
							'post_id' => get_the_ID(),
							'attach_id' => null,
							'thumb_size' => $thumb_size,
							'class' => ''
						) );
						echo (!empty($thumbnail))?'<div class="bt-thumbnail">'.$thumbnail['thumbnail'].'</div>':'';
					}else{
						echo '<div class="bt-thumbnail">'.get_the_post_thumbnail('full').'</div>';
					}
				}
			?>
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="bt-brochure">
						<?php
							if($brochure_title) echo '<h4 class="bt-title">'.$brochure_title.'</h4>';
							if($brochure_desc) echo '<div class="bt-desc">'.$brochure_desc.'</div>';
							if($brochure_button_label) echo '<div class="bt-button-element"><a href="'.esc_url($brochure_button_url).'">'.$brochure_button_label.'</a></div>';
						?>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="bt-info">
						<?php
							if($infor_title) echo '<h4 class="bt-title">'.$infor_title.'</h4>';
							if(!empty($infor_avatar)) echo '<div class="bt-avatar">'.wp_get_attachment_image ($infor_avatar['attachment_id'], 'thumbnail').'</div>';
							if(!empty($info_item)) echo '<ul>'.implode(' ', $info_item).'</ul>'; 
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<h4 class="bt-term"><?php the_terms( get_the_ID(), 'fw-portfolio-category', '', ', ' ); ?></h4>
			<h3 class="bt-title"><?php the_title(); ?></h3>
			<div class="bt-desc"><?php the_content(); ?></div>
		</div>
	</div>
</article>

<?php
$team_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'team_options'):array();

$positon = isset($team_options['position'])?$team_options['position']:'';
$email = isset($team_options['email'])?$team_options['email']:'';
$phone = isset($team_options['phone'])?$team_options['phone']:'';
$social = isset($team_options['social'])?$team_options['social']:array();

$social_item = array();
if(!empty($social)){
	foreach($social as $item){
		$social_item[] = '<li><a href="'.esc_url($item['link']).'"><i class="'.esc_attr($item['icon']).'"></i></a></li>';
	}
}
?>
<article <?php post_class(); ?>>
	<div class="row">
		<div class="col-md-4 col-md-offset-1">
			<div class="bt-thumb">
				<?php if (has_post_thumbnail()) the_post_thumbnail('full'); ?>
			</div>
		</div>
		<div class="col-md-6">
			<h5 class="bt-position"><?php echo esc_html($positon); ?></h5>
			<h3 class="bt-title"><?php the_title(); ?></h3>
			<div class="bt-meta">
				<div class="bt-phone"><?php echo esc_html__('Phone: ', 'bears').'<a class="bt-phone" href="tel:'.esc_attr($phone).'">'.$phone.'</a>'; ?></div>
				<div class="bt-email"><?php echo esc_html__('Email: ', 'bears').'<a class="bt-email" href="mailto:'.esc_attr($email).'">'.$email.'</a>'; ?></div>
				<div class="bt-social"><?php if(!empty($social_item)) echo esc_html__('Social: ', 'bears').'<ul class="bt-socials">'.implode(' ', $social_item).'</ul>'; ?></div>
			</div>
			<div class="bt-content"><?php the_content(); ?></div>
		</div>
	</div>
</article>
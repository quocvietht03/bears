<?php
/*
Template Name: 404 Template
*/
?>
<?php get_header(); ?>
	<div class="bt-main-content">
		<div class="bt-error404-wrap">
			<div class="bt-thumb">
				<img src="<?php echo get_template_directory_uri().'/assets/images/404.jpg'; ?>" alt="<?php esc_attr_e('Error 404', 'bears') ?>"/>
			</div>
			<div class="bt-content">
				<h1><?php echo esc_html__('Woops, looks like','bears').'<br class="hidden-xs">'.esc_html__('this page doesn\'t exist', 'bears'); ?></h1>
				<p><?php esc_html__('You could either go back or go to homepage', 'bears'); ?></p>
				<div class="bt-actions">
					<a href="<?php echo esc_url(home_url('/')) ?>"><?php esc_html_e('Go To Homepage', 'bears'); ?></a>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
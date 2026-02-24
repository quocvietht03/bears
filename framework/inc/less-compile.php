<?php
function bears_autoCompileLess($inputFile, $outputFile) {
    require_once ABSPATH.'/wp-admin/includes/file.php';	
	WP_Filesystem();
	if(!class_exists('lessc')){
		require_once get_template_directory().'/framework/inc/lessc.inc.php';
	}
	global $wp_filesystem, $bears_options;
    $less = new lessc();
    $less->setFormatter("classic");
    $less->setPreserveComments(true);
	
	/*Styling Options*/
	$package_style = isset($bears_options['package_style'])&&$bears_options['package_style'] ? $bears_options['package_style']: 'default';
	
	$site_width = (isset($bears_options['site_width'])&&$bears_options['site_width'])?$bears_options['site_width'].'px': '1200px';
	$mobile_width = (isset($bears_options['mobile_width'])&&$bears_options['mobile_width'])?$bears_options['mobile_width'].'px': '991px';
	
	$main_color = (isset($bears_options['main_color'])&&$bears_options['main_color'])?$bears_options['main_color']: '#49c9e6';
	$secondary_color = (isset($bears_options['secondary_color'])&&$bears_options['secondary_color'])?$bears_options['secondary_color']: '#eab245';
	
	$h1_menu_first_level_color_active = (isset($bears_options['h1_menu_first_level_color']['active'])&&$bears_options['h1_menu_first_level_color']['active'])?$bears_options['h1_menu_first_level_color']['active']: '#49c9e6';
	$h1_menu_sub_level_color_active = (isset($bears_options['h1_menu_sub_level_color']['active'])&&$bears_options['h1_menu_sub_level_color']['active'])?$bears_options['h1_menu_sub_level_color']['active']: '#49c9e6';
	$h1_menu_first_level_color_stick_active = (isset($bears_options['h1_menu_first_level_color_stick']['active'])&&$bears_options['h1_menu_first_level_color_stick']['active'])?$bears_options['h1_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h1_mobile_toggle_button_default = (isset($bears_options['h1_mobile_toggle_button']['regular'])&&$bears_options['h1_mobile_toggle_button']['regular'])?$bears_options['h1_mobile_toggle_button']['regular']: '#333333';
	$h1_mobile_toggle_button_hover = (isset($bears_options['h1_mobile_toggle_button']['hover'])&&$bears_options['h1_mobile_toggle_button']['hover'])?$bears_options['h1_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h1_menu_mobile_first_level_color_active = (isset($bears_options['h1_menu_mobile_first_level_color']['active'])&&$bears_options['h1_menu_mobile_first_level_color']['active'])?$bears_options['h1_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h1_menu_mobile_sub_level_color_active = (isset($bears_options['h1_menu_mobile_sub_level_color']['active'])&&$bears_options['h1_menu_mobile_sub_level_color']['active'])?$bears_options['h1_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h2_menu_first_level_color_active = (isset($bears_options['h2_menu_first_level_color']['active'])&&$bears_options['h2_menu_first_level_color']['active'])?$bears_options['h2_menu_first_level_color']['active']: '#49c9e6';
	$h2_menu_sub_level_color_active = (isset($bears_options['h2_menu_sub_level_color']['active'])&&$bears_options['h2_menu_sub_level_color']['active'])?$bears_options['h2_menu_sub_level_color']['active']: '#49c9e6';
	$h2_menu_first_level_color_stick_active = (isset($bears_options['h2_menu_first_level_color_stick']['active'])&&$bears_options['h2_menu_first_level_color_stick']['active'])?$bears_options['h2_menu_first_level_color_stick']['active']: '#49c9e6';

	$h2_mobile_toggle_button_default = (isset($bears_options['h2_mobile_toggle_button']['regular'])&&$bears_options['h2_mobile_toggle_button']['regular'])?$bears_options['h2_mobile_toggle_button']['regular']: '#333333';
	$h2_mobile_toggle_button_hover = (isset($bears_options['h2_mobile_toggle_button']['hover'])&&$bears_options['h2_mobile_toggle_button']['hover'])?$bears_options['h2_mobile_toggle_button']['hover']: '#49c9e6';

	$h2_menu_mobile_first_level_color_active = (isset($bears_options['h2_menu_mobile_first_level_color']['active'])&&$bears_options['h2_menu_mobile_first_level_color']['active'])?$bears_options['h2_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h2_menu_mobile_sub_level_color_active = (isset($bears_options['h2_menu_mobile_sub_level_color']['active'])&&$bears_options['h2_menu_mobile_sub_level_color']['active'])?$bears_options['h2_menu_mobile_sub_level_color']['active']: '#49c9e6';

	$h3_menu_first_level_color_active = (isset($bears_options['h3_menu_first_level_color']['active'])&&$bears_options['h3_menu_first_level_color']['active'])?$bears_options['h3_menu_first_level_color']['active']: '#49c9e6';
	$h3_menu_sub_level_color_active = (isset($bears_options['h3_menu_sub_level_color']['active'])&&$bears_options['h3_menu_sub_level_color']['active'])?$bears_options['h3_menu_sub_level_color']['active']: '#49c9e6';
	$h3_menu_first_level_color_stick_active = (isset($bears_options['h3_menu_first_level_color_stick']['active'])&&$bears_options['h3_menu_first_level_color_stick']['active'])?$bears_options['h3_menu_first_level_color_stick']['active']: '#49c9e6';

	$h3_mobile_toggle_button_default = (isset($bears_options['h3_mobile_toggle_button']['regular'])&&$bears_options['h3_mobile_toggle_button']['regular'])?$bears_options['h3_mobile_toggle_button']['regular']: '#333333';
	$h3_mobile_toggle_button_hover = (isset($bears_options['h3_mobile_toggle_button']['hover'])&&$bears_options['h3_mobile_toggle_button']['hover'])?$bears_options['h3_mobile_toggle_button']['hover']: '#49c9e6';

	$h3_menu_mobile_first_level_color_active = (isset($bears_options['h3_menu_mobile_first_level_color']['active'])&&$bears_options['h3_menu_mobile_first_level_color']['active'])?$bears_options['h3_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h3_menu_mobile_sub_level_color_active = (isset($bears_options['h3_menu_mobile_sub_level_color']['active'])&&$bears_options['h3_menu_mobile_sub_level_color']['active'])?$bears_options['h3_menu_mobile_sub_level_color']['active']: '#49c9e6';	
	
	$h4_menu_first_level_color_active = (isset($bears_options['h4_menu_first_level_color']['active'])&&$bears_options['h4_menu_first_level_color']['active'])?$bears_options['h4_menu_first_level_color']['active']: '#49c9e6';
	$h4_menu_sub_level_color_active = (isset($bears_options['h4_menu_sub_level_color']['active'])&&$bears_options['h4_menu_sub_level_color']['active'])?$bears_options['h4_menu_sub_level_color']['active']: '#49c9e6';
	$h4_menu_first_level_color_stick_active = (isset($bears_options['h4_menu_first_level_color_stick']['active'])&&$bears_options['h4_menu_first_level_color_stick']['active'])?$bears_options['h4_menu_first_level_color_stick']['active']: '#49c9e6';

	$h4_mobile_toggle_button_default = (isset($bears_options['h4_mobile_toggle_button']['regular'])&&$bears_options['h4_mobile_toggle_button']['regular'])?$bears_options['h4_mobile_toggle_button']['regular']: '#333333';
	$h4_mobile_toggle_button_hover = (isset($bears_options['h4_mobile_toggle_button']['hover'])&&$bears_options['h4_mobile_toggle_button']['hover'])?$bears_options['h4_mobile_toggle_button']['hover']: '#49c9e6';

	$h4_menu_mobile_first_level_color_active = (isset($bears_options['h4_menu_mobile_first_level_color']['active'])&&$bears_options['h4_menu_mobile_first_level_color']['active'])?$bears_options['h4_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h4_menu_mobile_sub_level_color_active = (isset($bears_options['h4_menu_mobile_sub_level_color']['active'])&&$bears_options['h4_menu_mobile_sub_level_color']['active'])?$bears_options['h4_menu_mobile_sub_level_color']['active']: '#49c9e6';	
	
	$h5_menu_first_level_color_active = (isset($bears_options['h5_menu_first_level_color']['active'])&&$bears_options['h5_menu_first_level_color']['active'])?$bears_options['h5_menu_first_level_color']['active']: '#49c9e6';
	$h5_menu_sub_level_color_active = (isset($bears_options['h5_menu_sub_level_color']['active'])&&$bears_options['h5_menu_sub_level_color']['active'])?$bears_options['h5_menu_sub_level_color']['active']: '#49c9e6';
	$h5_menu_first_level_color_stick_active = (isset($bears_options['h5_menu_first_level_color_stick']['active'])&&$bears_options['h5_menu_first_level_color_stick']['active'])?$bears_options['h5_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h5_mobile_toggle_button_default = (isset($bears_options['h5_mobile_toggle_button']['regular'])&&$bears_options['h5_mobile_toggle_button']['regular'])?$bears_options['h5_mobile_toggle_button']['regular']: '#333333';
	$h5_mobile_toggle_button_hover = (isset($bears_options['h5_mobile_toggle_button']['hover'])&&$bears_options['h5_mobile_toggle_button']['hover'])?$bears_options['h5_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h5_menu_mobile_first_level_color_active = (isset($bears_options['h5_menu_mobile_first_level_color']['active'])&&$bears_options['h5_menu_mobile_first_level_color']['active'])?$bears_options['h5_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h5_menu_mobile_sub_level_color_active = (isset($bears_options['h5_menu_mobile_sub_level_color']['active'])&&$bears_options['h5_menu_mobile_sub_level_color']['active'])?$bears_options['h5_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h6_menu_first_level_color_active = (isset($bears_options['h6_menu_first_level_color']['active'])&&$bears_options['h6_menu_first_level_color']['active'])?$bears_options['h6_menu_first_level_color']['active']: '#49c9e6';
	$h6_menu_sub_level_color_active = (isset($bears_options['h6_menu_sub_level_color']['active'])&&$bears_options['h6_menu_sub_level_color']['active'])?$bears_options['h6_menu_sub_level_color']['active']: '#49c9e6';
	$h6_menu_first_level_color_stick_active = (isset($bears_options['h6_menu_first_level_color_stick']['active'])&&$bears_options['h6_menu_first_level_color_stick']['active'])?$bears_options['h6_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h6_mobile_toggle_button_default = (isset($bears_options['h6_mobile_toggle_button']['regular'])&&$bears_options['h6_mobile_toggle_button']['regular'])?$bears_options['h6_mobile_toggle_button']['regular']: '#333333';
	$h6_mobile_toggle_button_hover = (isset($bears_options['h6_mobile_toggle_button']['hover'])&&$bears_options['h6_mobile_toggle_button']['hover'])?$bears_options['h6_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h6_menu_mobile_first_level_color_active = (isset($bears_options['h6_menu_mobile_first_level_color']['active'])&&$bears_options['h6_menu_mobile_first_level_color']['active'])?$bears_options['h6_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h6_menu_mobile_sub_level_color_active = (isset($bears_options['h6_menu_mobile_sub_level_color']['active'])&&$bears_options['h6_menu_mobile_sub_level_color']['active'])?$bears_options['h6_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h7_menu_first_level_color_active = (isset($bears_options['h7_menu_first_level_color']['active'])&&$bears_options['h7_menu_first_level_color']['active'])?$bears_options['h7_menu_first_level_color']['active']: '#49c9e6';
	$h7_menu_sub_level_color_active = (isset($bears_options['h7_menu_sub_level_color']['active'])&&$bears_options['h7_menu_sub_level_color']['active'])?$bears_options['h7_menu_sub_level_color']['active']: '#49c9e6';
	$h7_menu_first_level_color_stick_active = (isset($bears_options['h7_menu_first_level_color_stick']['active'])&&$bears_options['h7_menu_first_level_color_stick']['active'])?$bears_options['h7_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h7_mobile_toggle_button_default = (isset($bears_options['h7_mobile_toggle_button']['regular'])&&$bears_options['h7_mobile_toggle_button']['regular'])?$bears_options['h7_mobile_toggle_button']['regular']: '#333333';
	$h7_mobile_toggle_button_hover = (isset($bears_options['h7_mobile_toggle_button']['hover'])&&$bears_options['h7_mobile_toggle_button']['hover'])?$bears_options['h7_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h7_menu_mobile_first_level_color_active = (isset($bears_options['h7_menu_mobile_first_level_color']['active'])&&$bears_options['h7_menu_mobile_first_level_color']['active'])?$bears_options['h7_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h7_menu_mobile_sub_level_color_active = (isset($bears_options['h7_menu_mobile_sub_level_color']['active'])&&$bears_options['h7_menu_mobile_sub_level_color']['active'])?$bears_options['h7_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h8_menu_first_level_color_active = (isset($bears_options['h8_menu_first_level_color']['active'])&&$bears_options['h8_menu_first_level_color']['active'])?$bears_options['h8_menu_first_level_color']['active']: '#49c9e6';
	$h8_menu_sub_level_color_active = (isset($bears_options['h8_menu_sub_level_color']['active'])&&$bears_options['h8_menu_sub_level_color']['active'])?$bears_options['h8_menu_sub_level_color']['active']: '#49c9e6';
	$h8_menu_first_level_color_stick_active = (isset($bears_options['h8_menu_first_level_color_stick']['active'])&&$bears_options['h8_menu_first_level_color_stick']['active'])?$bears_options['h8_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h8_mobile_toggle_button_default = (isset($bears_options['h8_mobile_toggle_button']['regular'])&&$bears_options['h8_mobile_toggle_button']['regular'])?$bears_options['h8_mobile_toggle_button']['regular']: '#333333';
	$h8_mobile_toggle_button_hover = (isset($bears_options['h8_mobile_toggle_button']['hover'])&&$bears_options['h8_mobile_toggle_button']['hover'])?$bears_options['h8_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h8_menu_mobile_first_level_color_active = (isset($bears_options['h8_menu_mobile_first_level_color']['active'])&&$bears_options['h8_menu_mobile_first_level_color']['active'])?$bears_options['h8_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h8_menu_mobile_sub_level_color_active = (isset($bears_options['h8_menu_mobile_sub_level_color']['active'])&&$bears_options['h8_menu_mobile_sub_level_color']['active'])?$bears_options['h8_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h9_menu_first_level_color_active = (isset($bears_options['h9_menu_first_level_color']['active'])&&$bears_options['h9_menu_first_level_color']['active'])?$bears_options['h9_menu_first_level_color']['active']: '#49c9e6';
	$h9_menu_sub_level_color_active = (isset($bears_options['h9_menu_sub_level_color']['active'])&&$bears_options['h9_menu_sub_level_color']['active'])?$bears_options['h9_menu_sub_level_color']['active']: '#49c9e6';
	$h9_menu_first_level_color_stick_active = (isset($bears_options['h9_menu_first_level_color_stick']['active'])&&$bears_options['h9_menu_first_level_color_stick']['active'])?$bears_options['h9_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h9_mobile_toggle_button_default = (isset($bears_options['h9_mobile_toggle_button']['regular'])&&$bears_options['h9_mobile_toggle_button']['regular'])?$bears_options['h9_mobile_toggle_button']['regular']: '#333333';
	$h9_mobile_toggle_button_hover = (isset($bears_options['h9_mobile_toggle_button']['hover'])&&$bears_options['h9_mobile_toggle_button']['hover'])?$bears_options['h9_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h9_menu_mobile_first_level_color_active = (isset($bears_options['h9_menu_mobile_first_level_color']['active'])&&$bears_options['h9_menu_mobile_first_level_color']['active'])?$bears_options['h9_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h9_menu_mobile_sub_level_color_active = (isset($bears_options['h9_menu_mobile_sub_level_color']['active'])&&$bears_options['h9_menu_mobile_sub_level_color']['active'])?$bears_options['h9_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h10_menu_first_level_color_active = (isset($bears_options['h10_menu_first_level_color']['active'])&&$bears_options['h10_menu_first_level_color']['active'])?$bears_options['h10_menu_first_level_color']['active']: '#49c9e6';
	$h10_menu_sub_level_color_active = (isset($bears_options['h10_menu_sub_level_color']['active'])&&$bears_options['h10_menu_sub_level_color']['active'])?$bears_options['h10_menu_sub_level_color']['active']: '#49c9e6';
	$h10_menu_first_level_color_stick_active = (isset($bears_options['h10_menu_first_level_color_stick']['active'])&&$bears_options['h10_menu_first_level_color_stick']['active'])?$bears_options['h10_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h10_mobile_toggle_button_default = (isset($bears_options['h10_mobile_toggle_button']['regular'])&&$bears_options['h10_mobile_toggle_button']['regular'])?$bears_options['h10_mobile_toggle_button']['regular']: '#333333';
	$h10_mobile_toggle_button_hover = (isset($bears_options['h10_mobile_toggle_button']['hover'])&&$bears_options['h10_mobile_toggle_button']['hover'])?$bears_options['h10_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h10_menu_mobile_first_level_color_active = (isset($bears_options['h10_menu_mobile_first_level_color']['active'])&&$bears_options['h10_menu_mobile_first_level_color']['active'])?$bears_options['h10_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h10_menu_mobile_sub_level_color_active = (isset($bears_options['h10_menu_mobile_sub_level_color']['active'])&&$bears_options['h10_menu_mobile_sub_level_color']['active'])?$bears_options['h10_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h11_menu_first_level_color_active = (isset($bears_options['h11_menu_first_level_color']['active'])&&$bears_options['h11_menu_first_level_color']['active'])?$bears_options['h11_menu_first_level_color']['active']: '#49c9e6';
	$h11_menu_sub_level_color_active = (isset($bears_options['h11_menu_sub_level_color']['active'])&&$bears_options['h11_menu_sub_level_color']['active'])?$bears_options['h11_menu_sub_level_color']['active']: '#49c9e6';
	$h11_menu_first_level_color_stick_active = (isset($bears_options['h11_menu_first_level_color_stick']['active'])&&$bears_options['h11_menu_first_level_color_stick']['active'])?$bears_options['h11_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h11_mobile_toggle_button_default = (isset($bears_options['h11_mobile_toggle_button']['regular'])&&$bears_options['h11_mobile_toggle_button']['regular'])?$bears_options['h11_mobile_toggle_button']['regular']: '#333333';
	$h11_mobile_toggle_button_hover = (isset($bears_options['h11_mobile_toggle_button']['hover'])&&$bears_options['h11_mobile_toggle_button']['hover'])?$bears_options['h11_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h11_menu_mobile_first_level_color_active = (isset($bears_options['h11_menu_mobile_first_level_color']['active'])&&$bears_options['h11_menu_mobile_first_level_color']['active'])?$bears_options['h11_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h11_menu_mobile_sub_level_color_active = (isset($bears_options['h11_menu_mobile_sub_level_color']['active'])&&$bears_options['h11_menu_mobile_sub_level_color']['active'])?$bears_options['h11_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h12_menu_first_level_color_active = (isset($bears_options['h12_menu_first_level_color']['active'])&&$bears_options['h12_menu_first_level_color']['active'])?$bears_options['h12_menu_first_level_color']['active']: '#49c9e6';
	$h12_menu_sub_level_color_active = (isset($bears_options['h12_menu_sub_level_color']['active'])&&$bears_options['h12_menu_sub_level_color']['active'])?$bears_options['h12_menu_sub_level_color']['active']: '#49c9e6';
	$h12_menu_first_level_color_stick_active = (isset($bears_options['h12_menu_first_level_color_stick']['active'])&&$bears_options['h12_menu_first_level_color_stick']['active'])?$bears_options['h12_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h12_mobile_toggle_button_default = (isset($bears_options['h12_mobile_toggle_button']['regular'])&&$bears_options['h12_mobile_toggle_button']['regular'])?$bears_options['h12_mobile_toggle_button']['regular']: '#333333';
	$h12_mobile_toggle_button_hover = (isset($bears_options['h12_mobile_toggle_button']['hover'])&&$bears_options['h12_mobile_toggle_button']['hover'])?$bears_options['h12_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h12_menu_mobile_first_level_color_active = (isset($bears_options['h12_menu_mobile_first_level_color']['active'])&&$bears_options['h12_menu_mobile_first_level_color']['active'])?$bears_options['h12_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h12_menu_mobile_sub_level_color_active = (isset($bears_options['h12_menu_mobile_sub_level_color']['active'])&&$bears_options['h12_menu_mobile_sub_level_color']['active'])?$bears_options['h12_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
	$h13_menu_first_level_color_active = (isset($bears_options['h13_menu_first_level_color']['active'])&&$bears_options['h13_menu_first_level_color']['active'])?$bears_options['h13_menu_first_level_color']['active']: '#49c9e6';
	$h13_menu_sub_level_color_active = (isset($bears_options['h13_menu_sub_level_color']['active'])&&$bears_options['h13_menu_sub_level_color']['active'])?$bears_options['h13_menu_sub_level_color']['active']: '#49c9e6';
	$h13_menu_first_level_color_stick_active = (isset($bears_options['h13_menu_first_level_color_stick']['active'])&&$bears_options['h13_menu_first_level_color_stick']['active'])?$bears_options['h13_menu_first_level_color_stick']['active']: '#49c9e6';
	
	$h13_mobile_toggle_button_default = (isset($bears_options['h13_mobile_toggle_button']['regular'])&&$bears_options['h13_mobile_toggle_button']['regular'])?$bears_options['h13_mobile_toggle_button']['regular']: '#333333';
	$h13_mobile_toggle_button_hover = (isset($bears_options['h13_mobile_toggle_button']['hover'])&&$bears_options['h13_mobile_toggle_button']['hover'])?$bears_options['h13_mobile_toggle_button']['hover']: '#49c9e6';
	
	$h13_menu_mobile_first_level_color_active = (isset($bears_options['h13_menu_mobile_first_level_color']['active'])&&$bears_options['h13_menu_mobile_first_level_color']['active'])?$bears_options['h13_menu_mobile_first_level_color']['active']: '#49c9e6';
	$h13_menu_mobile_sub_level_color_active = (isset($bears_options['h13_menu_mobile_sub_level_color']['active'])&&$bears_options['h13_menu_mobile_sub_level_color']['active'])?$bears_options['h13_menu_mobile_sub_level_color']['active']: '#49c9e6';
	
    $variables = array(
		"package-style" => $package_style,
		
		"site-width" => $site_width,
		"mobile-width" => $mobile_width,
		
		"main-color" => $main_color,
		"secondary-color" => $secondary_color,
		
		"h1-menu-first-level-color-active" => $h1_menu_first_level_color_active,
		"h1-menu-sub-level-color-active" => $h1_menu_sub_level_color_active,
		"h1-menu-first-level-color-stick-active" => $h1_menu_first_level_color_stick_active,
		
		"h1-mobile-toggle-button-default" => $h1_mobile_toggle_button_default,
		"h1-mobile-toggle-button-hover" => $h1_mobile_toggle_button_hover,
		
		"h1-menu-mobile-first-level-color-active" => $h1_menu_mobile_first_level_color_active,
		"h1-menu-mobile-sub-level-color-active" => $h1_menu_mobile_sub_level_color_active,
		
		"h2-menu-first-level-color-active" => $h2_menu_first_level_color_active,
		"h2-menu-sub-level-color-active" => $h2_menu_sub_level_color_active,
		"h2-menu-first-level-color-stick-active" => $h2_menu_first_level_color_stick_active,

		"h2-mobile-toggle-button-default" => $h2_mobile_toggle_button_default,
		"h2-mobile-toggle-button-hover" => $h2_mobile_toggle_button_hover,

		"h2-menu-mobile-first-level-color-active" => $h2_menu_mobile_first_level_color_active,
		"h2-menu-mobile-sub-level-color-active" => $h2_menu_mobile_sub_level_color_active,

		"h3-menu-first-level-color-active" => $h3_menu_first_level_color_active,
		"h3-menu-sub-level-color-active" => $h3_menu_sub_level_color_active,
		"h3-menu-first-level-color-stick-active" => $h3_menu_first_level_color_stick_active,
		
		"h3-mobile-toggle-button-default" => $h3_mobile_toggle_button_default,
		"h3-mobile-toggle-button-hover" => $h3_mobile_toggle_button_hover,
		
		"h3-menu-mobile-first-level-color-active" => $h3_menu_mobile_first_level_color_active,
		"h3-menu-mobile-sub-level-color-active" => $h3_menu_mobile_sub_level_color_active,
		
		"h4-menu-first-level-color-active" => $h4_menu_first_level_color_active,
		"h4-menu-sub-level-color-active" => $h4_menu_sub_level_color_active,
		"h4-menu-first-level-color-stick-active" => $h4_menu_first_level_color_stick_active,
		
		"h4-mobile-toggle-button-default" => $h4_mobile_toggle_button_default,
		"h4-mobile-toggle-button-hover" => $h4_mobile_toggle_button_hover,
		
		"h4-menu-mobile-first-level-color-active" => $h4_menu_mobile_first_level_color_active,
		"h4-menu-mobile-sub-level-color-active" => $h4_menu_mobile_sub_level_color_active,
		
		"h5-menu-first-level-color-active" => $h5_menu_first_level_color_active,
		"h5-menu-sub-level-color-active" => $h5_menu_sub_level_color_active,
		"h5-menu-first-level-color-stick-active" => $h5_menu_first_level_color_stick_active,
		
		"h5-mobile-toggle-button-default" => $h5_mobile_toggle_button_default,
		"h5-mobile-toggle-button-hover" => $h5_mobile_toggle_button_hover,
		
		"h5-menu-mobile-first-level-color-active" => $h5_menu_mobile_first_level_color_active,
		"h5-menu-mobile-sub-level-color-active" => $h5_menu_mobile_sub_level_color_active,
		
		"h6-menu-first-level-color-active" => $h6_menu_first_level_color_active,
		"h6-menu-sub-level-color-active" => $h6_menu_sub_level_color_active,
		"h6-menu-first-level-color-stick-active" => $h6_menu_first_level_color_stick_active,
		
		"h6-mobile-toggle-button-default" => $h6_mobile_toggle_button_default,
		"h6-mobile-toggle-button-hover" => $h6_mobile_toggle_button_hover,
		
		"h6-menu-mobile-first-level-color-active" => $h6_menu_mobile_first_level_color_active,
		"h6-menu-mobile-sub-level-color-active" => $h6_menu_mobile_sub_level_color_active,
		
		"h7-menu-first-level-color-active" => $h7_menu_first_level_color_active,
		"h7-menu-sub-level-color-active" => $h7_menu_sub_level_color_active,
		"h7-menu-first-level-color-stick-active" => $h7_menu_first_level_color_stick_active,
		
		"h7-mobile-toggle-button-default" => $h7_mobile_toggle_button_default,
		"h7-mobile-toggle-button-hover" => $h7_mobile_toggle_button_hover,
		
		"h7-menu-mobile-first-level-color-active" => $h7_menu_mobile_first_level_color_active,
		"h7-menu-mobile-sub-level-color-active" => $h7_menu_mobile_sub_level_color_active,
		
		"h8-menu-first-level-color-active" => $h8_menu_first_level_color_active,
		"h8-menu-sub-level-color-active" => $h8_menu_sub_level_color_active,
		"h8-menu-first-level-color-stick-active" => $h8_menu_first_level_color_stick_active,
		
		"h8-mobile-toggle-button-default" => $h8_mobile_toggle_button_default,
		"h8-mobile-toggle-button-hover" => $h8_mobile_toggle_button_hover,
		
		"h8-menu-mobile-first-level-color-active" => $h8_menu_mobile_first_level_color_active,
		"h8-menu-mobile-sub-level-color-active" => $h8_menu_mobile_sub_level_color_active,
		
		"h9-menu-first-level-color-active" => $h9_menu_first_level_color_active,
		"h9-menu-sub-level-color-active" => $h9_menu_sub_level_color_active,
		"h9-menu-first-level-color-stick-active" => $h9_menu_first_level_color_stick_active,
		
		"h9-mobile-toggle-button-default" => $h9_mobile_toggle_button_default,
		"h9-mobile-toggle-button-hover" => $h9_mobile_toggle_button_hover,
		
		"h9-menu-mobile-first-level-color-active" => $h9_menu_mobile_first_level_color_active,
		"h9-menu-mobile-sub-level-color-active" => $h9_menu_mobile_sub_level_color_active,
		
		"h10-menu-first-level-color-active" => $h10_menu_first_level_color_active,
		"h10-menu-sub-level-color-active" => $h10_menu_sub_level_color_active,
		"h10-menu-first-level-color-stick-active" => $h10_menu_first_level_color_stick_active,
		
		"h10-mobile-toggle-button-default" => $h10_mobile_toggle_button_default,
		"h10-mobile-toggle-button-hover" => $h10_mobile_toggle_button_hover,
		
		"h10-menu-mobile-first-level-color-active" => $h10_menu_mobile_first_level_color_active,
		"h10-menu-mobile-sub-level-color-active" => $h10_menu_mobile_sub_level_color_active,
		
		"h11-menu-first-level-color-active" => $h11_menu_first_level_color_active,
		"h11-menu-sub-level-color-active" => $h11_menu_sub_level_color_active,
		"h11-menu-first-level-color-stick-active" => $h11_menu_first_level_color_stick_active,
		
		"h11-mobile-toggle-button-default" => $h11_mobile_toggle_button_default,
		"h11-mobile-toggle-button-hover" => $h11_mobile_toggle_button_hover,
		
		"h11-menu-mobile-first-level-color-active" => $h11_menu_mobile_first_level_color_active,
		"h11-menu-mobile-sub-level-color-active" => $h11_menu_mobile_sub_level_color_active,
		
		"h12-menu-first-level-color-active" => $h12_menu_first_level_color_active,
		"h12-menu-sub-level-color-active" => $h12_menu_sub_level_color_active,
		"h12-menu-first-level-color-stick-active" => $h12_menu_first_level_color_stick_active,
		
		"h12-mobile-toggle-button-default" => $h12_mobile_toggle_button_default,
		"h12-mobile-toggle-button-hover" => $h12_mobile_toggle_button_hover,
		
		"h12-menu-mobile-first-level-color-active" => $h12_menu_mobile_first_level_color_active,
		"h12-menu-mobile-sub-level-color-active" => $h12_menu_mobile_sub_level_color_active,
		
		"h13-menu-first-level-color-active" => $h13_menu_first_level_color_active,
		"h13-menu-sub-level-color-active" => $h13_menu_sub_level_color_active,
		"h13-menu-first-level-color-stick-active" => $h13_menu_first_level_color_stick_active,
		
		"h13-mobile-toggle-button-default" => $h13_mobile_toggle_button_default,
		"h13-mobile-toggle-button-hover" => $h13_mobile_toggle_button_hover,
		
		"h13-menu-mobile-first-level-color-active" => $h13_menu_mobile_first_level_color_active,
		"h13-menu-mobile-sub-level-color-active" => $h13_menu_mobile_sub_level_color_active,
		
    );
	
    $less->setVariables($variables);
    $cacheFile = $inputFile.".cache";
    if (file_exists($cacheFile)) {
            $cache = unserialize($wp_filesystem->get_contents($cacheFile));
    } else {
            $cache = $inputFile;
    }
    $newCache = $less->cachedCompile($inputFile);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
            $wp_filesystem->put_contents($cacheFile, serialize($newCache));
            $wp_filesystem->put_contents($outputFile, $newCache['compiled']);
    }
}
function bears_addLessStyle() {
	global $bears_options;
	
	if(isset($bears_options['less_design'])&&$bears_options['less_design']){
		try {
			$inputFile = get_template_directory().'/assets/css/less/style.less';
			$outputFile = get_template_directory().'/assets/css/main_style.css';
			bears_autoCompileLess($inputFile, $outputFile);
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}
	}
	
}
add_action('wp_enqueue_scripts', 'bears_addLessStyle');

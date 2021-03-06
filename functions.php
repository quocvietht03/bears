<?php
/* Register Sidebar */
if (!function_exists('bears_register_sidebar')) {
	function bears_register_sidebar(){
		register_sidebar(array(
			'name' => esc_html__('Main Sidebar', 'bears'),
			'id' => 'main-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="wg-title">',
			'after_title' => '</h4>',
		));
	}
	add_action( 'widgets_init', 'bears_register_sidebar' );
}

/* Register Default Fonts */
if (!function_exists('bears_fonts_url')) {
	function bears_fonts_url() {
		$font_url = '';
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'bears' ) ) {
			$font_url = add_query_arg( 'family', urlencode( 'Poppins:400,400i,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
		}
		return $font_url;
	}
}
/* Enqueue Script */
if (!function_exists('bears_enqueue_scripts')) {
	function bears_enqueue_scripts() {
		global $bears_options;
		
		wp_enqueue_style('bears-fonts', bears_fonts_url(), false );
		wp_enqueue_style('bears-external-fonts', get_template_directory_uri().'/framework/options/fonts.css', false );
		
		/* Bootstrap */
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/vendors/bootstrap/css/bootstrap.min.css', array(), false);
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), '', true);
		
		/* Fontawesome */
		$font_awesome = isset($bears_options['font_awesome']) ? $bears_options['font_awesome'] : true;
		if($font_awesome){
			wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/iconfonts/font-awesome/css/font-awesome.min.css', array(), false);
		}
		
		/* Peicon7stroke */
		if(isset($bears_options['font_pe_icon_7_stroke'])&&$bears_options['font_pe_icon_7_stroke']){
			wp_enqueue_style('pe-icon-helper', get_template_directory_uri().'/assets/iconfonts/pe-icon-7-stroke/css/helper.css', array(), false);
			wp_enqueue_style('pe-icon-7-stroke', get_template_directory_uri().'/assets/iconfonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css', array(), false);
		}
		
		/* Flaticon */
		if(isset($bears_options['flaticon'])&&$bears_options['flaticon']){
			wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/iconfonts/flaticon/font/flaticon.css', array(), false);
		}
		
		/* Smoth Scroll */
		if(isset($bears_options['smooth_scroll'])&&$bears_options['smooth_scroll']){
			wp_enqueue_script( 'SmoothScroll', get_template_directory_uri().'/assets/js/SmoothScroll.js', array('jquery'), '', true);
		}
		
		/* Nice Scroll Bar */
		if(isset($bears_options['nice_scroll_bar'])&&$bears_options['nice_scroll_bar']){
			wp_enqueue_script( 'NiceScrollBar', get_template_directory_uri().'/assets/js/NiceScrollBar.js', array('jquery'), '', true);
		}
		
		/* Site Loading */
		if(isset($bears_options['site_loading'])&&$bears_options['site_loading']){
			wp_enqueue_style( 'bears-loading', get_template_directory_uri().'/assets/vendors/loading/style.css', array(), false );
			wp_enqueue_script( 'bears-loading', get_template_directory_uri().'/assets/vendors/loading/loading.js', array('jquery'), '', true  );
		}
		/* Particles Effect */
		wp_register_script( 'particles', get_template_directory_uri().'/assets/vendors/particles/particles.min.js', array('jquery'), '', true);
		wp_register_script( 'bears-app', get_template_directory_uri().'/assets/vendors/particles/app.min.js', array('jquery'), '', true);
		wp_register_style( 'particles', get_template_directory_uri().'/assets/vendors/particles/particles.css', array(), false);
		
		/* OWl Carousel */
		wp_register_script('owl-carousel', get_template_directory_uri().'/assets/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '', true);
		wp_register_style('owl-carousel', get_template_directory_uri(). '/assets/vendors/owl-carousel/assets/owl.carousel.min.css',array(), false);
		
		/* Slick Carousel */
		wp_register_script('slick', get_template_directory_uri().'/assets/vendors/slick/slick.min.js', array('jquery'), '', true);
		wp_register_style('slick', get_template_directory_uri(). '/assets/vendors/slick/assets/slick.css',array(), false);
		
		/* Isotope */
		wp_register_script('isotope', get_template_directory_uri().'/assets/vendors/isotope.pkgd.min.js', array('jquery'), '', true  );
		
		/* html5lightbox */
		wp_enqueue_script( 'html5lightbox', get_template_directory_uri().'/assets/vendors/html5lightbox/html5lightbox.js', array('jquery'), '', true);
		
		/* map 3 */
		wp_register_script( 'mapv3', get_template_directory_uri().'/assets/vendors/mapv3.js', array('jquery'), '', true);
		
		wp_enqueue_style( 'bears-main_style', get_template_directory_uri().'/assets/css/main_style.css',  array(), false );
		wp_enqueue_style( 'bears-style', get_template_directory_uri().'/style.css',  array(), false );
		wp_enqueue_script( 'bears-main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '', true);
		
		/* Load extra font */
		$custom_style = '';
		if(isset($bears_options['extra_font_1']['font-family']) && $bears_options['extra_font_1']['font-family'] && isset($bears_options['extra_element_1']) && $bears_options['extra_element_1']){
			$style_arr = array();
			if($bears_options['extra_font_1']['font-family']) $style_arr[] = 'font-family: '.$bears_options['extra_font_1']['font-family'].';';
			if($bears_options['extra_font_1']['font-weight']) $style_arr[] = 'font-weight: '.$bears_options['extra_font_1']['font-weight'].';';
			if($bears_options['extra_font_1']['font-style']) $style_arr[] = 'font-style: '.$bears_options['extra_font_1']['font-style'].';';
			if($bears_options['extra_font_1']['font-size']) $style_arr[] = 'font-size: '.$bears_options['extra_font_1']['font-size'].';';
			if($bears_options['extra_font_1']['line-height']) $style_arr[] = 'line-height: '.$bears_options['extra_font_1']['line-height'].';';
			if($bears_options['extra_font_1']['letter-spacing']) $style_arr[] = 'letter-spacing: '.$bears_options['extra_font_1']['letter-spacing'].';';
			if($bears_options['extra_font_1']['color']) $style_arr[] = 'color: '.$bears_options['extra_font_1']['color'].';';
			
			$custom_style .= $bears_options['extra_element_1'].'{'.implode(' ', $style_arr).'}';
		}
		if(isset($bears_options['extra_font_2']['font-family']) && $bears_options['extra_font_2']['font-family'] && isset($bears_options['extra_element_2']) && $bears_options['extra_element_2']){
			$style_arr = array();
			if($bears_options['extra_font_2']['font-family']) $style_arr[] = 'font-family: '.$bears_options['extra_font_2']['font-family'].';';
			if($bears_options['extra_font_2']['font-weight']) $style_arr[] = 'font-weight: '.$bears_options['extra_font_2']['font-weight'].';';
			if($bears_options['extra_font_2']['font-style']) $style_arr[] = 'font-style: '.$bears_options['extra_font_2']['font-style'].';';
			if($bears_options['extra_font_2']['font-size']) $style_arr[] = 'font-size: '.$bears_options['extra_font_2']['font-size'].';';
			if($bears_options['extra_font_2']['line-height']) $style_arr[] = 'line-height: '.$bears_options['extra_font_2']['line-height'].';';
			if($bears_options['extra_font_2']['letter-spacing']) $style_arr[] = 'letter-spacing: '.$bears_options['extra_font_2']['letter-spacing'].';';
			if($bears_options['extra_font_2']['color']) $style_arr[] = 'color: '.$bears_options['extra_font_2']['color'].';';
			
			$custom_style .= $bears_options['extra_element_2'].'{'.implode(' ', $style_arr).'}';
		}
		if(isset($bears_options['extra_font_3']['font-family']) && $bears_options['extra_font_3']['font-family'] && isset($bears_options['extra_element_3']) && $bears_options['extra_element_3']){
			$style_arr = array();
			if($bears_options['extra_font_3']['font-family']) $style_arr[] = 'font-family: '.$bears_options['extra_font_3']['font-family'].';';
			if($bears_options['extra_font_3']['font-weight']) $style_arr[] = 'font-weight: '.$bears_options['extra_font_3']['font-weight'].';';
			if($bears_options['extra_font_3']['font-style']) $style_arr[] = 'font-style: '.$bears_options['extra_font_3']['font-style'].';';
			if($bears_options['extra_font_3']['font-size']) $style_arr[] = 'font-size: '.$bears_options['extra_font_3']['font-size'].';';
			if($bears_options['extra_font_3']['line-height']) $style_arr[] = 'line-height: '.$bears_options['extra_font_3']['line-height'].';';
			if($bears_options['extra_font_3']['letter-spacing']) $style_arr[] = 'letter-spacing: '.$bears_options['extra_font_3']['letter-spacing'].';';
			if($bears_options['extra_font_3']['color']) $style_arr[] = 'color: '.$bears_options['extra_font_3']['color'].';';
			
			$custom_style .= $bears_options['extra_element_3'].'{'.implode(' ', $style_arr).'}';
		}
		
		/* Load style page option */
		$page_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'page_options'):array();

		if(isset($page_options['page_titlebar_space'])&&$page_options['page_titlebar_space']){
			$custom_style .= 'body .bt-titlebar{padding-bottom: 0;}';
		}

		if(isset($page_options['page_titlebar_background']['url'])&&$page_options['page_titlebar_background']['url']){
			$custom_style .= 'body .bt-titlebar .bt-titlebar-inner{background-image: url('.$page_options['page_titlebar_background']['url'].');}';
		}
		
		if(isset($page_options['page_footer_space'])&&$page_options['page_footer_space']){
			$custom_style .= '#bt_footer{margin-top: 0;}';
		}
		
		/* Load custom style */
		if (isset($bears_options['custom_css_code']) && $bears_options['custom_css_code']) {
			$custom_style .= $bears_options['custom_css_code'];
		}
		
		if($custom_style){
			wp_add_inline_style( 'bears-style', $custom_style );
		}
		
		/* Load custom script */
		$custom_script = '';
		
		if (isset($bears_options['custom_js_code']) && $bears_options['custom_js_code']) {
			$custom_script .= $bears_options['custom_js_code'];
		}
		if ($custom_script) {
			wp_add_inline_script( 'bears-main', $custom_script );
		}
		
		// Load options to script
		$mobile_width = (isset($bears_options['mobile_width'])&&$bears_options['mobile_width'])?$bears_options['mobile_width']: 991;
		$hvertical_width = (isset($bears_options['hvertical_width'])&&$bears_options['hvertical_width'])?$bears_options['hvertical_width']: 320;
		$hvertical_full_height = (isset($bears_options['hvertical_full_height'])&&$bears_options['hvertical_full_height'])?$bears_options['hvertical_full_height']: '';
		$hvertical_menu_height = (isset($bears_options['hvertical_menu_height'])&&$bears_options['hvertical_menu_height'])?$bears_options['hvertical_menu_height']: 570;
		$nice_scroll_bar = (isset($bears_options['nice_scroll_bar'])&&$bears_options['nice_scroll_bar'])?$bears_options['nice_scroll_bar']: '';
		$nice_scroll_bar_element = (isset($bears_options['nice_scroll_bar_element'])&&$bears_options['nice_scroll_bar_element'])?$bears_options['nice_scroll_bar_element']: '';
		
		$js_options = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'enable_mobile' => $mobile_width,
			'hvertical_width' => $hvertical_width,
			'hvertical_full_height' => $hvertical_full_height,
			'hvertical_menu_height' => $hvertical_menu_height,
			'nice_scroll_bar' => $nice_scroll_bar,
			'nice_scroll_bar_element' => $nice_scroll_bar_element
		);
		wp_localize_script( 'bears-main', 'option_ob', $js_options );
		wp_enqueue_script( 'bears-main' );
		
	}
	add_action( 'wp_enqueue_scripts', 'bears_enqueue_scripts' );
}

/* Add Stylesheet And Script Backend */
if (!function_exists('bears_enqueue_admin_scripts')) {
	function bears_enqueue_admin_scripts(){
		wp_enqueue_style( 'bears-style_admin', get_template_directory_uri().'/assets/css/style_admin.css', array(), false );
	}
	add_action( 'admin_enqueue_scripts', 'bears_enqueue_admin_scripts');
}

/* Add Support Upload Image Type SVG */
function excitor_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'excitor_mime_types');

/* Visual Composer Post Grid Compatibility Issue With 3rd party Plugin */
add_filter('vc_grid_get_grid_data_access','__return_true');

/* Template functions */
require_once get_template_directory().'/framework/template-functions.php';

/* Less compile functions */
require_once get_template_directory().'/framework/inc/less-compile.php';

/* Post Functions */
require_once get_template_directory().'/framework/templates/post-functions.php';

/* Function framework */
require_once get_template_directory().'/framework/includes.php';

/* Widgets */
require_once get_template_directory().'/framework/widgets/abstract-widget.php';
require_once get_template_directory().'/framework/widgets/widgets.php';

/* Woocommerce functions */
if (class_exists('Woocommerce')) {
    require_once get_template_directory() . '/woocommerce/wc-template-functions.php';
    require_once get_template_directory() . '/woocommerce/wc-template-hooks.php';
}

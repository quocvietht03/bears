<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'General', 'bears' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'less_design',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Less Design', 'bears' ),
			'subtitle' => esc_html__( 'Enable less design to generate css over time...', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => __('Site Layout', 'bears'),
			'subtitle' => __('Control the site layout.', 'bears'),
			'options' => array(
				'wide' => __('Wide', 'bears'), 
				'boxed' => __('Boxed', 'bears'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Site Width', 'bears' ),
			'subtitle'      => esc_html__( 'Control the overall site width.', 'bears' ),
			'default'       => 1200,
			'min'           => 1200,
			'step'          => 1,
			'max'           => 1600,
			'display_value' => 'text',
			'required' 		=> array('site_layout' , '=', 'boxed')
		),
		array(
			'id'       => 'boxed_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Boxed Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background color of the boxed.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'boxed_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'         => false,
			'left'          => false,
			'title'    => esc_html__( 'Boxed Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the space top and bottom of boxed.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'body_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Body Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the body.', 'bears' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Mobile Width', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the width to enable mobile.', 'bears' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'smooth_scroll',
			'type'     => 'switch',
			'title'    => esc_html__( 'Smoth Scroll', 'bears' ),
			'subtitle' => esc_html__( 'Use smoth scroll.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'nice_scroll_bar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Nice Scroll Bar', 'bears' ),
			'subtitle' => esc_html__( 'Use nice scroll bar.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'=>'nice_scroll_bar_element',
			'type' => 'textarea',
			'title' => __('Nice Scroll Bar Elements', 'bears'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'bears'),
			'default' => 'html',
			'required' 		=> array('nice_scroll_bar' , '=', '1')
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Back To Top', 'bears' ),
			'subtitle' => esc_html__( 'Control button back to top.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => esc_html__( 'Back To Top Style', 'bears' ),
			'subtitle' => esc_html__( 'Select style button back to top.', 'bears' ),
			'options'  => array(
				'square' => esc_html__( 'Square', 'bears' ),
				'rounded' => esc_html__( 'Rounded', 'bears' ),
				'circle' => esc_html__( 'Circle', 'bears' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => esc_html__( 'Site Loading', 'bears' ),
			'subtitle' => esc_html__( 'Control animation before site load complete.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => esc_html__( 'Spinner Style', 'bears' ),
			'subtitle' => esc_html__( 'Select style spinner.', 'bears' ),
			'options'  => array(
				'spinner0' => esc_html__( 'Default', 'bears' ),
				'spinner1' => esc_html__( 'Style 1', 'bears' ),
				'spinner2' => esc_html__( 'Style 2', 'bears' ),
				'spinner3' => esc_html__( 'Style 3', 'bears' ),
				'spinner4' => esc_html__( 'Style 4', 'bears' ),
				'spinner5' => esc_html__( 'Style 5', 'bears' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Site Loading Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of site loading.', 'bears' ),
			'default'  => array(
				'background-color' => '#49c9e6',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('#site_loading')
		),
		array(
			'id'       => 'package_style',
			'type'     => 'select',
			'title'    => __('Package Style', 'bears'),
			'subtitle' => __('Select the package style.', 'bears'),
			'options' => array( 
				'company' => __('Company', 'bears'),
				'lawfirm' => __('Lawfirm', 'bears'),
				'construction' => __('Construction', 'bears'),
				'dentist' => __('Dentist', 'bears'),
				'legal' => __('Legal', 'bears'),
				'marketing' => __('Marketing', 'bears'),
				'consultancy' => __('Consultancy', 'bears'),
				'creative' => __('Creative', 'bears'),
				'digital' => __('Digital', 'bears'),
				'advisor' => __('Advisor', 'bears'),
				'insurance' => __('Insurance', 'bears'),
				'serviceit' => __('Service IT', 'bears'),
				'arabic' => __('Arabic', 'bears'),
			 ), 
			'default' => 'company'
		),
		
	)
) );

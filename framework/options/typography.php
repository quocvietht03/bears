<?php
// Typography
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Typography', 'bears' ),
	'id'               => 'bt_typography',
	'icon'             => 'el el-fontsize',
	'fields'           => array(
		array(
			'id'       => 'body_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Body Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography body.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#444444',
				'font-size'   => '15px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '26px',
				'letter-spacing' => '0'
			),
			'output'    => array('body')
		),
		array(
			'id'       => 'h1_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H1 Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography H1.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '36px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '42px',
				'letter-spacing' => '0'
			),
			'output'    => array('h1, .bt-font-size-1')
		),
		array(
			'id'       => 'h1_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H1 Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H1.', 'bears' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h1')
		),
		array(
			'id'       => 'h2_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H2 Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography H2.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '30px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '36px',
				'letter-spacing' => '0'
			),
			'output'    => array('h2, .bt-font-size-2')
		),
		array(
			'id'       => 'h2_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H2 Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H2.', 'bears' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h2')
		),
		array(
			'id'       => 'h3_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H3 Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography H3.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '24px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'    => array('h3, .bt-font-size-3')
		),
		array(
			'id'       => 'h3_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H3 Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H3.', 'bears' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h3')
		),
		array(
			'id'       => 'h4_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H4 Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography H4.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '18px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('h4, .bt-font-size-4')
		),
		array(
			'id'       => 'h4_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H4 Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H4.', 'bears' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h4')
		),
		array(
			'id'       => 'h5_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H5 Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography H5.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '16px',
				'letter-spacing' => '0'
			),
			'output'    => array('h5, .bt-font-size-5')
		),
		array(
			'id'       => 'h5_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H5 Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H5.', 'bears' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h5')
		),
		array(
			'id'       => 'h6_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'H6 Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography H6.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '12px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '14px',
				'letter-spacing' => '0'
			),
			'output'    => array('h6, .bt-font-size-6')
		),
		array(
			'id'       => 'h6_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'H6 Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the H1.', 'bears' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-bottom' => '15px'
			),
			'output'    => array('h6')
		),
		
	)
) );
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Extra Font', 'bears' ),
	'id'               => 'bt_extrafont',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'extra_font_1',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 1', 'bears' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
		),
		array(
			'id'=>'extra_element_1',
			'type' => 'textarea',
			'title' => esc_html__('Elements', 'bears'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'bears'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_2',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 2', 'bears' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
		),
		array(
			'id'=>'extra_element_2',
			'type' => 'textarea',
			'title' => esc_html__('Elements', 'bears'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'bears'),
			'default' => ''
		),
		array(
			'id'       => 'extra_font_3',
			'type'     => 'typography',
			'title'    => esc_html__( 'Extra Font 3', 'bears' ),
			'subtitle' => esc_html__( 'Select a font to use throughout Typography settings.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
		),
		array(
			'id'=>'extra_element_3',
			'type' => 'textarea',
			'title' => esc_html__('Elements', 'bears'), 
			'subtitle' => esc_html__('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'bears'),
			'default' => ''
		),
	)
) );

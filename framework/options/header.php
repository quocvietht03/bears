<?php
// Header
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header', 'bears' ),
	'id'               => 'bt_header',
	'icon'             => 'el el-credit-card',
	'fields'           => array(
		array(
			'id'       => 'header_layout',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Header Layout', 'bears' ),
			'subtitle' => esc_html__( 'Select a header layout default. Foreach pages, you can change the layout by page option', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 1',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				),
				'2' => array(
					'alt' => 'Header layout 2',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v2.jpg'
				),
				'3' => array(
					'alt' => 'Header layout 3',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v3.jpg'
				),
				'4' => array(
					'alt' => 'Header layout 4',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v4.jpg'
				),
				'5' => array(
					'alt' => 'Header layout 5',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v5.jpg'
				),
				'6' => array(
					'alt' => 'Header layout 6',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v6.jpg'
				),
				'7' => array(
					'alt' => 'Header layout 7',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v7.jpg'
				),
				'8' => array(
					'alt' => 'Header layout 8',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v8.jpg'
				),
				'9' => array(
					'alt' => 'Header layout 9',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v9.jpg'
				),
				'10' => array(
					'alt' => 'Header layout 10',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v10.jpg'
				),
				'11' => array(
					'alt' => 'Header layout 11',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v11.jpg'
				),
				'12' => array(
					'alt' => 'Header layout 12',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v12.jpg'
				),
				'13' => array(
					'alt' => 'Header layout 13',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v13.jpg'
				)
			),
			'default'  => '1'
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 01', 'bears' ),
	'id'               => 'bt_header_style1',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_1',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 01', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 1',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v1.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h1_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h1_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h1_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_header_top' , '=', '1')
		),
		array(
			'id'       => 'h1_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h1_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top, .bt-header-v1 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h1_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h1_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h1_header_top' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h1_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h1_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h1_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h1_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h1_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h1_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h1_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h1_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '15px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v1 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h1_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v1 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v1 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h1_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v1 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h1_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h1_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h1_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h1_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h1_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-menu-content-right')
		),
		array(
			'id'       => 'h1_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h1_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h1_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h1_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h1_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h1_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-stick'),
		),
		array(
			'id'       => 'h1_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-stick'),
		),
		array(
			'id'       => 'h1_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h1_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h1_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h1_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h1_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '15px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h1_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v1 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v1 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h1_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h1_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h1_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v1 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h1_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h1_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h1_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h1_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v1 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h1_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h1_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '15px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h1_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h1_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h1_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v1 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 02', 'bears' ),
	'id'               => 'bt_header_style2',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_2',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 02', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 2',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v2.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h2_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h2_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h2_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_header_top' , '=', '1')
		),
		array(
			'id'       => 'h2_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-top, .bt-header-v2 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h2_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-top, .bt-header-v2 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h2_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h2_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h2_header_top' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h2_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h2_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h2_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v2.png' 
			),
		),
		array(
			'id'            => 'h2_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h2_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h2_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h2_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v2 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h2_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v2 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h2_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v2 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v2 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h2_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v2 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h2_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h2_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h2_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h2_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h2_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-menu-content-right')
		),
		array(
			'id'       => 'h2_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h2_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h2_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h2_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h2_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h2_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-stick'),
		),
		array(
			'id'       => 'h2_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-stick'),
		),
		array(
			'id'       => 'h2_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v2.png' 
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h2_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h2_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h2_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h2_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h2_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v2 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v2 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h2_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h2_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h2_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v2 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h2_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h2_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo-v2.png' 
			)
		),
		array(
			'id'            => 'h2_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h2_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v2 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h2_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h2_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h2_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h2_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h2_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v2 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 03', 'bears' ),
	'id'               => 'bt_header_style3',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_3',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 03', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 3',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v3.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h3_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h3_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h3_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h3_header_top' , '=', '1')
		),
		array(
			'id'            => 'h3_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h3_header_top' , '=', '1')
		),
		array(
			'id'       => 'h3_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h3_header_top' , '=', '1')
		),
		array(
			'id'       => 'h3_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'   	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-top, .bt-header-v3 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h3_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#ffffff',
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-top, .bt-header-v3 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h3_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#555555',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h3_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#555555',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h3_header_top' , '=', '1'),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h3_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h3_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v3 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h3_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h3_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'left'
		),
		array(
			'id'       => 'h3_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '0px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h3_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v3 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h3_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a, 
								.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v3 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v3 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h3_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v3 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		
		array(
			'id'       => 'h3_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h3_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h3_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h3_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-menu-content-right')
		),
		array(
			'id'       => 'h3_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h3_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color button toggle menu canvas.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h3_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h3_menu_canvas_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h3_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h3_menu_after_content_auto',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu After Content Auto', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to menu content right and menu canvas align after menu.', 'bears' ),
			'default'  => false,
			'required' 		=> array('header_layout' , '=', '2')
		),
		array(
			'id'    => 'h3_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h3_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-stick'),
		),
		array(
			'id'       => 'h3_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-stick'),
		),
		array(
			'id'       => 'h3_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h3_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h3_header_stick' , '=', '1'),
		),
		
		array(
			'id'       => 'h3_menu_align_stick',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu stick.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right',
			'required' 		=> array('h3_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h3_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h3_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h3_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v3 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v3 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h3_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h3_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h3_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v3 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h3_mobile_header_bottom_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the header mobile.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-bottom' => '10px'
			),
			'output'    => array('.bt-header-v3 .bt-header-mobile .bt-bottom')
		),
		array(
			'id'       => 'h3_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h3_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h3_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h3_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h3_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h3_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h3_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v3 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 04', 'bears' ),
	'id'               => 'bt_header_style4',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_4',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 04', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 4',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v4.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h4_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h4_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h4_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h4_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h4_header_top' , '=', '1')
		),
		array(
			'id'            => 'h4_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h4_header_top' , '=', '1')
		),
		array(
			'id'       => 'h4_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h4_header_top' , '=', '1')
		),
		array(
			'id'       => 'h4_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'   	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h4_header_top' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-header-desktop .bt-top, .bt-header-v4 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h4_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#ffffff',
			),
			'required' 		=> array('h4_header_top' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-header-desktop .bt-top, .bt-header-v4 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h4_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#555555',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h4_header_top' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h4_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#555555',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h4_header_top' , '=', '1'),
			'output'   => array('.bt-header-v4 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h4_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h4_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v4 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h4_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v4 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h4_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h4_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'left'
		),
		array(
			'id'       => 'h4_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '0px'
			),
			'output'    => array('.bt-header-v1 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h4_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h4_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v4 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h4_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v4 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a, 
								.bt-header-v4 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v4 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v4 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v4 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h4_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v4 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		
		array(
			'id'       => 'h4_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h4_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h4_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h4_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h4_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-menu-content-right')
		),
		array(
			'id'       => 'h4_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h4_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color button toggle menu canvas.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h4_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h4_menu_canvas_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h4_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h4_menu_after_content_auto',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu After Content Auto', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to menu content right and menu canvas align after menu.', 'bears' ),
			'default'  => false,
			'required' 		=> array('header_layout' , '=', '2')
		),
		array(
			'id'    => 'h4_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h4_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h4_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h4_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-header-stick'),
		),
		array(
			'id'       => 'h4_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h4_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-header-stick'),
		),
		array(
			'id'       => 'h4_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h4_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h4_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h4_header_stick' , '=', '1'),
		),
		
		array(
			'id'       => 'h4_menu_align_stick',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu stick.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right',
			'required' 		=> array('h4_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h4_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h4_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v4 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h4_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h4_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v4 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h4_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h4_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v4 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v4 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h4_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h4_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h4_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v4 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h4_mobile_header_bottom_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the header mobile.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-bottom' => '10px'
			),
			'output'    => array('.bt-header-v4 .bt-header-mobile .bt-bottom')
		),
		array(
			'id'       => 'h4_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h4_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h4_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h4_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h4_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h4_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile > ul.menu > li > a')
		),
		array(
			'id'       => 'h4_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h4_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v4 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 05', 'bears' ),
	'id'               => 'bt_header_style5',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_5',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 05', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 5',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v5.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h5_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h5_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h5_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h5_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h5_header_top' , '=', '1')
		),
		array(
			'id'       => 'h5_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h5_header_top' , '=', '1')
		),
		array(
			'id'       => 'h5_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h5_header_top' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-header-desktop .bt-top, .bt-header-v5 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h5_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h5_header_top' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-header-desktop .bt-top, .bt-header-v5 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h5_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h5_header_top' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h5_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h5_header_top' , '=', '1'),
			'output'   => array('.bt-header-v5 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h5_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h5_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v5 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h5_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v5 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h5_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h5_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h5_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h5_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h5_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v5 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h5_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v5 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h5_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v5 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v5 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h5_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v5 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v5 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v5 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v5 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v5 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v5 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h5_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v5 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h5_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h5_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h5_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h5_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h5_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-menu-content-right')
		),
		array(
			'id'       => 'h5_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h5_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h5_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h5_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h5_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h5_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h5_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h5_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h5_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-header-stick'),
		),
		array(
			'id'       => 'h5_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h5_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-header-stick'),
		),
		array(
			'id'       => 'h5_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h5_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h5_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h5_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h5_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h5_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v5 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h5_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h5_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v5 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h5_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h5_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v5 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v5 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h5_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h5_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h5_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v5 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h5_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h5_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h5_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h5_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v5 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h5_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v5 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h5_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v5 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v5 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h5_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v5 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h5_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v5 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v5 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h5_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v5 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 06', 'bears' ),
	'id'               => 'bt_header_style6',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_6',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 06', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 6',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v6.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h6_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h6_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h6_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h6_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h6_header_top' , '=', '1')
		),
		array(
			'id'       => 'h6_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h6_header_top' , '=', '1')
		),
		array(
			'id'       => 'h6_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h6_header_top' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-header-desktop .bt-top, .bt-header-v6 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h6_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h6_header_top' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-header-desktop .bt-top, .bt-header-v6 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h6_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h6_header_top' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h6_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h6_header_top' , '=', '1'),
			'output'   => array('.bt-header-v6 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h6_header_bottom_sidebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Sidebar', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom sidebar.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h6_header_bottom_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Bottom Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header bottom left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h6_header_bottom_sidebar' , '=', '1')
		),
		array(
			'id'       => 'h6_header_bottom_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Bottom Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header bottom right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h6_header_bottom_sidebar' , '=', '1')
		),
		array(
			'id'       => 'h6_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h6_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v6 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h6_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v6 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h6_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h6_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h6_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h6_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'right' => 'Right'
			),
			'default'  => 'left'
		),
		array(
			'id'       => 'h6_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v6 .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop > ul.menu > li > a')
		),
		array(
			'id'       => 'h6_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v6 .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop ul.menu > li > a, .bt-header-v6 .bt-header-desktop .bt-menu-bar-toggle .bt-toggle-btn, .bt-header-v6 .bt-header-desktop .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h6_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v6 .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v6 .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v6 .bt-header-stick .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v6 .bt-header-stick .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v6 .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v6 .bt-header-stick .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h6_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v6 .bt-header-desktop .bt-bottom .bt-menu-bar-toggle .bt-menu-desktop ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h6_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h6_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h6_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h6_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h6_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h6_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h6_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h6_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h6_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-header-stick'),
		),
		array(
			'id'       => 'h6_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h6_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-header-stick'),
		),
		array(
			'id'       => 'h6_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h6_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h6_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h6_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h6_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h6_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v6 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h6_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h6_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v6 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h6_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h6_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v6 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v6 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h6_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h6_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h6_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v6 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h6_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h6_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h6_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h6_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v6 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h6_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v6 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h6_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v6 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v6 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h6_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v6 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h6_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v6 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v6 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h6_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v6 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 07', 'bears' ),
	'id'               => 'bt_header_style7',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_7',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 07', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 7',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v7.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h7_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h7_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h7_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h7_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v7 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h7_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v7 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h7_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h7_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h7_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h7_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h7_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v7 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h7_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v7 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h7_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v7 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v7 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h7_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v7 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v7 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v7 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v7 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v7 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v7 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h7_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v7 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h7_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h7_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h7_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v7 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h7_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h7_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v7 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h7_menu_content_left',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Left', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content left of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h7_menu_content_left_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Left Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content left of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h7_menu_content_left' , '=', '1')
		),
		array(
			'id'       => 'h7_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h7_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h7_menu_content_right' , '=', '1')
		),
		array(
			'id'    => 'h7_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h7_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h7_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h7_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v7 .bt-header-stick'),
		),
		array(
			'id'       => 'h7_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h7_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v7 .bt-header-stick'),
		),
		array(
			'id'       => 'h7_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h7_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h7_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h7_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h7_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h7_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v7 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h7_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h7_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v7 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h7_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h7_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v7 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v7 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h7_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h7_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v7 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h7_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h7_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h7_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h7_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v7 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h7_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v7 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h7_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v7 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v7 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h7_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v7 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h7_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v7 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v7 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h7_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v7 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 08', 'bears' ),
	'id'               => 'bt_header_style8',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_8',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 08', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 8',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v8.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h8_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h8_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h8_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h8_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v8 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h8_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v8 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h8_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h8_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h8_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h8_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v8 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h8_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v8 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h8_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v8 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v8 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h8_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v8 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v8 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v8 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v8 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v8 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v8 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h8_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v8 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h8_menu_content_left',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Left', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content left of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h8_menu_content_left_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Left Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content left of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h8_menu_content_left' , '=', '1')
		),
		array(
			'id'       => 'h8_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h8_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h8_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h8_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h8_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h8_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v8 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h8_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h8_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v8 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h8_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h8_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h8_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h8_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v8 .bt-header-stick'),
		),
		array(
			'id'       => 'h8_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h8_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v8 .bt-header-stick'),
		),
		array(
			'id'       => 'h8_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h8_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h8_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h8_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h8_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h8_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v8 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h8_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h8_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v8 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h8_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h8_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v8 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v8 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h8_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h8_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v8 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h8_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h8_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h8_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h8_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v8 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h8_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v8 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h8_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v8 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v8 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h8_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v8 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h8_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v8 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v8 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h8_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v8 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 09', 'bears' ),
	'id'               => 'bt_header_style9',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_9',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 09', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 9',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v9.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h9_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h9_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h9_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h9_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v9 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h9_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v9 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h9_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h9_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h9_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h9_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h9_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v9 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h9_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v9 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h9_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v9 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v9 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h9_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v9 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v9 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v9 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v9 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v9 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v9 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h9_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v9 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h9_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h9_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h9_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h9_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h9_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v9 .bt-menu-content-right')
		),
		array(
			'id'       => 'h9_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h9_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h9_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v9 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h9_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h9_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v9 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h9_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h9_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h9_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h9_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v9 .bt-header-stick'),
		),
		array(
			'id'       => 'h9_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h9_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v9 .bt-header-stick'),
		),
		array(
			'id'       => 'h9_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h9_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h9_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h9_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h9_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h9_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v9 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h9_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h9_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v9 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h9_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h9_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v9 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v9 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h9_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h9_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v9 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h9_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h9_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h9_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h9_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v9 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h9_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v9 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h9_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v9 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v9 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h9_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v9 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h9_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v9 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v9 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h9_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v9 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 10', 'bears' ),
	'id'               => 'bt_header_style10',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_10',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 10', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 1',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v10.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h10_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h10_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h10_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h10_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h10_header_top' , '=', '1')
		),
		array(
			'id'       => 'h10_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h10_header_top' , '=', '1')
		),
		array(
			'id'       => 'h10_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h10_header_top' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-header-desktop .bt-top, .bt-header-v10 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h10_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h10_header_top' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-header-desktop .bt-top, .bt-header-v10 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h10_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h10_header_top' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h10_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h10_header_top' , '=', '1'),
			'output'   => array('.bt-header-v10 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h10_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h10_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v10 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h10_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v10 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h10_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h10_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h10_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h10_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h10_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v10 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h10_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v10 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h10_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v10 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v10 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h10_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v10 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v10 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v10 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v10 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v10 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v10 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h10_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v10 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h10_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h10_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h10_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h10_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h10_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-menu-content-right')
		),
		array(
			'id'       => 'h10_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h10_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h10_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h10_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h10_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h10_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h10_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h10_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h10_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-header-stick'),
		),
		array(
			'id'       => 'h10_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h10_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-header-stick'),
		),
		array(
			'id'       => 'h10_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h10_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h10_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h10_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h10_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h10_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v10 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h10_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h10_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v10 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h10_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h10_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v10 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v10 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h10_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h10_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h10_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v10 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h10_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h10_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h10_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h10_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v10 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h10_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v10 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h10_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v10 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v10 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h10_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v10 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h10_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v10 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v10 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h10_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v10 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 11', 'bears' ),
	'id'               => 'bt_header_style11',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_11',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 11', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 11',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v11.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h11_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h11_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h11_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h11_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h11_header_top' , '=', '1')
		),
		array(
			'id'       => 'h11_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h11_header_top' , '=', '1')
		),
		array(
			'id'       => 'h11_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h11_header_top' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-header-desktop .bt-top, .bt-header-v11 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h11_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h11_header_top' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-header-desktop .bt-top, .bt-header-v11 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h11_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h11_header_top' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h11_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h11_header_top' , '=', '1'),
			'output'   => array('.bt-header-v11 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h11_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h11_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v11 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h11_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v11 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h11_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h11_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h11_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h11_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h11_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v11 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h11_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v11 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h11_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v11 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v11 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h11_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v11 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v11 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v11 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v11 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v11 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v11 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h11_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v11 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h11_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h11_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h11_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h11_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h11_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-menu-content-right')
		),
		array(
			'id'       => 'h11_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h11_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h11_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h11_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h11_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h11_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h11_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h11_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h11_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-header-stick'),
		),
		array(
			'id'       => 'h11_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h11_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-header-stick'),
		),
		array(
			'id'       => 'h11_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h11_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h11_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h11_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h11_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h11_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v11 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h11_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h11_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v11 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h11_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h11_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v11 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v11 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h11_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h11_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h11_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v11 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h11_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h11_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h11_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h11_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v11 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h11_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v11 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h11_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v11 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v11 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h11_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v11 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h11_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v11 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v11 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h11_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v11 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 12', 'bears' ),
	'id'               => 'bt_header_style12',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_12',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 12', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 12',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v12.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h12_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h12_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h12_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h12_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h12_header_top' , '=', '1')
		),
		array(
			'id'       => 'h12_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h12_header_top' , '=', '1')
		),
		array(
			'id'       => 'h12_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h12_header_top' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-header-desktop .bt-top, .bt-header-v12 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h12_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h12_header_top' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-header-desktop .bt-top, .bt-header-v12 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h12_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h12_header_top' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h12_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h12_header_top' , '=', '1'),
			'output'   => array('.bt-header-v12 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h12_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h12_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v12 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h12_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v12 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h12_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h12_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h12_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h12_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h12_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v12 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h12_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v12 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h12_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v12 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v12 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h12_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v12 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v12 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v12 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v12 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v12 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v12 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h12_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v12 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h12_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h12_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h12_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h12_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h12_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-menu-content-right')
		),
		array(
			'id'       => 'h12_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h12_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h12_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h12_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h12_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h12_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h12_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h12_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h12_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-header-stick'),
		),
		array(
			'id'       => 'h12_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h12_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-header-stick'),
		),
		array(
			'id'       => 'h12_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h12_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h12_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h12_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h12_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h12_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v12 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h12_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h12_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v12 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h12_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h12_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v12 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v12 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h12_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h12_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h12_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v12 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h12_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h12_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h12_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h12_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v12 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h12_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v12 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h12_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v12 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v12 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h12_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v12 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h12_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v12 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v12 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h12_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v12 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Header Style 13', 'bears' ),
	'id'               => 'bt_header_style13',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'header_layout_13',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for header style 13', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Header layout 13',
					'img' => get_template_directory_uri() . '/assets/images/headers/header-v13.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'h13_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'    => 'h13_header_desktop_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Desktop Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header desktop.', 'bears' )
		),
		array(
			'id'       => 'h13_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h13_header_top_left',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Left', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top left.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h13_header_top' , '=', '1')
		),
		array(
			'id'       => 'h13_header_top_right',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Header Top Content Right', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the header top right.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h13_header_top' , '=', '1')
		),
		array(
			'id'       => 'h13_header_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header top.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '10px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '10px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h13_header_top' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-header-desktop .bt-top, .bt-header-v13 .bt-header-mobile .bt-top')
		),
		array(
			'id'       => 'h13_header_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header top.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#eab245',
			),
			'required' 		=> array('h13_header_top' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-header-desktop .bt-top, .bt-header-v13 .bt-header-mobile .bt-top'),
		),
		array(
			'id'       => 'h13_header_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Header Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography header top.', 'bears' ),
			'font-style'   => false,
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'default'  => array(
				'color'       => '#eaeaea',
				'font-size'   => '13px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h13_header_top' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-header-desktop .bt-top')
		),
		array(
			'id'       => 'h13_header_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Header Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of header top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#fafafa',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h13_header_top' , '=', '1'),
			'output'   => array('.bt-header-v13 .bt-header-desktop .bt-top a')
		),
		array(
			'id'       => 'h13_header_bottom_absolute',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Bottom Absolute', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header bottom absolute.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h13_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v13 .bt-header-desktop .bt-bottom'),
		),
		array(
			'id'       => 'h13_header_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'output'    => array('.bt-header-v13 .bt-header-desktop .bt-bottom')
		),
		array(
			'id'       => 'h13_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
		),
		array(
			'id'            => 'h13_logo_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h13_menu_assign',
			'type'     => 'select',
			'title'    => esc_html__( 'Menu Assign', 'bears' ),
			'subtitle' => esc_html__( 'Select menu assing of header.', 'bears' ),
			'options'  => $menu_slug_opt,
			'default'  => 'auto'
		),
		array(
			'id'       => 'h13_menu_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Menu Align', 'bears' ),
			'subtitle' => esc_html__( 'Control align of menu.', 'bears' ),
			'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
			),
			'default'  => 'right'
		),
		array(
			'id'       => 'h13_menu_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'output'    => array('.bt-header-v13 .bt-header-desktop .bt-menu-desktop')
		),
		array(
			'id'       => 'h13_menu_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '60px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v13 .bt-header-desktop .bt-bottom ul.menu > li > a')
		),
		array(
			'id'       => 'h13_menu_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v13 .bt-header-desktop .bt-bottom ul.menu > li > a, .bt-header-v13 .bt-header-desktop .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'       => 'h13_menu_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v13 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a, .bt-header-v13 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v13 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu > li > a, .bt-header-v13 .bt-header-stick .bt-menu-desktop ul.menu li ul.sub-menu li ul.sub-menu > li > a,
								.bt-header-v13 .bt-header-desktop .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col a,
								.bt-header-v13 .bt-header-stick .bt-menu-desktop > ul.menu > li.menu-item-has-mega-menu .mega-menu .mega-menu-row .mega-menu-col > a')
		),
		array(
			'id'       => 'h13_menu_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v13 .bt-header-desktop .bt-bottom ul.menu li ul.sub-menu > li > a')
		),
		array(
			'id'       => 'h13_menu_content_right',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Content Right', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable content right of menu.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'h13_menu_content_right_element',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Menu Content Right Element', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in content right of menu.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('h13_menu_content_right' , '=', '1')
		),
		array(
			'id'       => 'h13_menu_content_right_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Content Right Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the content right of menu.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h13_menu_content_right' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-menu-content-right')
		),
		array(
			'id'       => 'h13_menu_canvas',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Menu Canvas', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable menu canvas.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h13_menu_canvas_button_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Canvas Button color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('h13_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-menu-canvas-toggle')
		),
		array(
			'id'       => 'h13_menu_canvas_button_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'    => false,
			'bottom'     => false,
			'title'    => esc_html__( 'Menu Canvas Button Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu canvas.', 'bears' ),
			'default'  => array(
				'margin-left'    => '15px',
				'margin-right' => '0'
			),
			'required' 		=> array('h13_menu_canvas' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-menu-canvas-toggle')
		),
		array(
			'id'    => 'h13_header_stick_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Stick Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header stick.', 'bears' )
		),
		array(
			'id'       => 'h13_header_stick',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Sticky', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable sticky header.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h13_header_stick_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Stick Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header stick.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('h13_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-header-stick'),
		),
		array(
			'id'       => 'h13_header_stick_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Header Stick Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the padding the header stick.', 'bears' ),
			'default'  => array(
				'padding-top'    	=> '0px',
				'padding-right'    	=> '0px',
				'padding-bottom' 	=> '0px',
				'padding-left' 		=> '0px'
			),
			'required' 		=> array('h13_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-header-stick'),
		),
		array(
			'id'       => 'h13_logo_stick',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Stick', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header stick.', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			),
			'required' 		=> array('h13_header_stick' , '=', '1'),
		),
		array(
			'id'            => 'h13_logo_stick_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Stick Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo stick.', 'bears' ),
			'default'       => 40,
			'min'           => 30,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text',
			'required' 		=> array('h13_header_stick' , '=', '1'),
		),
		array(
			'id'       => 'h13_menu_space_stick',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Menu Space Stick', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right margin the menu stick.', 'bears' ),
			'default'  => array(
				'margin-left'    => '0px',
				'margin-right' => '10px'
			),
			'required' 		=> array('h13_header_stick' , '=', '1'),
			'output'    => array('.bt-header-v13 .bt-header-stick .bt-menu-desktop')
		),
		array(
			'id'       => 'h13_menu_first_level_font_stick',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu First Level Typography Stick', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu first level of the header stick.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '50px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('h13_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v13 .bt-header-stick .bt-menu-desktop ul.menu > li > a')
		),
		array(
			'id'       => 'h13_menu_first_level_color_stick',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu First Level Color Stick', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu first level of the header stick.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'required' 		=> array('h13_header_stick' , '=', '1'),
			'output'   => array('.bt-header-v13 .bt-header-stick .bt-menu-desktop ul.menu > li > a, .bt-header-v13 .bt-header-stick .bt-menu-content-right .widget .bt-toggle-btn')
		),
		array(
			'id'    => 'h13_header_mobile_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Header Mobile Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for header mobile.', 'bears' )
		),
		array(
			'id'       => 'h13_mobile_header_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Header Top Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable header top.(Please enable and config in header desktop before enable)', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'h13_mobile_header_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Header Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of header mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'output'    => array('.bt-header-v13 .bt-header-mobile .bt-bottom'),
		),
		array(
			'id'       => 'h13_mobile_toggle_button',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Toggle Menu Button', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color toggle menu button of the header mobile.', 'bears' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
		),
		array(
			'id'       => 'h13_logo_mobile',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Mobile', 'bears' ),
			'subtitle' => esc_html__( 'Upload the logo of header mobile', 'bears' ),
			'default'  => array( 
				'url' => get_template_directory_uri().'/assets/images/logo.png' 
			)
		),
		array(
			'id'            => 'h13_logo_mobile_height',
			'type'          => 'slider',
			'title'         => esc_html__( 'Logo Mobile Height', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the height of the logo mobile.', 'bears' ),
			'default'       => 30,
			'min'           => 20,
			'step'          => 1,
			'max'           => 150,
			'display_value' => 'text'
		),
		array(
			'id'       => 'h13_logo_mobile_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'left'     => false,
			'title'    => esc_html__( 'Header Mobile Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom margin the logo mobile.', 'bears' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'output'    => array('.bt-header-v13 .bt-header-mobile .bt-bottom .logo')
		),
		array(
			'id'       => 'h13_mobile_menu_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Menu Mobile Background', 'bears' ),
			'subtitle' => esc_html__( 'Control background color of menu mobile.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('.bt-header-v13 .bt-header-mobile .bt-menu-mobile-wrap'),
		),
		array(
			'id'       => 'h13_menu_mobile_first_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile First Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile first level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v13 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a,
								.bt-header-v13 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h13_menu_mobile_first_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile First Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile first level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v13 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu > li > a')
		),
		array(
			'id'       => 'h13_menu_mobile_sub_level_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Menu Mobile Sub Level Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography menu mobile sub level.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'color'   => false,
			'default'  => array(
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '400',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'output'   => array('.bt-header-v13 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a,
								.bt-header-v13 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > .menu-toggle')
		),
		array(
			'id'       => 'h13_menu_mobile_sub_level_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Menu Mobile Sub Level Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color menu mobile sub level.', 'bears' ),
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
				'active'  => '#49c9e6',
			),
			'output'   => array('.bt-header-v13 .bt-header-mobile .bt-menu-mobile-wrap .bt-menu-mobile ul.menu li ul.sub-menu > li > a')
		),
		
	)
) );

<?php
// Footer
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer', 'bears' ),
	'id'               => 'bt_footer',
	'icon'             => 'el el-website',
	'fields'           => array(
		array(
			'id'       => 'footer_layout',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Footer Layout', 'bears' ),
			'subtitle' => esc_html__( 'Select a footer layout default. Foreach pages, you can change the layout by page option', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 1',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v1.jpg'
				),
				'2' => array(
					'alt' => 'Footer layout 2',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v2.jpg'
				),
				'3' => array(
					'alt' => 'Footer layout 3',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v3.jpg'
				),
				'4' => array(
					'alt' => 'Footer layout 4',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v4.jpg'
				),
				'5' => array(
					'alt' => 'Footer layout 5',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v5.jpg'
				),
				'6' => array(
					'alt' => 'Footer layout 6',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v6.jpg'
				),
				'7' => array(
					'alt' => 'Footer layout 7',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v7.jpg'
				),
				'8' => array(
					'alt' => 'Footer layout 8',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v8.jpg'
				),
				'9' => array(
					'alt' => 'Footer layout 9',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v9.jpg'
				),
				'10' => array(
					'alt' => 'Footer layout 10',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v10.jpg'
				),
				'11' => array(
					'alt' => 'Footer layout 11',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v11.jpg'
				),
				'12' => array(
					'alt' => 'Footer layout 12',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v12.jpg'
				),
				'13' => array(
					'alt' => 'Footer layout 13',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v13.jpg'
				)
			),
			'default'  => '1'
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 01', 'bears' ),
	'id'               => 'bt_footer_style1',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_1',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 01', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 1',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v1.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f1_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f1_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f1_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v1')
		),
		array(
			'id'       => 'f1_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v1'),
		),
		array(
			'id'    => 'f1_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f1_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f1_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f1_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f1_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f1_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f1_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f1_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f1_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f1_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1'),
				array('f1_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1'),
				array('f1_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f1_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f1_footer_top' , '=', '1'),
				array('f1_footer_top_columns_class' , '=', '1'),
				array('f1_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f1_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f1_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v1 .bt-footer-top'),
		),
		array(
			'id'       => 'f1_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f1_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v1 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f1_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f1_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v1 .bt-footer-top')
		),
		array(
			'id'       => 'f1_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f1_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v1 .bt-footer-top')
		),
		array(
			'id'       => 'f1_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f1_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v1 .bt-footer-top a')
		),
		array(
			'id'       => 'f1_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f1_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v1 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f1_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f1_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f1_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f1_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f1_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f1_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f1_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f1_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f1_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f1_footer_bottom_columns_class' , '=', '1'),
				array('f1_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f1_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v1 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f1_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v1 .bt-footer-bottom')
		),
		array(
			'id'       => 'f1_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v1 .bt-footer-bottom')
		),
		array(
			'id'       => 'f1_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v1 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 02', 'bears' ),
	'id'               => 'bt_footer_style2',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_2',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 02', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 2',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v2.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f2_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f2_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f2_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v2')
		),
		
		array(
			'id'    => 'f2_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f2_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f2_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f2_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f2_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f2_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f2_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f2_footer_top' , '=', '1'),
				array('f2_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f2_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f2_footer_top' , '=', '1'),
				array('f2_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f2_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f2_footer_top' , '=', '1'),
				array('f2_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f2_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f2_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f2_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f2_footer_top' , '=', '1'),
				array('f2_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f2_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f2_footer_top' , '=', '1'),
				array('f2_footer_top_columns_class' , '=', '1'),
				array('f2_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f2_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f2_footer_top' , '=', '1'),
				array('f2_footer_top_columns_class' , '=', '1'),
				array('f2_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f2_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f2_footer_top' , '=', '1'),
				array('f2_footer_top_columns_class' , '=', '1'),
				array('f2_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f2_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#ffffff',
			),
			'required' 		=> array('f2_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v2 .bt-footer-top'),
		),
		array(
			'id'       => 'f2_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f2_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v2 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f2_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f2_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v2 .bt-footer-top')
		),
		array(
			'id'       => 'f2_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#444444',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f2_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v2 .bt-footer-top')
		),
		array(
			'id'       => 'f2_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#444444',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f2_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v2 .bt-footer-top a')
		),
		array(
			'id'       => 'f2_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#333333',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f2_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v2 .bt-footer-top .wg-title')
		),
		array(
			'id'       => 'f2_before_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Before Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable before footer top.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f2_footer_top' , '=', '1')
		),
		array(
			'id'       => 'f2_before_footer_top_content',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Before Footer Top Content', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the before footer top content.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f2_before_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f2_after_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable After Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable after footer top.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f2_footer_top' , '=', '1')
		),
		array(
			'id'       => 'f2_after_footer_top_content',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('After Footer Top Content', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the after footer top content.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f2_after_footer_top' , '=', '1'),
		),
		array(
			'id'    => 'f2_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f2_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f2_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f2_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f2_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f2_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f2_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f2_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f2_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f2_footer_bottom_columns_class' , '=', '1'),
				array('f2_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f2_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#f9f9f9',
			),
			'output'    => array('.bt-footer.bt-footer-v2 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f2_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v2 .bt-footer-bottom')
		),
		array(
			'id'       => 'f2_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#444444',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v2 .bt-footer-bottom')
		),
		array(
			'id'       => 'f2_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#444444',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v2 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 03', 'bears' ),
	'id'               => 'bt_footer_style3',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_3',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 03', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 3',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v3.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f3_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f3_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f3_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v3')
		),
		array(
			'id'       => 'f3_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v3'),
		),
		array(
			'id'    => 'f3_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f3_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f3_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f3_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f3_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f3_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f3_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f3_footer_top' , '=', '1'),
				array('f3_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f3_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f3_footer_top' , '=', '1'),
				array('f3_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f3_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f3_footer_top' , '=', '1'),
				array('f3_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f3_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f3_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f3_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f3_footer_top' , '=', '1'),
				array('f3_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f3_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f3_footer_top' , '=', '1'),
				array('f3_footer_top_columns_class' , '=', '1'),
				array('f3_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f3_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f3_footer_top' , '=', '1'),
				array('f3_footer_top_columns_class' , '=', '1'),
				array('f3_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f3_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f3_footer_top' , '=', '1'),
				array('f3_footer_top_columns_class' , '=', '1'),
				array('f3_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f3_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f3_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v3 .bt-footer-top'),
		),
		array(
			'id'       => 'f3_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f3_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v3 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f3_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f3_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v3 .bt-footer-top')
		),
		array(
			'id'       => 'f3_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f3_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v3 .bt-footer-top')
		),
		array(
			'id'       => 'f3_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f3_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v3 .bt-footer-top a')
		),
		array(
			'id'       => 'f3_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f3_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v3 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f3_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f3_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f3_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f3_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f3_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f3_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f3_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f3_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f3_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f3_footer_bottom_columns_class' , '=', '1'),
				array('f3_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f3_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v3 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f3_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v3 .bt-footer-bottom')
		),
		array(
			'id'       => 'f3_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v3 .bt-footer-bottom')
		),
		array(
			'id'       => 'f3_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v3 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 04', 'bears' ),
	'id'               => 'bt_footer_style4',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_4',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 04', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 4',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v4.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f4_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f4_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f4_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v4')
		),
		array(
			'id'       => 'f4_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v4'),
		),
		array(
			'id'    => 'f4_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f4_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f4_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f4_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f4_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f4_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f4_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f4_footer_top' , '=', '1'),
				array('f4_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f4_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f4_footer_top' , '=', '1'),
				array('f4_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f4_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f4_footer_top' , '=', '1'),
				array('f4_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f4_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f4_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f4_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f4_footer_top' , '=', '1'),
				array('f4_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f4_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f4_footer_top' , '=', '1'),
				array('f4_footer_top_columns_class' , '=', '1'),
				array('f4_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f4_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f4_footer_top' , '=', '1'),
				array('f4_footer_top_columns_class' , '=', '1'),
				array('f4_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f4_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f4_footer_top' , '=', '1'),
				array('f4_footer_top_columns_class' , '=', '1'),
				array('f4_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f4_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f4_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v4 .bt-footer-top'),
		),
		array(
			'id'       => 'f4_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f4_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v4 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f4_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f4_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v4 .bt-footer-top')
		),
		array(
			'id'       => 'f4_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f4_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v4 .bt-footer-top')
		),
		array(
			'id'       => 'f4_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f4_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v4 .bt-footer-top a')
		),
		array(
			'id'       => 'f4_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f4_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v4 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f4_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f4_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f4_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f4_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f4_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f4_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f4_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f4_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f4_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f4_footer_bottom_columns_class' , '=', '1'),
				array('f4_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f4_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v4 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f4_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v4 .bt-footer-bottom')
		),
		array(
			'id'       => 'f4_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v4 .bt-footer-bottom')
		),
		array(
			'id'       => 'f4_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v4 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 05', 'bears' ),
	'id'               => 'bt_footer_style5',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_5',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 05', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 5',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v5.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f5_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f5_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f5_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v5')
		),
		array(
			'id'       => 'f5_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v5'),
		),
		array(
			'id'    => 'f5_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f5_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f5_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f5_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f5_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f5_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f5_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f5_footer_top' , '=', '1'),
				array('f5_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f5_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f5_footer_top' , '=', '1'),
				array('f5_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f5_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f5_footer_top' , '=', '1'),
				array('f5_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f5_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f5_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f5_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f5_footer_top' , '=', '1'),
				array('f5_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f5_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f5_footer_top' , '=', '1'),
				array('f5_footer_top_columns_class' , '=', '1'),
				array('f5_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f5_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f5_footer_top' , '=', '1'),
				array('f5_footer_top_columns_class' , '=', '1'),
				array('f5_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f5_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f5_footer_top' , '=', '1'),
				array('f5_footer_top_columns_class' , '=', '1'),
				array('f5_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f5_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f5_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v5 .bt-footer-top'),
		),
		array(
			'id'       => 'f5_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f5_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v5 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f5_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f5_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v5 .bt-footer-top')
		),
		array(
			'id'       => 'f5_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f5_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v5 .bt-footer-top')
		),
		array(
			'id'       => 'f5_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f5_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v5 .bt-footer-top a')
		),
		array(
			'id'       => 'f5_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f5_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v5 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f5_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f5_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f5_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f5_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f5_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f5_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f5_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f5_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f5_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f5_footer_bottom_columns_class' , '=', '1'),
				array('f5_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f5_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v5 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f5_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v5 .bt-footer-bottom')
		),
		array(
			'id'       => 'f5_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v5 .bt-footer-bottom')
		),
		array(
			'id'       => 'f5_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v5 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 06', 'bears' ),
	'id'               => 'bt_footer_style6',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_6',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 06', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 6',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v6.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f6_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f6_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f6_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v6')
		),
		array(
			'id'       => 'f6_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v6'),
		),
		array(
			'id'    => 'f6_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f6_before_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Before Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable before footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f6_before_footer_top_content',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Before Footer Top Content ', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the before footer top.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f6_before_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f6_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f6_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f6_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f6_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f6_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f6_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f6_footer_top' , '=', '1'),
				array('f6_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f6_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f6_footer_top' , '=', '1'),
				array('f6_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f6_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f6_footer_top' , '=', '1'),
				array('f6_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f6_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f6_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f6_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f6_footer_top' , '=', '1'),
				array('f6_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f6_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f6_footer_top' , '=', '1'),
				array('f6_footer_top_columns_class' , '=', '1'),
				array('f6_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f6_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f6_footer_top' , '=', '1'),
				array('f6_footer_top_columns_class' , '=', '1'),
				array('f6_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f6_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f6_footer_top' , '=', '1'),
				array('f6_footer_top_columns_class' , '=', '1'),
				array('f6_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f6_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f6_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v6 .bt-footer-top'),
		),
		array(
			'id'       => 'f6_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f6_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v6 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f6_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f6_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v6 .bt-footer-top')
		),
		array(
			'id'       => 'f6_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f6_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v6 .bt-footer-top')
		),
		array(
			'id'       => 'f6_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f6_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v6 .bt-footer-top a')
		),
		array(
			'id'       => 'f6_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f6_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v6 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f6_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f6_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f6_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f6_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f6_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f6_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f6_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f6_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f6_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f6_footer_bottom_columns_class' , '=', '1'),
				array('f6_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f6_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v6 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f6_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v6 .bt-footer-bottom')
		),
		array(
			'id'       => 'f6_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v6 .bt-footer-bottom')
		),
		array(
			'id'       => 'f6_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v6 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 07', 'bears' ),
	'id'               => 'bt_footer_style7',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_7',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 07', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 7',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v7.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f7_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f7_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f7_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v7')
		),
		array(
			'id'       => 'f7_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v7'),
		),
		array(
			'id'    => 'f7_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f7_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f7_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f7_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f7_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f7_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f7_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f7_footer_top' , '=', '1'),
				array('f7_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f7_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f7_footer_top' , '=', '1'),
				array('f7_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f7_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f7_footer_top' , '=', '1'),
				array('f7_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f7_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f7_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f7_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f7_footer_top' , '=', '1'),
				array('f7_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f7_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f7_footer_top' , '=', '1'),
				array('f7_footer_top_columns_class' , '=', '1'),
				array('f7_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f7_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f7_footer_top' , '=', '1'),
				array('f7_footer_top_columns_class' , '=', '1'),
				array('f7_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f7_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f7_footer_top' , '=', '1'),
				array('f7_footer_top_columns_class' , '=', '1'),
				array('f7_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f7_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f7_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v7 .bt-footer-top'),
		),
		array(
			'id'       => 'f7_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f7_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v7 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f7_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f7_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v7 .bt-footer-top')
		),
		array(
			'id'       => 'f7_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f7_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v7 .bt-footer-top')
		),
		array(
			'id'       => 'f7_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f7_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v7 .bt-footer-top a')
		),
		array(
			'id'       => 'f7_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f7_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v7 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f7_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f7_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f7_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f7_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f7_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f7_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f7_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f7_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f7_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f7_footer_bottom_columns_class' , '=', '1'),
				array('f7_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f7_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v7 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f7_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v7 .bt-footer-bottom')
		),
		array(
			'id'       => 'f7_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v7 .bt-footer-bottom')
		),
		array(
			'id'       => 'f7_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v7 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 08', 'bears' ),
	'id'               => 'bt_footer_style8',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_1',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 08', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 1',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v8.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f8_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f8_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f8_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v8')
		),
		array(
			'id'       => 'f8_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v8'),
		),
		array(
			'id'    => 'f8_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f8_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f8_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f8_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f8_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f8_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f8_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f8_footer_top' , '=', '1'),
				array('f8_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f8_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f8_footer_top' , '=', '1'),
				array('f8_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f8_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f8_footer_top' , '=', '1'),
				array('f8_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f8_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f8_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f8_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f8_footer_top' , '=', '1'),
				array('f8_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f8_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f8_footer_top' , '=', '1'),
				array('f8_footer_top_columns_class' , '=', '1'),
				array('f8_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f8_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f8_footer_top' , '=', '1'),
				array('f8_footer_top_columns_class' , '=', '1'),
				array('f8_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f8_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f8_footer_top' , '=', '1'),
				array('f8_footer_top_columns_class' , '=', '1'),
				array('f8_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f8_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f8_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v8 .bt-footer-top'),
		),
		array(
			'id'       => 'f8_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f8_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v8 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f8_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f8_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v8 .bt-footer-top')
		),
		array(
			'id'       => 'f8_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f8_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v8 .bt-footer-top')
		),
		array(
			'id'       => 'f8_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f8_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v8 .bt-footer-top a')
		),
		array(
			'id'       => 'f8_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f8_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v8 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f8_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f8_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f8_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f8_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f8_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f8_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f8_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f8_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f8_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f8_footer_bottom_columns_class' , '=', '1'),
				array('f8_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f8_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v8 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f8_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v8 .bt-footer-bottom')
		),
		array(
			'id'       => 'f8_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v8 .bt-footer-bottom')
		),
		array(
			'id'       => 'f8_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v8 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 09', 'bears' ),
	'id'               => 'bt_footer_style9',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_9',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 09', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 9',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v9.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f9_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f9_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f9_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v9')
		),
		array(
			'id'       => 'f9_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v9'),
		),
		array(
			'id'    => 'f9_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f9_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f9_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f9_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f9_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f9_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f9_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f9_footer_top' , '=', '1'),
				array('f9_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f9_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f9_footer_top' , '=', '1'),
				array('f9_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f9_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f9_footer_top' , '=', '1'),
				array('f9_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f9_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f9_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f9_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f9_footer_top' , '=', '1'),
				array('f9_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f9_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f9_footer_top' , '=', '1'),
				array('f9_footer_top_columns_class' , '=', '1'),
				array('f9_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f9_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f9_footer_top' , '=', '1'),
				array('f9_footer_top_columns_class' , '=', '1'),
				array('f9_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f9_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f9_footer_top' , '=', '1'),
				array('f9_footer_top_columns_class' , '=', '1'),
				array('f9_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f9_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f9_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v9 .bt-footer-top'),
		),
		array(
			'id'       => 'f9_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f9_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v9 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f9_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f9_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v9 .bt-footer-top')
		),
		array(
			'id'       => 'f9_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f9_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v9 .bt-footer-top')
		),
		array(
			'id'       => 'f9_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f9_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v9 .bt-footer-top a')
		),
		array(
			'id'       => 'f9_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f9_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v9 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f9_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f9_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f9_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f9_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f9_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f9_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f9_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f9_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f9_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f9_footer_bottom_columns_class' , '=', '1'),
				array('f9_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f9_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v9 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f9_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v9 .bt-footer-bottom')
		),
		array(
			'id'       => 'f9_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v9 .bt-footer-bottom')
		),
		array(
			'id'       => 'f9_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v9 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 10', 'bears' ),
	'id'               => 'bt_footer_style10',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_10',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 10', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 10',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v10.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f10_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f10_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f10_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v10')
		),
		array(
			'id'       => 'f10_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v10'),
		),
		array(
			'id'    => 'f10_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f10_before_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Before Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable before footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f10_before_footer_top_content',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Before Footer Top Content ', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the before footer top.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f10_before_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f10_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f10_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f10_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f10_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f10_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f10_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f10_footer_top' , '=', '1'),
				array('f10_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f10_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f10_footer_top' , '=', '1'),
				array('f10_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f10_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f10_footer_top' , '=', '1'),
				array('f10_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f10_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f10_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f10_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f10_footer_top' , '=', '1'),
				array('f10_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f10_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f10_footer_top' , '=', '1'),
				array('f10_footer_top_columns_class' , '=', '1'),
				array('f10_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f10_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f10_footer_top' , '=', '1'),
				array('f10_footer_top_columns_class' , '=', '1'),
				array('f10_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f10_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f10_footer_top' , '=', '1'),
				array('f10_footer_top_columns_class' , '=', '1'),
				array('f10_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f10_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f10_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v10 .bt-footer-top'),
		),
		array(
			'id'       => 'f10_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f10_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v10 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f10_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f10_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v10 .bt-footer-top')
		),
		array(
			'id'       => 'f10_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f10_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v10 .bt-footer-top')
		),
		array(
			'id'       => 'f10_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f10_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v10 .bt-footer-top a')
		),
		array(
			'id'       => 'f10_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f10_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v10 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f10_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f10_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f10_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f10_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f10_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f10_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f10_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f10_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f10_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f10_footer_bottom_columns_class' , '=', '1'),
				array('f10_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f10_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v10 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f10_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v10 .bt-footer-bottom')
		),
		array(
			'id'       => 'f10_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v10 .bt-footer-bottom')
		),
		array(
			'id'       => 'f10_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v10 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 11', 'bears' ),
	'id'               => 'bt_footer_style11',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_11',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 11', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 11',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v11.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f11_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f11_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f11_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v11')
		),
		array(
			'id'       => 'f11_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v11'),
		),
		array(
			'id'    => 'f11_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f11_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f11_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f11_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f11_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f11_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f11_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f11_footer_top' , '=', '1'),
				array('f11_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f11_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f11_footer_top' , '=', '1'),
				array('f11_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f11_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f11_footer_top' , '=', '1'),
				array('f11_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f11_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f11_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f11_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f11_footer_top' , '=', '1'),
				array('f11_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f11_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f11_footer_top' , '=', '1'),
				array('f11_footer_top_columns_class' , '=', '1'),
				array('f11_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f11_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f11_footer_top' , '=', '1'),
				array('f11_footer_top_columns_class' , '=', '1'),
				array('f11_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f11_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f11_footer_top' , '=', '1'),
				array('f11_footer_top_columns_class' , '=', '1'),
				array('f11_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f11_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f11_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v11 .bt-footer-top'),
		),
		array(
			'id'       => 'f11_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f11_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v11 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f11_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f11_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v11 .bt-footer-top')
		),
		array(
			'id'       => 'f11_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f11_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v11 .bt-footer-top')
		),
		array(
			'id'       => 'f11_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f11_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v11 .bt-footer-top a')
		),
		array(
			'id'       => 'f11_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f11_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v11 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f11_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f11_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f11_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f11_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f11_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f11_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f11_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f11_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f11_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f11_footer_bottom_columns_class' , '=', '1'),
				array('f11_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f11_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v11 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f11_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v11 .bt-footer-bottom')
		),
		array(
			'id'       => 'f11_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v11 .bt-footer-bottom')
		),
		array(
			'id'       => 'f11_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v11 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 12', 'bears' ),
	'id'               => 'bt_footer_style12',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_12',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 12', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 12',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v12.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f12_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f12_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f12_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v12')
		),
		array(
			'id'       => 'f12_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v12'),
		),
		array(
			'id'    => 'f12_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f12_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f12_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f12_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f12_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f12_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f12_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f12_footer_top' , '=', '1'),
				array('f12_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f12_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f12_footer_top' , '=', '1'),
				array('f12_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f12_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f12_footer_top' , '=', '1'),
				array('f12_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f12_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f12_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f12_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f12_footer_top' , '=', '1'),
				array('f12_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f12_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f12_footer_top' , '=', '1'),
				array('f12_footer_top_columns_class' , '=', '1'),
				array('f12_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f12_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f12_footer_top' , '=', '1'),
				array('f12_footer_top_columns_class' , '=', '1'),
				array('f12_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f12_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f12_footer_top' , '=', '1'),
				array('f12_footer_top_columns_class' , '=', '1'),
				array('f12_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f12_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f12_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v12 .bt-footer-top'),
		),
		array(
			'id'       => 'f12_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f12_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v12 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f12_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f12_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v12 .bt-footer-top')
		),
		array(
			'id'       => 'f12_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f12_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v12 .bt-footer-top')
		),
		array(
			'id'       => 'f12_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f12_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v12 .bt-footer-top a')
		),
		array(
			'id'       => 'f12_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f12_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v12 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f12_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f12_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f12_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f12_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f12_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f12_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f12_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f12_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f12_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f12_footer_bottom_columns_class' , '=', '1'),
				array('f12_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f12_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v12 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f12_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v12 .bt-footer-bottom')
		),
		array(
			'id'       => 'f12_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v12 .bt-footer-bottom')
		),
		array(
			'id'       => 'f12_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v12 .bt-footer-bottom a')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Footer Style 13', 'bears' ),
	'id'               => 'bt_footer_style13',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'footer_layout_13',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout Selected', 'bears' ),
			'subtitle' => esc_html__( 'This is the options you can change for footer style 13', 'bears' ),
			'options'  => array(
				'1' => array(
					'alt' => 'Footer layout 13',
					'img' => get_template_directory_uri() . '/assets/images/footers/footer-v13.jpg'
				)
			),
			'default'  => '1'
		),
		array(
			'id'       => 'f13_fixed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Fixed', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer fixed.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f13_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the header area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f13_footer_margin_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'    => false,
			'bottom'   => false,
			'left'     => false,
			'title'    => esc_html__( 'Footer Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top margin the footer.', 'bears' ),
			'default'  => array(
				'margin-top' => '60px'
			),
			'output'    => array('.bt-footer.bt-footer-v13')
		),
		array(
			'id'       => 'f13_footer_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'output'    => array('.bt-footer.bt-footer-v13'),
		),
		array(
			'id'    => 'f13_footer_top_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Top Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer top.', 'bears' )
		),
		array(
			'id'       => 'f13_footer_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top.', 'bears' ),
			'default'  => false
		),
		array(
			'id'            => 'f13_footer_top_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Top Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer top.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'label',
			'required' 		=> array('f13_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f13_footer_top_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f13_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f13_footer_top_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f13_footer_top' , '=', '1'),
				array('f13_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f13_footer_top_col_3',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 3', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f13_footer_top' , '=', '1'),
				array('f13_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f13_footer_top_col_4',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Top Content Column 4', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer top column 4.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array(
				array('f13_footer_top' , '=', '1'),
				array('f13_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f13_footer_top_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Top Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer top columns class.', 'bears' ),
			'default'  => false,
			'required' 		=> array('f13_footer_top' , '=', '1'),
		),
		array(
			'id'       => 'f13_footer_top_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 1', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f13_footer_top' , '=', '1'),
				array('f13_footer_top_columns_class' , '=', '1')
			),
		),
		array(
			'id'       => 'f13_footer_top_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 2', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f13_footer_top' , '=', '1'),
				array('f13_footer_top_columns_class' , '=', '1'),
				array('f13_footer_top_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f13_footer_top_col_3_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 3 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 3', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f13_footer_top' , '=', '1'),
				array('f13_footer_top_columns_class' , '=', '1'),
				array('f13_footer_top_columns' , '>', '2')
			),
		),
		array(
			'id'       => 'f13_footer_top_col_4_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Top Column 4 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer top column 4', 'bears'),
			'default'  => 'col-sm-6 col-md-3',
			'required' 		=> array(
				array('f13_footer_top' , '=', '1'),
				array('f13_footer_top_columns_class' , '=', '1'),
				array('f13_footer_top_columns' , '>', '3')
			),
		),
		array(
			'id'       => 'f13_footer_top_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Top Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer top.', 'bears' ),
			'default'  => array(
				'background-color' => '#252525',
			),
			'required' 		=> array('f13_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v13 .bt-footer-top'),
		),
		array(
			'id'       => 'f13_footer_top_overlay',
			'type'     => 'color_rgba',
			'title'    => esc_html__( 'Footer Top Overlay Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the overlay color of the footer top.', 'bears' ),
			'default'  => array(
				'color' => '',
				'alpha' => '1'
			),
			'mode'     => 'background',
			'required' 		=> array('f13_footer_top' , '=', '1'),
			'output'   => array( '.bt-footer.bt-footer-v13 .bt-footer-top .bt-overlay' ),
		),
		array(
			'id'       => 'f13_footer_top_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Top Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer top.', 'bears' ),
			'default'  => array(
				'padding-top'    => '30px',
				'padding-right'  => '0px',
				'padding-bottom' => '30px',
				'padding-left' 	=> '0px'
			),
			'required' 		=> array('f13_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v13 .bt-footer-top')
		),
		array(
			'id'       => 'f13_footer_top_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f13_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v13 .bt-footer-top')
		),
		array(
			'id'       => 'f13_footer_top_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Top Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer top.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'required' 		=> array('f13_footer_top' , '=', '1'),
			'output'   => array('.bt-footer.bt-footer-v13 .bt-footer-top a')
		),
		array(
			'id'       => 'f13_footer_top_widget_titile_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Top Widget Titile Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer top widget title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#FFFFFF',
				'font-size'   => '18px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('f13_footer_top' , '=', '1'),
			'output'    => array('.bt-footer.bt-footer-v13 .bt-footer-top .wg-title')
		),
		
		array(
			'id'    => 'f13_footer_bottom_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Footer Bottom Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change for footer bottom.', 'bears' )
		),
		array(
			'id'            => 'f13_footer_bottom_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Footer Bottom Columns', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the columns number of the footer bottom.', 'bears' ),
			'default'       => 2,
			'min'           => 1,
			'step'          => 1,
			'max'           => 2,
			'display_value' => 'label'
		),
		array(
			'id'       => 'f13_footer_bottom_col_1',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 1', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 1.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => ''
		),
		array(
			'id'       => 'f13_footer_bottom_col_2',
			'type'     => 'select',
			'multi'    => true,
			'title'    => esc_html__('Footer Bottom Content Column 2', 'bears'), 
			'subtitle' => esc_html__('Controls the content that displays in the footer bottom column 2.', 'bears'),
			'options'  => bears_get_sidebars(),
			'default'  => '',
			'required' 		=> array('f13_footer_bottom_columns' , '>', '1')
		),
		array(
			'id'       => 'f13_footer_bottom_columns_class',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Footer Bottom Columns Class', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable footer bottom columns class.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'f13_footer_bottom_col_1_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 1 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 1', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array('f13_footer_bottom_columns_class' , '=', '1')
		),
		array(
			'id'       => 'f13_footer_bottom_col_2_class',
			'type'     => 'text',
			'title'    => esc_html__('Footer Bottom Column 2 Class', 'bears'),
			'subtitle' => esc_html__('Controls the column width with bootstrap class and extra class of footer bottom column 2', 'bears'),
			'default'  => 'col-md-6',
			'required' 		=> array(
				array('f13_footer_bottom_columns_class' , '=', '1'),
				array('f13_footer_bottom_columns' , '>', '1')
			),
		),
		array(
			'id'       => 'f13_footer_bottom_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Footer Bottom Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the footer bottom.', 'bears' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#121212',
			),
			'output'    => array('.bt-footer.bt-footer-v13 .bt-footer-bottom'),
		),
		array(
			'id'       => 'f13_footer_bottom_padding_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'title'    => esc_html__( 'Footer Bottom Padding Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the footer bottom.', 'bears' ),
			'default'  => array(
				'padding-top'    => '10px',
				'padding-right'  => '0px',
				'padding-bottom' => '10px',
				'padding-left' 	=> '0px'
			),
			'output'    => array('.bt-footer.bt-footer-v13 .bt-footer-bottom')
		),
		array(
			'id'       => 'f13_footer_bottom_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Footer Bottom Font', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography footer bottom.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'color'       => '#DCDCDC',
				'font-size'   => '14px',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'output'    => array('.bt-footer.bt-footer-v13 .bt-footer-bottom')
		),
		array(
			'id'       => 'f13_footer_bottom_link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Footer Bottom Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the link color of footer bottom.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#FFFFFF',
				'hover'   => '#49c9e6',
			),
			'output'   => array('.bt-footer.bt-footer-v13 .bt-footer-bottom a')
		),
		
	)
) );
<?php
// Services
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Services', 'bears' ),
	'id'               => 'bt_services',
	'icon'             => 'el el-puzzle ',
	'fields'           => array(
		array(
			'id'       => 'services_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'services_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'bears' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('services_fullwidth' , '=', '1'),
			'output'    => array('.tax-bt_services_category .bt-main-content')
		),
		array(
			'id'            => 'services_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'bears' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'services_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'services_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'bears' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('services_titlebar' , '=', '1'),
			'output'    => array('.tax-bt_services_category .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'services_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'bears' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.tax-bt_services_category .bt-main-content')
		),
		array(
			'id'    => 'services_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the services page.', 'bears' )
		),
		array(
			'id'       => 'services_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'services_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '28px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('services_title' , '=', '1'),
			'output'   => array('.tax-bt_services_category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'services_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'services_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'bears' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'bears' ),
			'default'  => 'full',
			'required' 		=> array('services_featured' , '=', '1')
		),
		array(
			'id'       => 'services_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'services_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'services_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'bears' ),
			'default'  => '55',
			'required' 		=> array('services_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'services_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'bears' ),
			'default'  => '[...]',
			'required' 		=> array('services_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'services_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'services_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('services_readmore' , '=', '1'),
			'output'   => array('.tax-bt_services_category .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'services_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'bears' ),
			'default'  => 'Read More',
			'required' 		=> array('services_readmore' , '=', '1'),
		),
		array(
			'id'       => 'services_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.tax-bt_services_category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Services', 'bears' ),
	'id'               => 'bt_single_services',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_services_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'single_services_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'bears' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('single_services_fullwidth' , '=', '1'),
			'output'    => array('.single-bt_services .bt-main-content')
		),
		array(
			'id'            => 'single_services_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'bears' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'single_services_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_services_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'bears' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('single_services_titlebar' , '=', '1'),
			'output'    => array('.single-bt_services .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_services_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'bears' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.single-bt_services .bt-main-content')
		),
		array(
			'id'    => 'single_services_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'bears' )
		),
		array(
			'id'       => 'single_services_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'single_services_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory_uri().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '36px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '46px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_services_title' , '=', '1'),
			'output'   => array('.single-bt_services .bt-post-item .bt-title, .single-bt_services article .bt-header .bt-content .bt-title')
		),
		array(
			'id'       => 'single_services_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_services_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'bears' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'bears' ),
			'default'  => 'full',
			'required' 		=> array('single_services_featured' , '=', '1')
		),
		array(
			'id'       => 'single_services_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_services_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'bears' ),
			'default'  => true
		),
	)
) );

<?php
// Story
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Story', 'bears' ),
	'id'               => 'bt_story',
	'icon'             => 'el el-puzzle ',
	'fields'           => array(
		array(
			'id'       => 'story_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'story_fullwidth_space',
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
			'required' 		=> array('story_fullwidth' , '=', '1'),
			'output'    => array('.tax-bt_story_category .bt-main-content')
		),
		array(
			'id'            => 'story_sidebar_width',
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
			'id'       => 'story_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'story_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'bears' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('story_titlebar' , '=', '1'),
			'output'    => array('.tax-bt_story_category .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'story_content_sapce',
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
			'output'   => array('.tax-bt_story_category .bt-main-content')
		),
		array(
			'id'    => 'story_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the story page.', 'bears' )
		),
		array(
			'id'       => 'story_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'story_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '28px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('story_title' , '=', '1'),
			'output'   => array('.tax-bt_story_category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'story_title_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Title Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post title.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('story_title' , '=', '1'),
			'output'   => array('.tax-bt_story_category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'story_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'story_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'bears' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'bears' ),
			'default'  => 'full',
			'required' 		=> array('story_featured' , '=', '1')
		),
		array(
			'id'       => 'story_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'story_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'story_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'bears' ),
			'default'  => '55',
			'required' 		=> array('story_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'story_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'bears' ),
			'default'  => '[...]',
			'required' 		=> array('story_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'story_excerpt_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Excerpt Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '15px'
			),
			'required' 		=> array('story_excerpt' , '=', '1'),
			'output'   => array('.tax-bt_story_category .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'story_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'story_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('story_readmore' , '=', '1'),
			'output'   => array('.tax-bt_story_category .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'story_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'bears' ),
			'default'  => 'Read More',
			'required' 		=> array('story_readmore' , '=', '1'),
		),
		array(
			'id'       => 'story_article_space',
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
			'output'    => array('.tax-bt_story_category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Story', 'bears' ),
	'id'               => 'bt_single_story',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_story_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'single_story_fullwidth_space',
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
			'required' 		=> array('single_story_fullwidth' , '=', '1'),
			'output'    => array('.single-bt_story .bt-main-content')
		),
		array(
			'id'            => 'single_story_sidebar_width',
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
			'id'       => 'single_story_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_story_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'bears' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('single_story_titlebar' , '=', '1'),
			'output'    => array('.single-bt_story .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_story_content_sapce',
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
			'output'   => array('.single-bt_story .bt-main-content')
		),
		array(
			'id'    => 'single_story_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'bears' )
		),
		array(
			'id'       => 'single_story_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'single_story_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'bears' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'bears' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts, 'google' => false,
			'default'  => array(
				'font-size'   => '36px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '46px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_story_title' , '=', '1'),
			'output'   => array('.single-bt_story .bt-post-item .bt-title, .single-bt_story .bt-post-item .bt-header .bt-info .bt-inner .bt-title')
		),
		array(
			'id'       => 'single_story_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_story_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'bears' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'bears' ),
			'default'  => 'full',
			'required' 		=> array('single_story_featured' , '=', '1')
		),
		array(
			'id'       => 'single_story_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_story_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'bears' ),
			'default'  => true
		),
	)
) );

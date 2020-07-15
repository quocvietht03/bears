<?php
// Blog
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Blog', 'bears' ),
	'id'               => 'bt_blog',
	'icon'             => 'el el-file-edit',
	'fields'           => array(
		array(
			'id'       => 'blog_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'blog_fullwidth_space',
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
			'required' 		=> array('blog_fullwidth' , '=', '1'),
			'output'    => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'            => 'blog_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'blog_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'bears' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('blog_titlebar' , '=', '1'),
			'output'    => array('.category .bt-titlebar .bt-titlebar-inner, .tag .bt-titlebar .bt-titlebar-inner, .search .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'blog_content_sapce',
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
			'output'   => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'    => 'blog_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'bears' )
		),
		array(
			'id'       => 'post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'post_title_font',
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
				'line-height' => '32px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'bears' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'bears' ),
			'default'  => 'full',
			'required' 		=> array('post_featured' , '=', '1')
		),
		array(
			'id'       => 'post_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Featured Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post featured.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('post_featured' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-media, .tag .bt-post-item .bt-media, .search .bt-post-item .bt-media')
		),
		array(
			'id'       => 'post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'bears' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'bears' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'bears' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'bears' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'post_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'bears' ),
			'default'  => '55',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'bears' ),
			'default'  => '[...]',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_sapce',
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
			'required' 		=> array('post_excerpt' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-excerpt, .tag .bt-post-item .bt-excerpt, .search .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'post_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'post_readmore_font',
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
				'font-size'   => '13px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_readmore' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-readmore, .tag .bt-post-item .bt-readmore, .search .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'post_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'bears' ),
			'default'  => 'Read More',
			'required' 		=> array('post_readmore' , '=', '1'),
		),
		array(
			'id'       => 'blog_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '40px'
			),
			'output'    => array('.category .bt-post-item, .tag .bt-post-item, .search .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Post', 'bears' ),
	'id'               => 'bt_post',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'post_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'post_fullwidth_space',
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
			'required' 		=> array('post_fullwidth' , '=', '1'),
			'output'    => array('.single-post .bt-main-content')
		),
		array(
			'id'            => 'post_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'bears' ),
			'default'       => 4,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'post_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'post_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'bears' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'bears' ),
			'default'  => array(
				'background-color' => '#333333',
			),
			'required' 	=> array('post_titlebar' , '=', '1'),
			'output'    => array('.single-post .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'post_content_sapce',
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
			'output'   => array('.single-post .bt-main-content')
		),
		array(
			'id'       => 'single_post_navigation',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Navigation', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the post navigation.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_navigation_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Navigation Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post navigation.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '15px'
			),
			'required' 		=> array('single_post_navigation' , '=', '1'),
			'output'   => array('.single-post .bt-blog-article-nav')
		),
		array(
			'id'       => 'single_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Author', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the author.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_author_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Author Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the author.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_author' , '=', '1'),
			'output'   => array('.single-post .bt-about-author')
		),
		array(
			'id'       => 'single_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Comment', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the comment.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_comment_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Comment Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the comment.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_comment' , '=', '1'),
			'output'   => array('.single-post .bt-comment-wrapper')
		),
		array(
			'id'    => 'single_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'bears' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'bears' )
		),
		array(
			'id'       => 'single_post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_title_font',
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
				'font-size'   => '30px',
				'font-family' => 'Poppins',
				'font-weight' => '700',
				'line-height' => '46px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'bears' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'bears' ),
			'default'  => 'full',
			'required' 		=> array('single_post_featured' , '=', '1')
		),
		array(
			'id'       => 'single_post_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Featured Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post featured.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_featured' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-media')
		),
		array(
			'id'       => 'single_post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Content Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_content' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-content')
		),
		array(
			'id'       => 'single_post_tag',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Tags', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the tags.', 'bears' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Shares', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the share.', 'bears' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_share_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Share Label', 'bears' ),
			'subtitle' => esc_html__( 'Please, Enter label of the share. Leave empty to use "Share:" label.', 'bears' ),
			'default'  => 'Share:',
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_facebook',
			'type'     => 'switch',
			'title'    => esc_html__( 'Facebook', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the facebook share.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_twitter',
			'type'     => 'switch',
			'title'    => esc_html__( 'Twitter', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the twitter share.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_google_plus',
			'type'     => 'switch',
			'title'    => esc_html__( 'Google Plus', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the google plus share.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_linkedin',
			'type'     => 'switch',
			'title'    => esc_html__( 'Linkedin', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the linkedin share.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_pinterest',
			'type'     => 'switch',
			'title'    => esc_html__( 'Pinterest', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to show the pinterest share.', 'bears' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'bears' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'bears' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'output'    => array('.single-post .bt-post-item')
		),
		
	)
) );

<?php
// Page
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Page', 'bears' ),
	'id'               => 'bt_page',
	'icon'             => 'el el-bookmark-empty',
	'fields'           => array(
		array(
			'id'       => 'page_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Page Comment', 'bears' ),
			'subtitle' => esc_html__( 'Turn on to enable page comment.', 'bears' ),
			'default'  => true,
		),
		array(
			'id'            => 'sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'bears' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'bears' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
	)
) );

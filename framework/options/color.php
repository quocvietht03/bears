<?php
// Colors
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Colors', 'bears' ),
	'id'               => 'bt_colors',
	'icon'             => 'el el-tint',
	'fields'           => array(
		array(
			'id'       => 'main_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Main Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the main highlight color throughout the theme. Class apply: bt-main-color', 'bears' ),
			'default'  => '#49c9e6',
			'output'   => array('.bt-main-color')
		),
		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Secondary Color', 'bears' ),
			'subtitle' => esc_html__( 'Control the secondary highlight color throughout the theme. Class apply: bt-secondary-color', 'bears' ),
			'default'  => '#49c9e6',
			'output'   => array('.bt-secondary-color')
		),
		array(
			'id'       => 'link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Link Color', 'bears' ),
			'subtitle' => esc_html__( 'Controls the color of all text links.', 'bears' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#333333',
				'hover'   => '#49c9e6',
			),
			'output'   => array('a, .bt-link-color')
		),
		
	)
) );

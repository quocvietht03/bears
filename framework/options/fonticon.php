<?php
// Icons
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Font Icons', 'bears' ),
	'id'               => 'bt_fonticons',
	'icon'             => 'el el-info-circle',
	'fields'           => array(
		array(
			'id'       => 'font_awesome',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Awesome', 'bears' ),
			'subtitle' => esc_html__( 'Use font awesome.', 'bears' ),
			'default'  => true,
		),
		array(
			'id'       => 'font_pe_icon_7_stroke',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Pe Icon 7 Stroke', 'bears' ),
			'subtitle' => esc_html__( 'Use font pe icon 7 stroke.', 'bears' ),
			'default'  => false,
		),
		array(
			'id'       => 'flaticon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Flaticon', 'bears' ),
			'subtitle' => esc_html__( 'Use font flaticon.', 'bears' ),
			'default'  => false,
		),
	)
) );

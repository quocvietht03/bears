<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => esc_html__('Type', 'bears'),
				'value' => 'customize',
				'choices' => array(
					'customize' => esc_html__('Customize', 'bears'),
					'fullwidth' => esc_html__('Fullwidth', 'bears'),
				),
			)
		),
		'choices' => array(
			'customize' => array(
				'menu_mega_container_width' => array(
					'label' => esc_html__('Width', 'bears'),
					'desc' => esc_html__('Please enter number with px for container width (default: 840px)', 'bears'),
					'type' => 'short-text',
					'value' => '840px'
				),
				'menu_mega_container_position' => array(
					'label' => esc_html__('Position', 'bears'),
					'desc' => esc_html__('Select the sub menu display position', 'bears'),
					'type' => 'radio',
					'value' => 'menu-item-pos-left',
					'choices' => array(
						'menu-item-pos-left' => esc_html__('Left', 'bears'),
						'menu-item-pos-center' => esc_html__('Center', 'bears'),
						'menu-item-pos-right' => esc_html__('Right', 'bears'),
					),
					'inline' => true,
				),
			),
		),
	),
	'menu_mega_container_bg' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => esc_html__('Background Type', 'bears'),
				'value' => 'color',
				'choices' => array(
					'color' => esc_html__('Color', 'bears'),
					'image' => esc_html__('Image', 'bears'),
				),
			)
		),
		'choices' => array(
			'color' => array(
				'bg_color' => array(
					'label' => esc_html__( 'Background Color', 'bears' ),
					'desc'  => esc_html__( 'Choose background color for container mega menu (default: #ffffff)', 'bears' ),
					'type'  => 'color-picker',
					'value' => '#ffffff',
				),
			),
			'image' => array(
				'bg_image' => array(
					'label' => esc_html__( 'Background Image', 'bears' ),
					'desc'  => esc_html__( 'Choose background image for container mega menu', 'bears' ),
					'type'  => 'upload',
				),
				'bg_image_repeat' => array(
					'label' => esc_html__( 'Background Repeat', 'bears' ),
					'desc'  => esc_html__( 'Choose background repeat for container mega menu', 'bears' ),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat' => esc_html__('No Repeat', 'bears'),
						'repeat' => esc_html__('Repeat', 'bears'),
					),
				),
				'bg_image_size' => array(
					'label' => esc_html__( 'Background Size', 'bears' ),
					'desc'  => esc_html__( 'Choose background size for container mega menu', 'bears' ),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'cover' => esc_html__('Cover', 'bears'),
						'contain' => esc_html__('Contain', 'bears'),
					),
				),
				'bg_image_position' => array(
					'label' => esc_html__( 'Background Position', 'bears' ),
					'desc'  => esc_html__( 'Please enter background position for container mega menu (default: center center)', 'bears' ),
					'type' => 'short-text',
					'value' => 'center center',
				),
			),
		),
	),
	'menu_mega_row_padding' => array(
		'label' => esc_html__('Padding', 'bears'),
		'desc' => esc_html__('Please enter number with px or % for row padding (default: 15px 10px)', 'bears'),
		'type' => 'short-text',
		'value' => '15px 10px'
	),
);

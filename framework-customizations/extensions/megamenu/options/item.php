<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'mega_menu_item_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label' => esc_html__( 'Type', 'bears' ),
				'desc' => esc_html__( 'Please select menu type', 'bears' ),
				'value' => '',
				'choices' => array(
					'default' => esc_html__('Default', 'bears'),
					'sidebar' => esc_html__('Sidebar', 'bears'),
				),
			),
		),
		'choices' => array(
			'sidebar' => array(
				'sidebar_id' => array(
					'type' => 'select',
					'label' => esc_html__( 'Sidebar', 'bears' ),
					'desc' => esc_html__( 'Please select sitebar', 'bears' ),
					'value' => '',
					'choices' => bears_get_sidebars(),
				),
			),
		),
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => esc_html__('Badge', 'bears'),
				'left-choice' => array(
					'value' => 'no',
					'label' => esc_html__('No', 'bears'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => esc_html__('Yes', 'bears'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => esc_html__('Text', 'bears'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => esc_html__('Background Color', 'bears'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => esc_html__('Color', 'bears'),
						),
					),
				),
			),
		),
	),
);

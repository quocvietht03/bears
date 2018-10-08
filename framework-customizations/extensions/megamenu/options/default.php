<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_item_padding' => array(
		'label' => esc_html__('Menu Item Padding', 'bears'),
		'desc' => esc_html__('Please enter number with px or % for menu item level 1 padding (default: 0px 10px)', 'bears'),
		'type' => 'short-text',
		'value' => '0px 10px'
	),
	'sub_menu_padding' => array(
		'label' => esc_html__('Sub Menu Padding', 'bears'),
		'desc' => esc_html__('Please enter number with px or % for sub menu padding (default: 0px)', 'bears'),
		'type' => 'short-text',
		'value' => '0px'
	),
	'sub_menu_align' => array(
		'label' => esc_html__('Position', 'bears'),
		'desc' => esc_html__('Select the sub menu display position', 'bears'),
		'type' => 'radio',
		'value' => 'menu-align-left',
		'choices' => array(
			'menu-align-left' => esc_html__('Left', 'bears'),
			'menu-align-right' => esc_html__('Right', 'bears'),
		),
		'inline' => true,
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
<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_column_width' => array(
		'label' => esc_html__('Column Width', 'bears'),
		'desc' => esc_html__('Please enter number with px or % for column width (default: 210px)', 'bears'),
		'type' => 'short-text',
		'value' => '210px'
	),
	'menu_mega_column_padding' => array(
		'label' => esc_html__('Padding', 'bears'),
		'desc' => esc_html__('Please enter number with px or % for column padding (default: 0px 10px)', 'bears'),
		'type' => 'short-text',
		'value' => '0px 10px'
	),
);
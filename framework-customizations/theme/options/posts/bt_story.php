<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'story_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'story-meta' => array(
				'title' => esc_html__('Meta Fields', 'bears'),
				'type' => 'tab',
				'options' => array(
					'email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => esc_html__('Email', 'bears'),
						'desc'  => esc_html__('Please, enter email of member.', 'bears'),
					),
					'phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => esc_html__('Phone', 'bears'),
						'desc'  => esc_html__('Please, enter phone number of member.', 'bears'),
					),
					
				),
			),
			
		)
	)
	
);
